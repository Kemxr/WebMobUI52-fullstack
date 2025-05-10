<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Choice;
use Illuminate\Http\Request;
use App\Http\Requests\ChoiceStoreRequest;
use App\Http\Requests\ChoiceUpdateRequest;

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

    public function createChoice(ChoiceStoreRequest $request)
    {
        $choice = Choice::create($request->validated());
        return response()->json($choice, 201);
    }

    public function updateChoice(ChoiceUpdateRequest $request, $id)
    {
        $choice = Choice::findOrFail($id);
        $choice->update($request->validated());
        return response()->json($choice);
    }

    // Supprimer un choix
    public function deleteChoice($id)
    {
        Choice::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
