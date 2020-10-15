<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Musica;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     $playlists = DB::table('playlists')
                ->where('user_id', Auth::user()->id)
                ->groupBy('nome')
                ->get();

        return view('playlists.index', ['playlists' => $playlists]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $musicas = Musica::orderBy('nome')->get();

       
         
        $playlists = DB::table('playlists')->where('user_id', Auth::user()->id)->distinct()->pluck('nome');

        return view('playlists.create', ['musicas' => $musicas, 'playlists' => $playlists]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        DB::table('playlists')->insertGetId(
            ['nome' => $request->nome,
            'user_id' => Auth::user()->id,
            'musica_id' => $request->musica_id,
            ]
        );

        session()->flash('mensagem', 'Música cadastrada na playlist');
        return redirect()->route('playlists.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show(Playlist $playlist)
    {

        $musicas_id = Playlist::select('musica_id')->where('nome', $playlist->nome)->where('user_id', $playlist->user_id)->get();
        
        $todasMusicas = Musica::get();

        $lista = array();

       foreach($todasMusicas as $musica){
           
           if ($musicas_id->pluck('musica_id')->contains($musica->id)){
               array_push($lista, $musica);
           }

        }
       

        return view('playlists.show', ['playlist'=>$playlist, 'musicas_id' => $musicas_id, 'lista' => $lista]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playlist $playlist)
    {
        $nomeP = $playlist->nome;
        $userP = $playlist->user_id;
        $deletar = DB::table('playlists')
                    ->where('nome', $nomeP )
                    ->where('user_id', $userP)
                    ->delete();

        
        session()->flash('mensagem', 'Playlist deletada :(');
        return redirect()->route('playlists.index');
        
    }
}
