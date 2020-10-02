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
    <title>Registro</title>

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

      <h1 class="mx-auto" style="text-align:center; margin-bottom:20pt;">Registro: {{$registro->id}}</h1>


    <table class="table table-bordered table-sm">
    <thead class="bg-info">
    <tr>
    <th>ID</th>
    <th>Equipamento</th>
    <th>Usuário</th>
    <th>Descricao</th>
    <th>Data Limite</th>
    <th>Tipo</th>
    <th>Created_at</th>
    <th>Updated_at</th>
 
    </tr>
</thead>

<tbody>

  <!--Tratar quando for exibir por id-->

    

        <tr>
        <td>{{$registro->id}}</td>
        <td>{{$registro->equipamento->nome}}</td>
        <td>{{$registro->user->name}}</td>
        <td>{{$registro->descricao}}</td>
        <td>{{$registro->datalimite}}</td>
        
            @if($registro->tipo == 1)
                <td class="table-primary">PREVENTIVA</td>
            @elseif($registro->tipo == 2)
                <td class="table-warning">CORRETIVA</td>
            @elseif($registro->tipo == 3)
                <td class="table-danger">URGENTE</td>
            
            @endif


    
        <td>{{$registro->created_at}}</td>
        <td>{{$registro->updated_at}}</td>
  
        </tr>    
    
    

</tbody>
</table>
<form name="frmDelete"
action="{{route('registros.destroy', $registro->id)}}"
method="post"
onsubmit="return confirm('Confirma a exclusão do registro??')">



@csrf
@method('DELETE')
<a type="button" class="btn btn-sm btn-outline-success mx-sm-1 mb-1" href="{{route('registros.edit', $registro->id)}}">Atualizar</a>
<input type="submit" class="btn btn-sm btn-outline-danger mx-sm-1 mb-1" value="Excluir">
<a type="button" class="btn btn-sm btn-outline-info mx-sm-1 mb-1" href="{{route('registros.index')}}">Voltar</a>

</form>
    </div>
  </div>

  

    </body>
</html>



@endsection