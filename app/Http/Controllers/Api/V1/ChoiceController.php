<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Choice;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    // Récupérer tous les choix
    public function getChoices()
    {
        return response()->json(
            Choice::with(['chapter', 'target'])->get()
        );
    }

    // Récupérer un choix précis
    public function getChoice($id)
    {
        return response()->json(
            Choice::with(['chapter', 'target'])->findOrFail($id)
        );
    }

    // Créer un choix
    public function createChoice(Request $request)
    {
        $data = $request->validate([
            'chapter_id' => 'required|exists:chapters,id',
            'text' => 'required|string|max:255',
            'target_chapter_id' => 'nullable|exists:chapters,id',
        ]);

        $choice = Choice::create($data);
        return response()->json($choice, 201);
    }

    // Mettre à jour un choix
    public function updateChoice(Request $request, $id)
    {
        $choice = Choice::findOrFail($id);

        $choice->update($request->validate([
            'text' => 'sometimes|string|max:255',
            'target_chapter_id' => 'nullable|exists:chapters,id',
        ]));

        return response()->json($choice);
    }

    // Supprimer un choix
    public function deleteChoice($id)
    {
        Choice::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
