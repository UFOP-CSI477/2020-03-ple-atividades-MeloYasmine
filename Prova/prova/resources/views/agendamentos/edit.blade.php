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
    <title>Editar Agendamento</title>

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
    <form  action="{{route('agendamentos.update')}}" method="post" style="border-style:dashed; margin:100px; border-radius: 10px;">
        @csrf
    
    <div class="container" style="place-items:center; margin-top:30pt; margin-bottom:30pt">
      <h1 class="card-title" style="text-align:center; margin-bottom:20pt;">Editar</h1>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="pessoa_id">Pessoa: </label>             
                  <select name="pessoa_id" id="pessoa_id" class="form-control" required="required">
                  <option value="{{$agendamento->pessoa->id}}">{{$agendamento->pessoa->nome}}</option>
                      @foreach($pessoas as $pessoa)
                         <option value="{{$pessoa->id}}">{{$pessoa->nome}}</option>
                       @endforeach
                    </select>           
              </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
                <label for="coleta_id">Unidade:</label>
                <select name="coleta_id" id="coleta_id" class="form-control" required="required">
                    <option value="{{$agendamento->coleta->id}}">{{$agendamento->coleta->nome}}</option>
                    @foreach($coletas as $coleta)
                    <option value="{{$coleta->id}}">{{$coleta->nome}}</option>
                    @endforeach
                  </select>
                
              </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="data">Data:</label>
                <input required="required" type="date" class="form-control" id="data" placeholder="" name="data"
                value="{{$agendamento->data}}">
                
              </div>
          </div>

            <div class="col-md-6">
              <div class="form-group" style="place-items:center; margin-top:30pt;">
                <button type="submit" class="btn btn-lg btn-success  mx-sm-3 mb-2">Atualizar</button>
                <a type="button" class="btn btn-lg btn-info mx-sm-3 mb-2" href="{{route('agendamentos.index')}}">Voltar</a>
                </div>
            </div>
  

        </div>

    </div>

    </form>
  </body>

</html>

@endsection

