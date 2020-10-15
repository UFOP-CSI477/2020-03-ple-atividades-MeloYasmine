<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use App\Models\Musica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
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

        $generos = Genero::orderBy('nome')->get();

        $artistas = DB::table('musicas')->distinct()->pluck('artista');     

    
        $lista = array();

        foreach($musicas as $musica){
            $generoAtual = $musica->genero->nome;

            if ($generoAtual == Auth::user()->genero_fav){
                array_push($lista, $musica);
            }
 
         }
       

        return view('musicas.index',['musicas' => $musicas, 'generos' => $generos, 'artistas' =>$artistas,
                                    'lista' => $lista]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->tipo == 'A'){
            $generos = Genero::orderBy('nome')->get();
            return view('musicas.create',['generos' => $generos]);
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
        
            $idAtual = DB::table('musicas')->insertGetId(
                ['nome' => $request->nome,
                'artista' => $request->artista,
                'album' => $request->album,
                'genero_id' => $request->genero_id,
                'ano' => $request->ano]
            );

        
            //se informou arquivo
            if($request->hasFile('caminho') && $request->file('caminho')->isValid()){
            
            
                //dando nome ao arquivo
                $name = Str::kebab($request->nome);
                $name2 = Str::kebab($request->artista);            
                $extension = $request->caminho->extension();
                $nameFile = "{$name}-{$name2}.{$extension}";
            

                $upload = $request->caminho->storeAs('music', $nameFile);
                
                if(!$upload)
                    return redirect()
                                ->back()
                                ->with('error', 'Falha ao realizar upload');    

         }

       

            DB::table('musicas')
                ->updateOrInsert(
                    ['id' => $idAtual],
                    ['caminho' => $nameFile]
                
            );

            session()->flash('mensagem', 'Musica cadastrada com sucesso!');
            return redirect()->route('musicas.index');
        }else{
            session()->flash('mensagem', 'Infelizmente você não tem permissão :(');
            return redirect()->route('welcome');
        }
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
        if(Auth::user()->tipo == 'A'){
            if ($musica->delete()) {
                //Deleta o arquivo da musica)
                Storage::delete("music/{$musica->caminho}"); // true ou false
        
            
                return redirect()
                            ->route('musicas.index')
                            ->with('mensagem', 'Sucesso ao deletar!');
            }

                return redirect()
                        ->back()
                        ->with('mensagem', 'Falha ao deletar!');



            }else{
                session()->flash('mensagem', 'Infelizmente você não tem permissão :(');
                return redirect()->route('welcome');
            }
    }
}
