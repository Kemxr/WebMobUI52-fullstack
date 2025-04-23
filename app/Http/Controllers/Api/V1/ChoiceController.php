<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Choice;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    public function index()
    {
        return Choice::with(['chapter', 'target'])->get();
    }

    public function show(Choice $choice)
    {
        return $choice->load(['chapter', 'target']);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'chapter_id' => 'required|exists:chapters,id',
            'text' => 'required|string|max:255',
            'target_chapter_id' => 'nullable|exists:chapters,id',
        ]);

        return Choice::create($data);
    }

    public function update(Request $request, Choice $choice)
    {
        $choice->update($request->only(['text', 'target_chapter_id']));
        return $choice;
    }

    public function destroy(Choice $choice)
    {
        $choice->delete();
        return response()->json(null, 204);
    }
}
