<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::resource('/estados', EstadoController::class);

Route::resource('/produtos', ProdutoController::class);



