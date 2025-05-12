<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\StoryController;
use App\Http\Controllers\Api\V1\ChapterController;
use App\Http\Controllers\Api\V1\ChoiceController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Api\V1\ProgressionController;

Route::get('/home', [StoryController::class, 'index'])->middleware('auth')->name('home');

Route::get('/story/{id}', function () {
  return view('main');
})->middleware('auth')->name('stories.show');

Route::get('/', function () {
  if (Auth::check()) {
      return view('main');
  }
  return redirect()->route('showLoginForm');
});

Route::middleware('auth')->group(function () {
  Route::get('/chapitre/{id}', function ($id) {
      return view('main');
  })->name('chapter');
});

//Chapitres
Route::prefix('api/v1')->group(function () {
  Route::get('/chapters', [ChapterController::class, 'getChapters']);
  Route::get('/chapters/{id}', [ChapterController::class, 'getChapter']);
  Route::post('/chapters', [ChapterController::class, 'createChapter'])->middleware('admin');
  Route::put('/chapters/{id}', [ChapterController::class, 'updateChapter'])->middleware('admin');
  Route::delete('/chapters/{id}', [ChapterController::class, 'deleteChapter'])->middleware('admin');
});

//Choix
Route::prefix('api/v1')->group(function () {
  Route::get('/choices', [ChoiceController::class, 'getChoices']);
  Route::get('/choices/{id}', [ChoiceController::class, 'getChoice']);
  Route::post('/choices', [ChoiceController::class, 'createChoice'])->middleware('admin');
  Route::put('/choices/{id}', [ChoiceController::class, 'updateChoice'])->middleware('admin');
  Route::delete('/choices/{id}', [ChoiceController::class, 'deleteChoice'])->middleware('admin');
});

//Histoires
Route::prefix('api/v1')->group(function () {
  Route::get('/stories', [StoryController::class, 'getStories']);
  Route::get('/stories/{id}', [StoryController::class, 'getStory']);
  Route::post('/stories', [StoryController::class, 'createStory'])->middleware('admin')->name('createStory');
  Route::put('/stories/{id}', [StoryController::class, 'updateStory'])->middleware('admin')->name('updateStory');
  Route::delete('/stories/{id}', [StoryController::class, 'deleteStory'])->middleware('admin')->name('deleteStory');
});

//Authentification
Route::get('/register', [AuthenticationController::class, 'showRegisterForm'])->name('showRegister')->middleware('guest');
Route::post('/register', [AuthenticationController::class, 'register'])->name('register');

Route::get('/login', [AuthenticationController::class, 'showLoginForm'])->name('showLoginForm')->middleware('guest');
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');

Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');

//Gère le refresh de la page
Route::get('/{any}', function () {
  return view('main');
})->where('any', '.*');
