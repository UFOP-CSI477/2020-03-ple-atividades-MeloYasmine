@extends('principal')

@section('conteudo')

 

  <head>
   
    <title>Local de Coleta</title>



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

      <h1 class="mx-auto" style="text-align:center; margin-bottom:20pt;">Local: {{$coleta->nome}}</h1>


    <table class="table table-bordered table-sm" >
    <thead class="bg-info">
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Cidade</th>
    <th>Created_at</th>
    <th>Updated_at</th>
 
    </tr>
</thead>

<tbody>

  <!--Tratar quando for exibir por id-->

    

        <tr>
        <td>{{$coleta->id}}</td>
        <td>{{$coleta->nome}}</td>
        <td>{{$coleta->cidade}}</td>
        <td>{{$coleta->created_at}}</td>
        <td>{{$coleta->updated_at}}</td>
  
        </tr>    
    
    

</tbody>
</table>


<a type="button" class="btn btn-sm btn-outline-info mx-sm-1 mb-1" href="{{route('pessoas.index')}}">Voltar</a>


</div>

    </div>
  </div>

  

    </body>



@endsection