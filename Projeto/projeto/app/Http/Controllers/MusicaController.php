<?php

namespace App\Http\Controllers;

use App\Models\Musica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class MusicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musicas = Musica::orderBy('nome')->get();
        return view('musicas.index',['musicas' => $musicas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('musicas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Musica::create($request->all());

        $nomeCaminho = Str::kebab($request->nome.$request->artista.'.mp3');

        DB::table('musicas')
            ->updateOrInsert(
                ['nome' => $request->nome],
                ['caminho' => $nomeCaminho]
            
        );

        session()->flash('mensagem', 'Musica cadastrada com sucesso!');
        return redirect()->route('musicas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function show(Musica $musica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function edit(Musica $musica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Musica $musica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Musica $musica)
    {
        $musica->delete();
        session()->flash('mensagem', 'Musica excluída :(');
        return redirect()->route('musicas.index');
    }
}
