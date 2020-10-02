@extends('principal')

@section('conteudo')


 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Página Principal</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->


    <style>
     body{
        background-color:#f9f9f9;
      }
    </style>
    <!-- Custom styles for this template -->

  </head>
  <body>
   

    <div class="album py-1 bg-light">
      <div class="container">

      <h1 class="mx-auto" style="width: 200px; margin-bottom:20pt;">Equipamentos</h1>


    <table class="table table-bordered table-sm">
    <thead class="bg-info">
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Criado em</th>
 
    </tr>
</thead>

<tbody>

  <!--Tratar quando for exibir por id-->

    @foreach ($equipamentos as $aux)

        <tr>
        <td>{{$aux->id}}</td>
        <td>

          <a href="{{route('equipamentos.show', $aux->id)}}">{{$aux->nome}}</a>
          
         

        </td>
        <td>{{$aux->created_at}}</td>
  
        </tr>    
    
    @endforeach

</tbody>
</table>

    </div>
  </div>


    
    </body>
    
</html>



@endsection