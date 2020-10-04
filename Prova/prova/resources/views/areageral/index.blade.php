@extends('principal')

@section('conteudo')

<div class="album py-1 bg-light">
    <div class="container">

    <h1 class="mx-auto" style="text-align:center; margin-bottom:20pt; margin-top:20pt;">Relatório de agendamentos</h1>


  <table class="table table-bordered table-sm">
  <thead class="bg-info">
  <tr align="center" class="bg-danger">

    <th rowspan="2">Data da coleta</th>
    <th colspan="2">Coleta</th>
    <th colspan="3">Pessoa</th>
    
  </tr>
</thead>

<tbody> 

<!--Tratar quando for exibir por id-->
<tr align="center" class="bg-danger"> 
<td></td>         
<td>Unidade</td>
<td>Cidade</td>
<td>ID</td>
<td>Nome</td>
<td>Tipo Sanguineo</td>

</tr>
  @foreach ($agendamentos as $agendamento)

      <tr align="center"> 


        <td>{{$agendamento->data}}</td>
        <td>{{$agendamento->coleta->nome}}</td>
        <td>{{$agendamento->coleta->cidade}}</td>
        <td>{{$agendamento->pessoa->id}}</td>
        <td>{{$agendamento->pessoa->nome}}</td>
        <td>{{$agendamento->pessoa->tipo}}</td>
       
         

      </tr>    
  
  @endforeach

</tbody>
</table>

  </div>
</div>


@endsection
