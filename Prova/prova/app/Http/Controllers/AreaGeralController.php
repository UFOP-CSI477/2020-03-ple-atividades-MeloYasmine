<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Pessoa;

use Illuminate\Http\Request;

class AreaGeralController extends Controller
{
    //
    
    public function index()
    {
       
        $agendamentos = Agendamento::join('pessoas', 'agendamentos.pessoa_id', '=', 'pessoas.id')

        ->orderBy('data', 'desc')
        ->orderBy('pessoas.nome', 'asc')
        ->get('agendamentos.*');

       
        return view('areageral.index', ['agendamentos' => $agendamentos]);
    }
}
