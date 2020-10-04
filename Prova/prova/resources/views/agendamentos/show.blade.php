@extends('principal')

@section('conteudo')


 

  <head>
   
    <title>Perfil do Doador</title>



    <style>
     body{
        background-color:#f9f9f9;
      }
    </style>
    <!-- Custom styles for this template -->

  </head>
  <body>


    <div class="album py-1 bg-light" style="margin-bottom: 100px; margin-top:100px;">
      <div class="container">

      <h1 class="mx-auto" style="text-align:center; margin-bottom:20pt;">Agendamento</h1>


    <table class="table table-bordered table-sm">
    <thead class="bg-info">
    <tr>
    <th>ID</th>
    <th>Pessoa</th>
    <th>Local</th>
    <th>Data agendada</th>
    <th>Criado em</th>
 
 
    </tr>
</thead>

<tbody>

  <!--Tratar quando for exibir por id-->

    

        <tr>
        <td>{{$agendamento->id}}</td>
        <td>{{$agendamento->pessoa->nome}}</td>
        <td>{{$agendamento->coleta->nome}}</td>
        <td>{{$agendamento->data}}</td>
        <td>{{$agendamento->created_at}}</td>
  
        </tr>    
    
    

</tbody>
</table>

<form name="frmDelete"
action="{{route('agendamentos.destroy', $agendamento->id)}}"
method="post"
onsubmit="return confirm('Confirma a exclusão do agendamento?')">
@csrf
@method('DELETE')
<a type="button" class="btn btn-sm btn-outline-success mx-sm-1 mb-1" href="{{route('agendamentos.edit', $agendamento->id)}}">Atualizar</a>
<input type="submit" class="btn btn-sm btn-outline-danger mx-sm-1 mb-1" value="Excluir">
<a type="button" class="btn btn-sm btn-outline-info mx-sm-1 mb-1" href="{{route('agendamentos.index')}}">Voltar</a>

</form>

</div>

    </div>
  </div>

  

    </body>



@endsection