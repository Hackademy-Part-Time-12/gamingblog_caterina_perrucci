<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/profile', [PublicController::class, 'profile'])->name('profile');


Route::get('/game/create', [GameController::class, 'create'])->name('game.create');

/* Route::get('/game/create', [GameController::class, 'create'])->middleware('auth')->name('game.create'); */

Route::post('/game/store', [GameController::class, 'store'])->name('game.store');
Route::get('/game/index', [GameController::class, 'index'])->name('game.index');