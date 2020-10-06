<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadeController;

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

//retorno para modelo
use App\Models\Produto;
use App\Models\Estado;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ProdutoController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::resource('/estados', EstadoController::class)->middleware('auth');

Route::resource('/produtos', ProdutoController::class)->middleware('auth');

Route::resource('/cidades', CidadeController::class)->middleware('auth');

Route::resource('/pessoas', CidadeController::class);

Route::resource('/compras', CidadeController::class)->middleware('auth');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
