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
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
    </style>
    <!-- Custom styles for this template -->
 


<main role="main">

  
    <div class="container">
     

      <h1 class="mx-auto" style="width: 200px;">Usuários</h1>


    <table class="table table-bordered table-sm">
    <thead class="bg-info">
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>E-mail</th>
    </tr>
</thead>

<tbody>

  <!--Tratar quando for exibir por id-->

    @foreach ($users as $aux)

        <tr>
        <td>{{$aux->id}}</td>
        <td>

        <a href="{{route('users.show', $aux->id)}}">{{$aux->name}}</a>
          
         
        
        </td>
        <td>{{$aux->email}}</td>
        </tr>    
    
    @endforeach

</tbody>
</table>

    </div>





</main>
</html>



@endsection