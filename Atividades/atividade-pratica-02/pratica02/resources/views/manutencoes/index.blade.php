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
    <title>Manutenções por equipamento</title>

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
 
            <h2 class="mx-auto" style="text-align:center; margin-bottom:20pt;">Manutenção por equipamento</h2>
            

            @foreach ($listas as $chave => $l)

            <table class="table table-bordered table-sm">
              <thead class="bg-info">
             
              <tr>
              <td colspan="5" style="text-align:center; font-size:20pt; font-style:italic">{{$chave}}</td>
              <tr>
              </thead>
              <thead class="thead-light">
              <tr>
                <th>Data Limite</th>
              <th>ID</th>
              
              <th>descricao</th>
              <th>equipamento</th>
              <th>Usuário</th>
              </tr>
            </thead>
            
            <tbody>
            
            <!--Tratar quando for exibir por id-->
            
            
              @foreach ($l as $aux)
            
                  <tr>
                  <td>{{$aux->datalimite}}</td>
                  <td>{{$aux->id}}</td>                  
                  <td>{{$aux->descricao}}</td>
                  <td>{{$aux->equipamento->nome}}</td>
                  <td>{{$aux->user->name}}</td>
                  </tr>    
              
              @endforeach
            
            </tbody>
            <tr class="table-info">
              <td colspan="2">TOTAL</td>
              <td colspan="3">{{sizeof($l)}}</td>
            </tr>
            
            
            </table>
            
            
            
            @endforeach



          </div>




    </div>


    
            
          </div>
        </div>
    </div>

 

    
    </body>
</html>



@endsection