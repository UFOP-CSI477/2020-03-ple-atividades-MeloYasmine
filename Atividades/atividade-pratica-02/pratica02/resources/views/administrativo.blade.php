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
          <div class="col-md-4">
            <div class="card mb-2 shadow-sm text-center">
              <div class="card-body">
                
                  <h5 class="card-title" style="text-align:center; margin-bottom:20pt;">Manutenções</h5>
                                                  <div class="row d-flex justify-content-center">
                  <div class="btn-group">
                    <a type="button" class="btn btn-sm btn-outline-success mx-sm-1 mb-1" href="{{route('registros.index')}}">Visulizar</a>
                    <a type="button" class="btn btn-sm btn-outline-success mx-sm-1 mb-1" href="{{route('registros.create')}}">Adicionar</a>
                    <a type="button" class="btn btn-sm btn-outline-success mx-sm-1 mb-1" href="{{route('registros.index')}}">Atualizar</a>
                    <a type="button" class="btn btn-sm btn-outline-success mx-sm-1 mb-1" href="{{route('registros.index')}}">Excluir</a>
                  </div>

              
                </div>
              </div>
            </div>

          </div>   
          <div class="col-md-4">
              <div class="card mb-2 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title" style="text-align:center; margin-bottom:20pt;">Equipamentos</h5>
                                                    <div class="row d-flex justify-content-center">
                    <div class="btn-group">
                      <a type="button" class="btn btn-sm btn-outline-success mx-sm-1 mb-1" href="{{route('equipamentos.index')}}">Visulizar</a>
                      <a type="button" class="btn btn-sm btn-outline-success mx-sm-1 mb-1" href="{{route('equipamentos.create')}}">Adicionar</a>
                      <a type="button" class="btn btn-sm btn-outline-success mx-sm-1 mb-1" href="{{route('equipamentos.index')}}">Atualizar</a>
                      <a type="button" class="btn btn-sm btn-outline-success mx-sm-1 mb-1" href="{{route('equipamentos.index')}}">Excluir</a>
                    </div>

                
                  </div>
                </div>
              </div>

            </div>   
            <div class="col-md-4">
              <div class="card mb-2 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title" style="text-align:center; margin-bottom:20pt;">Usuários</h5>
                                                    <div class="row d-flex justify-content-center">
                    <div class="btn-group">
                      
                      <a type="button" class="btn btn-sm btn-outline-success mx-sm-1 mb-1" href="{{route('users.index')}}">Visulizar</a>
                      
                     
                      <a type="button" class="btn btn-sm btn-outline-success mx-sm-1 mb-1" href="{{ route('register') }}">Adicionar</a>
                      
                    </div>

                
                  </div>
                </div>
              </div>
            </div>



        </div>
      </div>
    </div>

    <div class="album  bg-light " style="align-content: center; ">
      <div class="container d-flex justify-content-center">
  
        <div class="row">
    
      <div class="card mb-2 shadow-sm">
        <div class="card-body">
            <h5 class="card-title" style="text-align:center; margin-bottom:20pt;">Manutenções por Equipameto</h5>
                                            <div class="row d-flex justify-content-center">
            <div class="btn-group">
              
              <a type="button" class=" btn btn-sm btn-outline-success mx-sm-1 mb-1 " href="{{route('manutencoes.index')}}">Visulizar</a>

            </div>

        
          </div>
        </div>
    
    </div>
        </div>
      </div>

  </div>   
</div>





    

    
    </body>
</html>



@endsection