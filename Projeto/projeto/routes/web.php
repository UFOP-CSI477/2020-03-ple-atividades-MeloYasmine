<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Models\Equipamento;

use App\Http\Controllers\MusicaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlaylistController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/m', function () {
    return view('m');
});

Route::get('/foto',
 [UserController::class, 'foto'])->name('foto');

Route::resource('/musicas', MusicaController::class)->middleware('auth');

Route::resource('/playlists', PlaylistController::class)->middleware('auth');

Route::resource('/users', UserController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
