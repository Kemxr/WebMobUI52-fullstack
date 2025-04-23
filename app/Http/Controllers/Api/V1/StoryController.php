<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        return Story::all();
    }

    public function show(Story $story)
    {
        return $story->load('chapters');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        return Story::create($data);
    }

    public function update(Request $request, Story $story)
    {
        $story->update($request->only(['title', 'description']));
        return $story;
    }

    public function destroy(Story $story)
    {
        $story->delete();
        return response()->json(null, 204);
    }
}
