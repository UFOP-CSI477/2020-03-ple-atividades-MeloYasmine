<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Agendamento;

class AreaAdminController extends Controller
{
    
    public function index()
    {
        $agendamentos = Agendamento::orderBy('nome')->get();
        return view('areaadmin.index', ['agendamentos' => $agendamentos]);
    }
}
