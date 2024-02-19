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

Route::get('/index.html', [SongController::class, 'index'])->name('song.index');
Route::get('/share.html', [SongController::class, 'share'])->name('song.share');
Route::post('/index.html', [SongController::class, 'store'])->name('song.store');
Route::get('/song.html/{song}', [SongController::class, 'song'])->name('song.song');

