<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        if(!empty($request->all())){

            //Diferenciar usuario padrão de um administrador
            $tipo_user = $request->tipo;

            User::create($request->all());

            

            if($tipo_user == "U"){
                
                session()->flash('mensagem', 'Usuário cadastrado com sucesso!');
                //return redirect()->route('foto');
                return redirect()->route('welcome');
            }else{
                
                session()->flash('mensagem', 'Administrador cadastrado com sucesso!');
                return redirect()->route('welcome');
            }
           
          
           
            }

           
            
      
        else{
            session()->flash('mensagem', 'Preencha todos os dados!');
            return redirect()->route('users.create');
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show',['user' =>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //Update normal
        
        $data = $request->all();

        //caso usuario tenha foto
        $data['foto'] = $user->foto;
        
        //se informou imagem
        if($request->hasFile('foto') && $request->file('foto')->isValid()){
           
            //if($user->foto){
              //  $name = $user->foto;
            //}else{
            //dando nome ao arquivo
            $name = Str::kebab($request->apelido);
            $extension = $request->foto->extension();
            $nameFile = "{$name}.{$extension}";
            //dd($nameFile);

            $upload = $request->foto->storeAs('users', $nameFile);
            
            if(!$upload)
                return redirect()
                            ->back()
                            ->with('error', 'Falha ao realizar upload');    

       // }

        }

        
        
        $user->fill($request->all());
        $user->save();

        session()->flash('mensagem', 'Usuário atualizado com sucesso!');
        return redirect()->route('welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('mensagem', 'Usuário excluído :(');
        return redirect()->route('welcome');
    }


    public function foto()
    {
        dd('usuario escolhe uma foto');
    }
}
