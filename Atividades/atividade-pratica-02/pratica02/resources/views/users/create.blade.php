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
    <title>Cadastro de usuários</title>

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
  <body >
    <form  action="{{route('users.store')}}" method="post" style="border-style:dashed; margin:20px; border-radius: 10px;">
        @csrf
    
    <div class="container" style="place-items:center; margin-top:30pt; margin-bottom:30pt">
      <h1 class="card-title" style="text-align:center; margin-bottom:20pt;">Cadastro de usuários</h1>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="name">Nome: </label>
                <input required="required" type="text" class="form-control" id="name" placeholder="nome completo" name="name">
                
              </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
                <label for="email">E-mail: </label>
                <input required="required" type="email" class="form-control" id="email" placeholder="informe seu e-mail" name="email">
                
              </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="password">Senha: </label>
                <input required="required" type="password" class="form-control" id="password" placeholder="sua senha" name="password">
                
              </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
                <label for="remember_token">Palavra de segurança: </label>
                <input required="required" type="text" class="form-control" id="remember_token" placeholder="insura uma palavra de segurança" name="remember_token">
                
              </div>
          </div>

        </div>
        <button type="submit" class="btn btn-success  mx-sm-3 mb-2">Cadastrar</button>
        <button type="reset" class="btn btn-warning   mx-sm-3 mb-2">Limpar</button>
    </div>

    </form>
  </body>

</html>

@endsection