@extends('principal')

@section('conteudo')

<div class="album py-1 bg-light">
    <div class="container">

    <h1 class="mx-auto" style="width: 200px; margin-bottom:20pt; margin-top:20pt;">Agendamentos</h1>


  <table class="table table-bordered table-sm">
  <thead class="bg-info">
  <tr align="center" class="bg-danger">
  <th>ID</th>
  <th>Pessoa</th>
  <th>Local da coleta</th>
  <th>Data da coleta</th>
  <th>Exibir</th>
  

  </tr>
</thead>

<tbody>

<!--Tratar quando for exibir por id-->

  @foreach ($agendamentos as $agendamento)

      <tr align="center"> 
         <td>{{$agendamento->id}}</td>
         <td>{{$agendamento->pessoa->nome}}</td>
         <td>{{$agendamento->coleta->cidade}}</td>
         <td>{{$agendamento->data}}</td>
         <td><a href="{{route('agendamentos.show', $agendamento->id)}}">Exibir</a></td>
         

      </tr>    
  
  @endforeach

</tbody>
</table>

  </div>
</div>


@endsection
