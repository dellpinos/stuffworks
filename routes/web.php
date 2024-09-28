<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScriptsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/languages/{locale}', [HomeController::class, 'language_change'])->name('home.language');

Route::get('/little_apps', [HomeController::class, 'little_apps'])->name('home.little_apps');
Route::get('/focus', [Homecontroller::class, 'focus'])->name('home.focus');
Route::get('/focus_lotr', [Homecontroller::class, 'focus_lotr'])->name('home.focus_lotr');
Route::get('/apps', [HomeController::class, 'apps'])->name('home.apps');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::get('/scripts', [ScriptsController::class, 'index'])->name('scripts.index');

Route::get('/scripts/cuadricula', [ScriptsController::class, 'cuadricula'])->name('scripts.cuadricula');
Route::get('/scripts/hashtag', [ScriptsController::class, 'hashtag'])->name('scripts.hashtag');
Route::get('/scripts/hexa', [ScriptsController::class, 'hexa'])->name('scripts.hexa');
Route::get('/scripts/likes', [ScriptsController::class, 'likes'])->name('scripts.likes');
Route::get('/scripts/to_camel', [ScriptsController::class, 'to_camel'])->name('scripts.to_camel');
Route::get('/scripts/word_flip', [ScriptsController::class, 'word_flip'])->name('scripts.word_flip');


