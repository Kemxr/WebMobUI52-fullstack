<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\StoryController;
use App\Http\Controllers\Api\V1\ChapterController;
use App\Http\Controllers\Api\V1\ChoiceController;

Route::get('/', function () {
  return view('test');
});

Route::prefix('api/v1/')->group(function () {
  Route::get('/test', function () {
    return response()->json(['message' => 'Hello, World from api!']);
  });
  Route::delete('/test', function () {
    return response()->json(['message' => 'Deleting']);
  });
});

Route::prefix('api/v1')->group(function () {
  Route::get('/chapters', [ChapterController::class, 'getChapters']);
  Route::get('/chapters/{id}', [ChapterController::class, 'getChapter']);
  Route::post('/chapters', [ChapterController::class, 'createChapter']);
  Route::put('/chapters/{id}', [ChapterController::class, 'updateChapter']);
  Route::delete('/chapters/{id}', [ChapterController::class, 'deleteChapter']);
});

Route::prefix('api/v1')->group(function () {
  Route::get('/choices', [ChoiceController::class, 'getChoices']);
  Route::get('/choices/{id}', [ChoiceController::class, 'getChoice']);
  Route::post('/choices', [ChoiceController::class, 'createChoice']);
  Route::put('/choices/{id}', [ChoiceController::class, 'updateChoice']);
  Route::delete('/choices/{id}', [ChoiceController::class, 'deleteChoice']);
});

Route::prefix('api/v1')->group(function () {
  Route::get('/stories', [StoryController::class, 'getStories']);
  Route::get('/stories/{id}', [StoryController::class, 'getStory']);
  Route::post('/stories', [StoryController::class, 'createStory']);
  Route::put('/stories/{id}', [StoryController::class, 'updateStory']);
  Route::delete('/stories/{id}', [StoryController::class, 'deleteStory']);
});