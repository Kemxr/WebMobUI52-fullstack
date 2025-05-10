<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Progression;
use App\Models\Story;
use App\Models\Chapter;
use App\Models\User;


class ProgressionController extends Controller
{
    public function getProgress(Request $request, $storyId) {
        $progress = Progression::where('user_id', $request->user()->id)
            ->where('story_id', $storyId)
            ->first();

        return response()->json($progress);
    }

    public function updateProgress(Request $request, $storyId) {
        $request->validate(['chapter_id' => 'required|exists:chapters,id']);

        $progress = Progression::updateOrCreate(
            ['user_id' => $request->user()->id, 'story_id' => $storyId],
            ['chapter_id' => $request->chapter_id]
        );

        return response()->json($progress);
    }
}
