<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    // Récupérer toutes les histoires
    public function getStories()
    {
        return response()->json(Story::all());
    }

    // Récupérer une histoire spécifique
    public function getStory($id)
    {
        return response()->json(
            Story::with('chapters.choices')->findOrFail($id)
        );
    }

    // Créer une histoire
    public function createStory(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $story = Story::create($data);
        return response()->json($story, 201);
    }

    // Mettre à jour une histoire
    public function updateStory(Request $request, $id)
    {
        $story = Story::findOrFail($id);

        $story->update($request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
        ]));

        return response()->json($story);
    }

    // Supprimer une histoire
    public function deleteStory($id)
    {
        Story::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
