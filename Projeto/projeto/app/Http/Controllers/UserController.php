<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Genero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        $generos = Genero::orderBy('nome')->get();
        return view('users.create',['generos' => $generos]);
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
        $nameFile = $user->foto;
        
        //se informou imagem
        if($request->hasFile('foto') && $request->file('foto')->isValid()){
           
           
            //dando nome ao arquivo
            $name = ($request->apelido);
            $extension = $request->foto->extension();
            $nameFile = "{$name}.{$extension}";
      

            $upload = $request->foto->storeAs('users', $nameFile);
            
            if(!$upload)
                return redirect()
                            ->back()
                            ->with('error', 'Falha ao realizar upload');    

 

        }

        
        
        $user->fill($request->all());
        $user->save();


        DB::table('users')
            ->updateOrInsert(
                ['apelido' => $request->apelido],
                ['foto' => $nameFile]
            
        );


        session()->flash('mensagem', 'Usuário atualizado com sucesso!');
        return redirect()->route('users.show', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->delete()) {
            //Deleta o arquivo da foto de perfil
            Storage::delete("users/{$user->foto}"); // true ou false
     
          
            return redirect()
                        ->route('welcome')
                        ->with('mensagem', 'Perfil excluído :(');
        }
    
            return redirect()
                    ->back()
                    ->with('mensagem', 'Falha ao deletar!');
    
    
    
        }
    }


 

