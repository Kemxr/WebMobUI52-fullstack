<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\StoryController;
use App\Http\Controllers\Api\V1\ChapterController;
use App\Http\Controllers\Api\V1\ChoiceController;
use App\Http\Controllers\AuthenticationController;


// Route::get('/', function () {
//   return view('test');
// });

Route::get('/', function () {
  if (Auth::check()) {
      return redirect()->route('chapter', ['id' => 1]);
  }
  return redirect()->route('showLoginForm');
});

Route::middleware('auth')->group(function () {
  Route::get('/chapitre/{id}', function ($id) {
      return view('test');
  })->name('chapter');
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

//Authentification
Route::get('/register', [AuthenticationController::class, 'showRegisterForm'])->name('showRegister')->middleware('guest');
Route::post('/register', [AuthenticationController::class, 'register'])->name('register');

//Mettre middleware auth dans les autres routes
Route::get('/login', [AuthenticationController::class, 'showLoginForm'])->name('showLoginForm')->middleware('guest');
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');

Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');

// Routes protégées par le middleware `auth`
// Route::middleware('auth')->group(function () {
//   Route::get('/chapitre/1', function () {
//       return view('test');
//   })->name('chapter1');
// });

//Gère le refresh de la page
Route::get('/{any}', function () {
  return view('test');
})->where('any', '.*');

// Gère le refresh de la page
// Route::get('/{any}', function () {
//   return view('test');
// })->where('any', '.*')->middleware('auth');