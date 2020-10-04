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
    <title>Cadastro de pessoas</title>

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

      <form  action="{{route('pessoas.store')}}" method="post" style="border-style:dashed; margin:100px; border-radius: 10px;">
          @csrf
      
      <div class="container" style="place-items:center; margin-top:30pt; margin-bottom:30pt">
        <h1 class="card-title" style="text-align:center; margin-bottom:20pt;">Cadastro de pessoas</h1>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="nome">Nome: </label>             
                    <input required="required" type="text" class="form-control" id="nome" placeholder="nome completo" name="nome">         
                </div>
            </div>
  
            <div class="col-md-3">
              <legend class="col-form-label col-sm-2 pt-0">Tipo Sanguíneo</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="tipo" id="A+" value="A+" checked>
                  <label class="form-check-label" for="A+">
                    A+
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="tipo" id="A-" value="A-">
                  <label class="form-check-label" for="A-">
                    A-
                  </label>
                </div>
                <div class="form-check ">
                  <input class="form-check-input" type="radio" name="tipo" id="B+" value="B+" >
                  <label class="form-check-label" for="B+">
                    B+
                  </label>
                </div>

                <div class="form-check ">
                  <input class="form-check-input" type="radio" name="tipo" id="B-" value="B-" >
                  <label class="form-check-label" for="B-">
                    B-
                  </label>
                </div>
              </div>
              <div class="col-md-3">

                <div class="form-check ">
                  <input class="form-check-input" type="radio" name="tipo" id="AB+" value="AB+" >
                  <label class="form-check-label" for="AB+">
                    AB+
                  </label>
                </div>

                <div class="form-check ">
                  <input class="form-check-input" type="radio" name="tipo" id="AB-" value="AB-" >
                  <label class="form-check-label" for="AB-">
                    AB-
                  </label>
                </div>

                <div class="form-check ">
                  <input class="form-check-input" type="radio" name="tipo" id="O+" value="O+" >
                  <label class="form-check-label" for="O+">
                    O+
                  </label>
                </div>

                <div class="form-check ">
                  <input class="form-check-input" type="radio" name="tipo" id="O-" value="O-" >
                  <label class="form-check-label" for="O-">
                    O-
                  </label>
                </div>
              </div>
            </div>
                  


               
              
             
                  
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

