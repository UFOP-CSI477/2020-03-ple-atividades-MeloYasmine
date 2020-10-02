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
    <title>Área Administrativa</title>

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

    <h1 class="mx-auto" style="text-align:center;">Área Administrativa</h1>



    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-2 shadow-sm text-center">
              <div class="card-body">
                
                  <h5 class="card-title" style="text-align:center; margin-bottom:20pt;">Manutenções</h5>
                                                  <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a type="button" class="btn btn-sm btn-outline-success mx-sm-4 mb-1" href="{{route('registros.index')}}">Visulizar</a>
                    <a type="button" class="btn btn-sm btn-outline-success mx-sm-4 mb-1" href="{{route('registros.create')}}">Adicionar</a>
                    <a type="button" class="btn btn-sm btn-outline-success mx-sm-4 mb-1" href="{{route('registros.index')}}">Atualizar</a>
                    <a type="button" class="btn btn-sm btn-outline-success mx-sm-4 mb-1" href="{{route('registros.index')}}">Excluir</a>
                  </div>

              
                </div>
              </div>
            </div>

          </div>   
          <div class="col-md-6">
              <div class="card mb-2 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title" style="text-align:center; margin-bottom:20pt;">Equipamentos</h5>
                                                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a type="button" class="btn btn-sm btn-outline-success mx-sm-4 mb-1" href="{{route('equipamentos.index')}}">Visulizar</a>
                      <a type="button" class="btn btn-sm btn-outline-success mx-sm-4 mb-1" href="{{route('equipamentos.create')}}">Adicionar</a>
                      <a type="button" class="btn btn-sm btn-outline-success mx-sm-4 mb-1" href="{{route('equipamentos.index')}}">Atualizar</a>
                      <a type="button" class="btn btn-sm btn-outline-success mx-sm-4 mb-1" href="{{route('equipamentos.index')}}">Excluir</a>
                    </div>

                
                  </div>
                </div>
              </div>

            </div>   
      

            </div>   
        </div>





    <div class="container">
      <div class="">
    </div>
    <div class="container">
     
        <div class="row">
          <div class="col">
              <h2 class="mx-auto" style="width: 200px; margin-bottom:20pt; margin-top:20pt;">Usuários</h2>
            <table class="table table-bordered table-sm">
                <thead class="bg-info">
                <tr>
                <th>Nome</th>
                </tr>
            </thead>
            
            <tbody>
            
              <!--Tratar quando for exibir por id-->
            
              <tr>
                <td class="table-primary">
                  <a href="{{route('users.index')}}">Visulizar todas as informações</a>
                </td>
              </tr>  
                @foreach ($users as $user)
            
                    <tr>
                    <td>{{$user->name}}</td>
                    </tr>    
                
                @endforeach
            
            </tbody>
            </table>



            
            <h2 class="mx-auto" style="width: 200px; margin-bottom:20pt; margin-top:20pt;">Equipamentos</h2>
            <table class="table table-bordered table-sm">
              <thead class="bg-info">
              <tr>
              <th>Nome</th>
              </tr>
          </thead>
          
          <tbody>
          
            <!--Tratar quando for exibir por id-->
          
              @foreach ($equipamentos as $aux)
          
                  <tr>
                  <td>{{$aux['nome']}}</td>
                  </tr>    
              
              @endforeach
          
          </tbody>
          </table>
          </div>








          <div class="col-8">
            <h2 class="mx-auto" style="text-align:center; margin-bottom:20pt; margin-top:20pt;">Manutenção por equipamento</h2>
            

            @foreach ($listas as $chave => $l)

            <table class="table table-bordered table-sm">
              <thead class="bg-info">
             
              <tr>
              <td colspan="5" style="text-align:center; font-size:20pt; font-style:italic">{{$chave}}</td>
              <tr>
              </thead>
              <thead class="thead-light">
              <tr>
              <th>ID</th>
              <th>Data Limite</th>
              <th>descricao</th>
              <th>equipamento</th>
              <th>Usuário</th>
              </tr>
            </thead>
            
            <tbody>
            
            <!--Tratar quando for exibir por id-->
            
            
              @foreach ($l as $aux)
            
                  <tr>
                  <td>{{$aux->id}}</td>
                  <td>{{$aux->datalimite}}</td>
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

 

    
    </body>
</html>



@endsection