<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ColetaController;
use App\Http\Controllers\AreaGeralController;
use App\Http\Controllers\AreaAdminController;
use Illuminate\Support\Facades\Auth;



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

Route::resource('/pessoas', PessoaController::class)->middleware('auth');

Route::resource('/agendamentos', AgendamentoController::class)->middleware('auth');

Route::resource('/coletas', ColetaController::class)->middleware('auth');;

Route::resource('/areageral', AreaGeralController::class);

Route::resource('/areaadmin', AreaAdminController::class)->middleware('auth');;

Route::get('/', function () {
    return view('principal');
})->name('principal');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
