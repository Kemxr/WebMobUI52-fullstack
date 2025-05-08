<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Requests\StoryStoreRequest;
use App\Http\Requests\StoryUpdateRequest;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::all();
        return view('home', compact('stories'));
    }
    
    public function getStories()
    {
        return response()->json(Story::all());
    }

    public function getStory($id)
    {
        return response()->json(
            Story::with('chapters.choices')->findOrFail($id)
        );
    }

    // // Créer une histoire
    // public function createStory(Request $request)
    // {
    //     $data = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'description' => 'nullable|string',
    //     ]);

    //     $story = Story::create($data);
    //     return response()->json($story, 201);
    // }

    // // Mettre à jour une histoire
    // public function updateStory(Request $request, $id)
    // {
    //     $story = Story::findOrFail($id);

    //     $story->update($request->validate([
    //         'title' => 'sometimes|string|max:255',
    //         'description' => 'nullable|string',
    //     ]));

    //     return response()->json($story);
    // }

    public function createStory(StoryStoreRequest $request)
    {
        $story = Story::create($request->validated());
        return response()->json($story, 201);
    }

    public function updateStory(StoryUpdateRequest $request, $id)
    {
        $story = Story::findOrFail($id);
        $story->update($request->validated());
        return response()->json($story);
    }

    public function deleteStory($id)
    {
        Story::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
