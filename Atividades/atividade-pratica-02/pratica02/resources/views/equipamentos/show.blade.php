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
    <title>Equipamento</title>

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

      <h1 class="mx-auto" style="text-align:center; margin-bottom:20pt;">Equipamento: {{$equipamento->nome}}</h1>


    <table class="table table-bordered table-sm">
    <thead class="bg-info">
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Created_at</th>
    <th>Updated_at</th>
 
    </tr>
</thead>

<tbody>

  <!--Tratar quando for exibir por id-->

    

        <tr>
        <td>{{$equipamento->id}}</td>
        <td>{{$equipamento->nome}}</td>
        <td>{{$equipamento->created_at}}</td>
        <td>{{$equipamento->updated_at}}</td>
  
        </tr>    
    
    

</tbody>
</table>

<form name="frmDelete"
action="{{route('equipamentos.destroy', $equipamento->id)}}"
method="post"
onsubmit="return confirm('Confirma a exclusão do estado?')">



@csrf
@method('DELETE')
<a type="button" class="btn btn-sm btn-outline-success mx-sm-1 mb-1" href="{{route('equipamentos.edit', $equipamento->id)}}">Atualizar</a>
<input type="submit" class="btn btn-sm btn-outline-danger mx-sm-1 mb-1" value="Excluir">
<a type="button" class="btn btn-sm btn-outline-info mx-sm-1 mb-1" href="{{route('equipamentos.index')}}">Voltar</a>

</form>
</div>

    </div>
  </div>

  

    </body>
</html>



@endsection