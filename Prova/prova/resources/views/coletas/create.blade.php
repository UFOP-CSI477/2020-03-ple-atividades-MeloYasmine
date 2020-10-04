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
    <title>Cadastro de coletas</title>

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
    <form  action="{{route('registros.store')}}" method="post" style="border-style:dashed; margin:20px; border-radius: 10px;">
        @csrf
    
    <div class="container" style="place-items:center; margin-top:30pt; margin-bottom:30pt">
      <h1 class="card-title" style="text-align:center; margin-bottom:20pt;">Cadastro de Manutenções</h1>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="equipamento_id">Equipamento: </label>             
                  <select name="equipamento_id" id="equipamento_id" class="form-control" required="required">
                      <option>SELECIONAR</option>
                      @foreach($equipamentos as $equipamento)
                         <option value="{{$equipamento->id}}">{{$equipamento->nome}}</option>
                       @endforeach
                    </select>           
              </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
                <label for="user_id">Usuário:</label>
                <select name="user_id" id="user_id" class="form-control" required="required">
                   
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                  </select>
                
              </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input required="required" type="text" class="form-control" id="descricao" placeholder="Descrição do serviço" name="descricao">
                
              </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
                <label for="datalimite">Data Limite:</label>
                <input required="required" type="date" class="form-control" id="datalimite" placeholder="" name="datalimite">
                
              </div>
          </div>
        </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="tipo">Tipo:</label>
                  <select name="tipo" id="tipo" class="form-control" required="required">
                
                    
                    <option value="1">PREVENTIVA</option>
                    <option value="2">CORRETIVA</option>
                    <option value="3">PREVENTIVA</option>
                    
                  </select>
                </div>
            </div>
  
            <div class="col-md-6">
              <div class="form-group" style="place-items:center; margin-top:30pt;">
                <button type="submit" class="btn btn-lg btn-success  mx-sm-3 mb-2">Cadastrar</button>
                <button type="reset" class="btn btn-lg btn-warning   mx-sm-3 mb-2">Limpar</button>
                </div>
            </div>
  

        </div>

    </div>

    </form>
  </body>

</html>

@endsection

