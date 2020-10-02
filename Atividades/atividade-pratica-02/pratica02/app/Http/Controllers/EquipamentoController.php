<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\Equipamento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipamentos = Equipamento::orderBy('nome')->get();
        return view('equipamentos.index', ['equipamentos' => $equipamentos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Usuário pode tentar acessar diretamente pelo link
        if(Auth::check()){    
            return view('equipamentos.create');
        }else{
            session()->flash('mensagem', 'Operação não permitida');
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validar 
        if(!empty($request->all())){
            if(Auth::check()){ 
                Equipamento::create($request->all());
                session()->flash('mensagem', 'Equipamento cadastrado com sucesso!');
                return redirect()->route('administrativo');
            }else{
                session()->flash('mensagem', 'Operação não permitida');
                return redirect()->route('login');
            }
        }else{
            session()->flash('mensagem', 'Preencha todos os dados!');
            return redirect()->route('equipamentos.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamento $equipamento)
    {
        if(Auth::check()){ 
            return view('equipamentos.show',['equipamento' =>$equipamento]);
        }else{
            session()->flash('mensagem', 'Operação não permitida');
            return redirect()->route('login');
        }
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipamento $equipamento)
    {   
        if(Auth::check()){ 
             return view('equipamentos.edit', ['equipamento' => $equipamento]);
        }else{
            session()->flash('mensagem', 'Operação não permitida');
            return redirect()->route('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipamento $equipamento)
    {
        if(Auth::check()){ 
            $equipamento->fill($request->all());
            $equipamento->save();

            session()->flash('mensagem', 'Equipamento atualizado com sucesso!');
            return redirect()->route('equipamentos.index');
        }else{
            session()->flash('mensagem', 'Operação não permitida');
            return redirect()->route('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipamento $equipamento)
    {
        //Só posso excluir se não tiver manutenções agendadas
        if(Auth::check()){ 
            if($equipamento->registros->count() > 0){
                session()->flash('mensagem', 'Esse equipamento possui manutenções agendadas!');
            }else{
                $equipamento->delete();
                session()->flash('mensagem', 'Equipamento excluído com sucesso');
            }
            return redirect()->route('equipamentos.index');
        }else{
            session()->flash('mensagem', 'Operação não permitida');
            return redirect()->route('login');
        }
    }

 
}
