@extends('welcome')

@section('conteudo')



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Musicas</title>
    <script src="{{asset('java.js')}}"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">
    <script src="java.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </head>


<body>

  <form action="post" name="formulario">
<div class="album py-1">
    <div class="container">

    <h1 class="mx-auto" style="text-align:center; margin-bottom:20pt;">Músicas</h1>

<!--Busca-->    
<form  action="#" method="post" files="true"  style="border-style:dashed; margin-bottom: 10pt;border-radius: 10px;">
      @csrf
  <div class="container" style="place-items:center; ">
    

      <div class="row">

        
        <div class="col-md-4">
          <div class="form-group">
            
            <select required="required" class="form-control" id="busca" name="busca" onChange="carregarOpcoes()">
                <option value="selecione">SELECIONE</option>
                <option  value="genero">Gênero</option>
                <option  value="artista">Artista</option>
              
            </select>         
          </div>
        </div>

        <div id="generos" class="col-md-4" style="display: none">
          <div class="form-group">
            
            <select required="required" class="form-control" id="generos" name="generos">
              <option value="">SELECIONE</option>  
              @foreach ($generos as $genero)
                <option value={{$genero->id}}>{{$genero->nome}}</option>
                  
              @endforeach           
            </select>
          </div>
        </div>


        <div id="botao" class="col-md-4" style="display: none">
          <div class="form-group">
        <a type="button"  class="btn btn-sm btn-success mx-sm-1 mb-1" href="{{route('musicas.index')}}">Buscar</a>
          </div>
        </div>

      </div>
  </div>
</form>


  <table class="table table-bordered table-sm" style="margin-bottom: 80pt;">
  <thead class="bg-info">
  <tr align="center" class="bg-primary">
  <th>Play</th>
  <th>Nome</th>
  <th>Artista</th>
  <th>Album</th>
  <th>Gênero</th>
  <th>Ano</th>

    @if(Auth::user()->tipo == 'A')
      <td>OPÇÕES</td>
    @endif
  

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
        <td>{{$musica->genero->nome}}</td>
        <td>{{$musica->ano}}</td>

        @if(Auth::user()->tipo == 'A')
          <td>

            <form name="frmDelete"
            action="{{route('musicas.destroy', $musica->id)}}"
            method="post"
            onsubmit="return confirm('Confirma a exclusão do musica?')">
            @csrf
            @method('DELETE')
            <a type="button" class="btn btn-sm btn-success mx-sm-1 mb-1" href="{{route('musicas.edit', $musica->id)}}">Atualizar</a>
            <input type="submit" class="btn btn-sm btn-danger mx-sm-1 mb-1" value="Excluir">
            <a type="button" class="btn btn-sm btn-info mx-sm-1 mb-1" href="{{route('musicas.index')}}">Voltar</a>
            
            </form>

          </td>
        @endif

      </tr>    

@endforeach


</tbody>
</table>

  </div>
</div>

</body>
</form>
</html>
@endsection