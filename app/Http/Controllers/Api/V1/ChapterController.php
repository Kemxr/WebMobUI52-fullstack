<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function index()
    {
        return Chapter::with('choices')->get();
    }

    public function show(Chapter $chapter)
    {
        return $chapter->load('choices');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'story_id' => 'required|exists:stories,id',
            'number' => 'required|integer|min:1',
            'content' => 'required|string',
        ]);

        return Chapter::create($data);
    }

    public function update(Request $request, Chapter $chapter)
    {
        $chapter->update($request->only(['number', 'content']));
        return $chapter;
    }

    public function destroy(Chapter $chapter)
    {
        $chapter->delete();
        return response()->json(null, 204);
    }
}
