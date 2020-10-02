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
    <title>Área Geral</title>

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


    <div class="container">
        <h1 class="mx-auto" style="width: 200px; margin-bottom:40pt">Área Geral</h1>
        <div class="row">
          <div class="col">
              <h2 class="mx-auto" style="width: 200px; margin-bottom:20pt">Equipamentos</h2>
            <table class="table table-bordered table-sm">
                <thead class="bg-info">
                <tr>
                <th>Nome</th>
                </tr>
            </thead>
            
            <tbody>
            
              <!--Tratar quando for exibir por id-->
            
                @foreach ($equipamentos as $equipamento)
            
                    <tr>
                    <td>{{$equipamento->nome}}</td>
                    </tr>    
                
                @endforeach
            
            </tbody>
            </table>
          </div>
          <div class="col-8">
            <h2 class="mx-auto" style="width: 200px; margin-bottom:20pt">Manutenções</h2>
            <table class="table table-bordered table-sm">
                <thead class="bg-info">
                <tr>
                <th>Data Limite</th>
                <th>Equipamento</th>
                <th>Usuário</th>
                <th>Tipo</th>
                <th>Descricao</th> 
                </tr>
            </thead>
            
            <tbody>
            
              <!--Tratar quando for exibir por id-->
            
                @foreach ($registros as $registro)
            
                    <tr>
                    <td>{{$registro->datalimite}}</td>                    
                    <td>{{$registro->equipamento->nome}}</td>
                    <td>{{$registro->user->name}}</td>
                    @if (($registro->tipo)==1)
                        <td>Preventiva</td>
                    @elseif(($registro->tipo)==2)
                        <td>Corretiva</td>
                    @elseif(($registro->tipo)==3)
                        <td>Urgente</td>  
                    @endif            
                    <td>{{$registro->descricao}}</td>
                    
                    </tr>    
                
                @endforeach
            
            </tbody>
            </table>
            
          </div>
        </div>
    </div>

 

    
    </body>
</html>



@endsection