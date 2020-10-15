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
    <title>Cadastro de gêneros musicais</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   

    <link href="{{asset('estilo.css')}}" rel="stylesheet">

    
  </head>
  <body>   
<form  action="{{route('generos.store')}}" method="post" files="true" >
    @csrf

  <h1>Gênero</h1>

  
  <a href="{{route('musicas.create')}}" type="button" class="btn btn-info btn-block">
  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-music" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
    <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
    <path fill-rule="evenodd" d="M9.757 5.67A1 1 0 0 1 11 6.64v1.75l-2 .5v3.61c0 .495-.301.883-.662 1.123C7.974 13.866 7.499 14 7 14c-.5 0-.974-.134-1.338-.377-.36-.24-.662-.628-.662-1.123s.301-.883.662-1.123C6.026 11.134 6.501 11 7 11c.356 0 .7.068 1 .196V6.89a1 1 0 0 1 .757-.97l1-.25z"/>
  </svg>
  CADASTRAR NOVA MUSICA
  </a>

 
</form>
    <form  class="formulario" action="{{route('generos.store')}}" method="post"  files="true" enctype="multipart/form-data">
        @csrf
       
    <div class="divcadastros container">
      <h1 class="card-title">Cadastro de Gênero Musical</h1>

        <div class="row">
          
          <div class="col-md-6">
            <div class="form-group">
              <label for="nome">Nome: </label>
              <input type="text" class="form-control" id="nome" placeholder="Nome gênero musical" name="nome" required="required">
            </div>
          </div>

        </div>

        <button type="submit" class="btn btn-success  mx-sm-3 mb-2">Cadastrar</button>
        <button type="reset" class="btn btn-warning   mx-sm-3 mb-2">Limpar</button>
    </div>

    </form>
  </body>

</html>

@endsection