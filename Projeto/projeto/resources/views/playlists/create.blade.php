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
    <title>playlist</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->


  </head>
  <body >
    <form  action="{{route('playlists.store')}}" method="post" files="true"  style="border-style:dashed; margin:10px; border-radius: 10px; margin-bottom:150pt;">
        @csrf
  

    <div class="container" style="place-items:center; margin-top:30pt; margin-bottom:30pt">
      <h1 class="card-title" style="text-align:center; margin-bottom:20pt;">Cadastro de músicas</h1>

        <div class="row">
          
          <div class="col-md-6">
            <div class="form-group">
              <label for="nome">Nome da playlist: </label>
              <input type="text" class="form-control" id="nome" placeholder="Musica" name="nome" required="required">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="musica_id">Musica: </label>
              <select required="required" class="form-control" id="musica_id" name="musica_id">
                @foreach ($musicas as $musica)
                  <option  required="required" value="{{$musica->id}}">{{$musica->nome}}</option>
                @endforeach
              </select>
            </div>
          </div>
        
        </div>


        

  

        </div>

        <button type="submit" class="btn btn-success  mx-sm-3 mb-2">ADICIONAR</button>
        
    </div>

    </form>
  </body>

</html>

@endsection