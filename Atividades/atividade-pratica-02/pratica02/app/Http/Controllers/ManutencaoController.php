<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\Registro;

use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistroController;

use App\Models\User;



use Illuminate\Http\Request;

class ManutencaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $equipamentos = Equipamento::orderBy('nome')->get();
        $registros = Registro::orderBy('datalimite', 'asc')->get();
        $lista = array();
        $equi = Equipamento::get();
        
        foreach($equi as $e){
    
            $query = Registro::where('equipamento_id','=', $e->id)->get();
    
            if(sizeof($query)>0){
                $lista[$e->nome] = $query;
            } 
        }
    
        return view('manutencoes.index', ['equipamentos' => $equipamentos, 'registros' => $registros, 'listas' =>$lista]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        //
    }
}
