@extends('principal')

@section('conteudo')

<div class="album py-1 bg-light">
    <div class="container">

    <h1 class="mx-auto" style="text-align:center; margin-bottom:20pt; margin-top:20pt;">Locais de Coleta</h1>


  <table class="table table-bordered table-sm">
  <thead class="bg-info">
  <tr align="center" class="bg-danger">
  <th>ID</th>
  <th>Nome</th>
  <th>Cidade</th>
  <th>Criado em</th>
  <th>Exibir</th>

  </tr>
</thead>

<tbody>

<!--Tratar quando for exibir por id-->

  @foreach ($coletas as $coleta)

      <tr align="center"> 
         <td>{{$coleta->id}}</td>
         <td>{{$coleta->nome}}</td>
         <td>{{$coleta->cidade}}</td>
         <td>{{$coleta->created_at}}</td>
         <td><a href="{{route('coletas.show', $coleta->id)}}">Exibir</a></td>

      </tr>    
  
  @endforeach

</tbody>
</table>

  </div>
</div>


@endsection
