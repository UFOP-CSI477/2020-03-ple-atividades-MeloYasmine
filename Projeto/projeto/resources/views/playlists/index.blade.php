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
    <link href="{{asset('estilo.css')}}" rel="stylesheet">
  </head>


<body>

  <form action="post" name="formulario">
<div class="album py-1">
    <div class="container">

<h1 class="mx-auto">Playlists</h1>


<div class="card-deck" style="margin-bottom: 50pt">

  @foreach ($playlists as $play)
  <div class="card" style="width: 18rem;">
  <a href="{{route('playlists.show', $play->id)}}" class="card-link">
    <img class="card-img-top" src="{{asset('7.png')}}" alt="Imagem de capa do card">
    </a>
    <div class="card-body">
      <h5 class="card-title">{{$play->nome}}</h5>

    </div>

  </div>
  @endforeach
</div>






  

  </div>
</div>

</body>
</form>
</html>
@endsection