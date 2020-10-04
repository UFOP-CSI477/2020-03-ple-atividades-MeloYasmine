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

      <h1 class="mx-auto" style="text-align:center; margin-bottom:20pt;">Doador: {{$pessoa->nome}}</h1>


    <table class="table table-bordered table-sm">
    <thead class="bg-info">
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Tipo Sanguíneo</th>
    <th>Created_at</th>
    <th>Updated_at</th>
 
    </tr>
</thead>

<tbody>

  <!--Tratar quando for exibir por id-->

    

        <tr>
        <td>{{$pessoa->id}}</td>
        <td>{{$pessoa->nome}}</td>
        <td>{{$pessoa->tipo}}</td>
        <td>{{$pessoa->created_at}}</td>
        <td>{{$pessoa->updated_at}}</td>
  
        </tr>    
    
    

</tbody>
</table>






<a type="button" class="btn btn-sm btn-outline-info mx-sm-1 mb-1" href="{{route('pessoas.index')}}">Voltar</a>


</div>

    </div>
  </div>

  

    </body>



@endsection