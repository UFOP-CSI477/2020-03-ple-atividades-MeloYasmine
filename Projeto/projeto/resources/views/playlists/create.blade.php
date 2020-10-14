@extends('welcome')

@section('conteudo')


 
<!doctype html>
<html lang="en">
  <head>
 
    
    <script src="{{asset('java.js')}}"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="{{asset('estilo.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
   
    <link href="blog.css" rel="stylesheet">
    <title>Playlists</title>
  </head>


  <body>
    <form name="formularioPlaylist" action="{{route('playlists.store')}}" method="post" files="true" >
        @csrf
  
      <h1>Playlists</h1>

      <a id="botaoPlay" type="button" class="btn btn-info mx-sm-3 mb-2" onclick="criarPlaylist()">
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-music" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
        <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
        <path fill-rule="evenodd" d="M9.757 5.67A1 1 0 0 1 11 6.64v1.75l-2 .5v3.61c0 .495-.301.883-.662 1.123C7.974 13.866 7.499 14 7 14c-.5 0-.974-.134-1.338-.377-.36-.24-.662-.628-.662-1.123s.301-.883.662-1.123C6.026 11.134 6.501 11 7 11c.356 0 .7.068 1 .196V6.89a1 1 0 0 1 .757-.97l1-.25z"/>
      </svg>
      CRIAR NOVA PLAYLIST
      </a>

      <a id="botaoAdd" type="button" class="btn btn-info mx-sm-3 mb-2" onclick="adicionarNaPlaylist()">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-music" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
          <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
          <path fill-rule="evenodd" d="M9.757 5.67A1 1 0 0 1 11 6.64v1.75l-2 .5v3.61c0 .495-.301.883-.662 1.123C7.974 13.866 7.499 14 7 14c-.5 0-.974-.134-1.338-.377-.36-.24-.662-.628-.662-1.123s.301-.883.662-1.123C6.026 11.134 6.501 11 7 11c.356 0 .7.068 1 .196V6.89a1 1 0 0 1 .757-.97l1-.25z"/>
        </svg>
        ADICIONAR MUSICAS NA PLAYLIST
        </a>
  

  <div id="cadastrarPlaylist" style="display: none">

    <form  action="{{route('playlists.store')}}" method="post"  files="true" enctype="multipart/form-data">
      @csrf
            
            <div class="col-md-4" >
              <div class="form-group">
                <label for="nome">Nome da playlist: </label>
                <input type="text" class="form-control" id="nome" placeholder="Nome playlist" name="nome" required="required">
              </div>
            </div>
  
            <div class="col-md-4" >
              <div class="form-group">
                <label for="musica_id">Primeira música: </label>
                <select required="required" class="form-control" id="musica_id" name="musica_id">
                  @foreach ($musicas as $musica)
                    <option value="{{$musica->id}}">{{$musica->nome}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          
          
          <button type="submit" class="btn btn-success  mx-sm-3 mb-2">Cadastrar</button>
          <button class="btn btn-info mx-sm-3 mb-2" onclick="voltar()">Voltar</button>
    </form>
  </div>


  <div id="adicionarNaPlaylist" style="display: none">

    <form  action="{{route('playlists.store')}}" method="post"  files="true" enctype="multipart/form-data">
      @csrf

          
          <div class="col-md-4" >
            <div class="form-group">
              <label for="nome">Playlist: </label>
              <select required="required" class="form-control" id="nome" name="nome">
                @foreach ($playlists as $playlist)
                   <option value="{{$playlist}}">{{$playlist}}</option>
                @endforeach
                
              </select>
            </div>
          </div>

          <div class="col-md-4" >
            <div class="form-group">
              <label for="musica_id">Música: </label>
              <select required="required" class="form-control" id="musica_id" name="musica_id">
                @foreach ($musicas as $musica)
                  <option value="{{$musica->id}}">{{$musica->nome}}</option>
                @endforeach
              </select>
            </div>
          </div>
        
        
        <button type="submit" class="btn btn-success  mx-sm-3 mb-2">Cadastrar</button>
        <button class="btn btn-info mx-sm-3 mb-2" onclick="voltar()">Voltar</button>
  </form>
</div>



        <table class="table table-bordered table-sm" style="margin-bottom: 80pt;">
          <thead>
          <tr align="center" class="bg-info">
          <th>Play</th>
          <th>Nome</th>
          <th>Artista</th>
          <th>Album</th>
         
    
        
          </tr>
        </thead>
        
        <tbody>
        
        
        
        @foreach($musicas as $musica)
        
        
        
              <tr align="center"> 
                 <td>
                    <audio id={{'audio'.$musica->id}}>
                        <source src="{{asset('storage/music/'.$musica->caminho)}}" type="audio/mpeg">
                          
                          Seu navegador não suporta esse formato de áudio.
                      </audio>
                      
        
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-play-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  onclick="Play({{$musica->id}})">
                          <path d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                        </svg>
        
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pause-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  onclick="Pause({{$musica->id}})">
                          <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z"/>
                        </svg>
        
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-stop-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" onclick="Stop({{$musica->id}})">
                          <path d="M5 3.5h6A1.5 1.5 0 0 1 12.5 5v6a1.5 1.5 0 0 1-1.5 1.5H5A1.5 1.5 0 0 1 3.5 11V5A1.5 1.5 0 0 1 5 3.5z"/>
                        </svg>
        
                      
                 </td>
               
                 
                <td>{{$musica->nome}}</td>
                <td>{{$musica->artista}}</td>
                <td>{{$musica->album}}</td>

                
       
        
              
        
              </tr>    
        
        @endforeach
        
        
        </tbody>
        </table>
        </div>

 
        
    </div>





    </form>
  </body>

</html>

@endsection