<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use Illuminate\Http\Request;
use App\Http\Requests\ChapterStoreRequest;
use App\Http\Requests\ChapterUpdateRequest;

class ChapterController extends Controller
{
    // Récupérer tous les chapitres
    public function getChapters()
    {
        return response()->json(Chapter::with('choices')->get());
    }

    // Récupérer un chapitre spécifique par ID
    public function getChapter($id)
    {
        return response()->json(
            Chapter::with('choices')->findOrFail($id)
        );
    }

    // // Créer un chapitre
    // public function createChapter(Request $request)
    // {
    //     $data = $request->validate([
    //         'story_id' => 'required|exists:stories,id',
    //         'number' => 'required|integer|min:1',
    //         'content' => 'required|string',
    //     ]);

    //     $chapter = Chapter::create($data);
    //     return response()->json($chapter, 201);
    // }

    // // Mettre à jour un chapitre
    // public function updateChapter(Request $request, $id)
    // {
    //     $chapter = Chapter::findOrFail($id);

    //     $chapter->update($request->validate([
    //         'number' => 'sometimes|integer|min:1',
    //         'content' => 'sometimes|string',
    //     ]));

    //     return response()->json($chapter);
    // }

    public function createChapter(ChapterStoreRequest $request)
    {
        $chapter = Chapter::create($request->validated());
        return response()->json($chapter, 201);
    }

    public function updateChapter(ChapterUpdateRequest $request, $id)
    {
        $chapter = Chapter::findOrFail($id);
        $chapter->update($request->validated());
        return response()->json($chapter);
    }

    // Supprimer un chapitre
    public function deleteChapter($id)
    {
        Chapter::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
