<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [SongController::class, 'index'])->name('index');
Route::get('/share', [SongController::class, 'share'])->name('share');
Route::post('/index', [SongController::class, 'store'])->name('store');
Route::get('/song/{id}', [SongController::class, 'song'])->name('song');

