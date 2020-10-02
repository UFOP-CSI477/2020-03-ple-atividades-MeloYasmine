<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\Equipamento;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;
use Illuminate\Routing;


use function PHPUnit\Framework\isNull;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

   
        $registros = Registro::orderBy('datalimite')->get();    
        //$equipamentos = Equipamento::get();
        //echo json_encode($lista);
         return view('registros.index', ['registro' => $registros]); 
       

  
   
       
 
            //colocar um retorno caso haja login outro caso nao 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $equipamentos = Equipamento::orderBy('nome')->get();
        $users = User::orderBy('name')->get();
        return view('registros.create', ['equipamentos' => $equipamentos, 'users' => $users]);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        Registro::create($request->all());
        session()->flash('mensagem', 'Registro cadastrado com sucesso!');
        return redirect()->route('registros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {




        return view('registros.show',['registro' =>$registro]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        $equipamentos = Equipamento::get();
        $users = User::get();

        return view('registros.edit', ['equipamentos' => $equipamentos, 'users' => $users, 'registro' => $registro]);
      
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
        $registro->fill($request->all());
        $registro->save();

        session()->flash('mensagem', 'Manutenção atualizada com sucesso!');
        return redirect()->route('registros.index');
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
        //Só posso excluir se não tiver manutenções agendadas
    
            $registro->delete();
            session()->flash('mensagem', 'Registro excluído com sucesso');
        
        return redirect()->route('registros.index');
    }

    /**
     * 
     */

}
