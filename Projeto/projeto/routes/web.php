<?php

use Illuminate\Support\Facades\Route;

use App\Models\Equipamento;

use App\Http\Controllers\MusicaController;
use App\Http\Controllers\UserController;
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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/m', function () {
    return view('m');
});


Route::resource('/musicas', MusicaController::class);

Route::resource('/users', UserController::class);