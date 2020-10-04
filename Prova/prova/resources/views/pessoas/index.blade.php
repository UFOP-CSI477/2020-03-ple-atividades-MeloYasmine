@extends('principal')

@section('conteudo')

<div class="album py-1 bg-light">
    <div class="container">

    <h1 class="mx-auto" style="width: 200px; margin-bottom:20pt; margin-top:20pt;">Pessoas</h1>


  <table class="table table-bordered table-sm">
  <thead class="bg-info">
  <tr align="center" class="bg-danger">
  <th>ID</th>
  <th>Nome</th>
  <th>Tipo Sanguíneo</th>
  <th>Exibir</th>


  </tr>
</thead>

<tbody>

<!--Tratar quando for exibir por id-->

  @foreach ($pessoas as $pessoa)

      <tr align="center"> 
         <td>{{$pessoa->id}}</td>
         <td>{{$pessoa->nome}}</td>
         <td>{{$pessoa->tipo}}</td>
         <td><a href="{{route('pessoas.show', $pessoa->id)}}">Exibir</a></td>
 

      </tr>    
  
  @endforeach

</tbody>
</table>

  </div>
</div>


@endsection
