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
    <title>Registros</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    


    <style>
     body{
        background-color:#f9f9f9;
      }
    </style>
   

  </head>
  <body>


    <div class="album py-5 bg-light">
      <div class="container">
    <h2 class="mx-auto" style="width: 200px; margin-bottom:20pt">Manutenções</h2>
    <table class="table table-bordered table-sm">
    <thead class="bg-info">
    <th>ID</th>
    <th>Data Limite</th>
    <th>Tipo</th>
    <th>Descricao</th>
    <th>Equipamento</th>
    <th>Usuário</th>
    <th>Criado em:</th>
    </tr>
</thead>

<tbody>



    @foreach ($registro as $aux)

        <tr>
        <td>
          <a href="{{route('registros.show', $aux->id)}}">{{$aux->id}}</a>
        </td> 
        <td>{{$aux->datalimite}}</td>
        <td>

            @if($aux->tipo == 1)
                PREVENTIVA
            @elseif($aux->tipo == 2)
                CORRETIVA
            @elseif($aux->tipo == 3)
                URGENTE

            @endif

        </td>
        <td>{{$aux->descricao}}</td>
        <td>{{$aux->equipamento->nome}}</td>
        <td>{{$aux->user->name}}</td>
        <td>{{$aux->created_at}}</td>
        </tr>    
    
    @endforeach

</tbody>
</table>










    </div>
  </div>
</html>



@endsection