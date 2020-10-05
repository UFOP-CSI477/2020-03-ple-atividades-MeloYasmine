<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ManutencaoController;

use Illuminate\Support\Facades\Auth;

use App\Models\Equipamento;
use App\Models\Registro;
use App\Models\User;



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
    return view('principal');
})->name('principal');


Route::resource('/equipamentos', EquipamentoController::class);

Route::resource('/users', UserController::class)->middleware('auth');

Route::resource('/registros', RegistroController::class);


Route::resource('/manutencoes', ManutencaoController::class);

Route::get('/geral', function () {

    $equipamentos = Equipamento::orderBy('nome')->get();
    $registros = Registro::orderBy('datalimite')->get();

    return view('geral', ['equipamentos' => $equipamentos, 'registros' => $registros]);
})->name('geral');


Route::get('/administrativo', function () {
    return view('administrativo');
})->middleware('auth')->name('administrativo');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
