<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->tipo == 'A'){



        }else{
            session()->flash('mensagem', 'Infelizmente você não tem permissão :(');
            return redirect()->route('welcome');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->tipo == 'A'){

            return view('generos.create');

        }else{
            session()->flash('mensagem', 'Infelizmente você não tem permissão :(');
            return redirect()->route('welcome');
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
        if(Auth::user()->tipo == 'A'){

            Genero::create($request->all());
            session()->flash('mensagem', 'Gênero musical cadastrado!');
            return redirect()->route('generos.create');


        }else{
            session()->flash('mensagem', 'Infelizmente você não tem permissão :(');
            return redirect()->route('welcome');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function show(Genero $genero)
    {
        if(Auth::user()->tipo == 'A'){



        }else{
            session()->flash('mensagem', 'Infelizmente você não tem permissão :(');
            return redirect()->route('welcome');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function edit(Genero $genero)
    {
        if(Auth::user()->tipo == 'A'){



        }else{
            session()->flash('mensagem', 'Infelizmente você não tem permissão :(');
            return redirect()->route('welcome');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genero $genero)
    {
        if(Auth::user()->tipo == 'A'){



        }else{
            session()->flash('mensagem', 'Infelizmente você não tem permissão :(');
            return redirect()->route('welcome');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genero $genero)
    {
        if(Auth::user()->tipo == 'A'){

            if($genero->musicas->count() > 0){
                session()->flash('mensagem', 'Esse gênero tem músicas cadastradas!');
            }else{
                $genero->delete();
                session()->flash('mensagem', 'Gênero musical excluído!');
            }

        }else{
            session()->flash('mensagem', 'Infelizmente você não tem permissão :(');
            return redirect()->route('welcome');
        }
    }
}
