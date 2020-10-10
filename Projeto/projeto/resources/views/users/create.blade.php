@extends('welcome')

@section('conteudo')

  <head>
  
    <title>Cadastro de usuários</title>


  </head>
  <body >
    <form  action="{{route('users.store')}}" method="post" files="true" enctype="multipart/form-data" style="border-style:dashed; margin:10px; border-radius: 10px; margin-bottom:150pt;">
        @csrf
  

    <div class="container" style="place-items:center; margin-top:30pt; margin-bottom:30pt">
      <h1 class="card-title" style="text-align:center; margin-bottom:20pt;">Cadastro de usuarios</h1>

        <div class="row">

          <div class="col-md-6">
            <div class="form-group">
                <label for="name">name: </label>
                <input required="required" type="text" class="form-control" id="name" placeholder="nome completo" name="name" required="required">
              </div>
          </div>
          
          <div class="col-md-6">
            <div class="form-group">
                <label for="apelido">Apelido: </label>
                <input required="required" type="text" class="form-control" id="apelido" placeholder="Como voce gostaria de ser chamado no site" name="apelido" required="required">        
          </div>
        </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="sexo">Sexo: </label>
                    <select required="required" class="form-control" id="sexo" placeholder="sexo completo" name="sexo">
                        <option value="F">Feminino</option>
                        <option value="M">Masculino</option>
                        <option value="N">Não informar</option>
                    </select>                    
                  </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-group">
                    <label for="email">E-mail </label>
                    <input required="required" type="email" class="form-control" id="email" placeholder="Seu e-mail" name="email" required="required">        
              </div>
            </div>


        </div>


        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="data_nasc">Data de Nascimento: </label>
                    <input required="required" type="date" class="form-control" id="data_nasc"  name="data_nasc">        
              </div>
            </div>
  
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Senha: </label>
                    <input required="required" type="password" class="form-control" id="password" placeholder="Senha" name="password" required="required">        
              </div>
            </div>



        </div>






        
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="genero_fav">Gênero musical favorito: </label>
                    <select required="required" class="form-control" id="genero_fav"  name="genero_fav">
                        <option value="POP">POP</option>
                        <option value="ROCK">ROCK</option>
                        <option value="LO-FI">LO-FI</option>
                    </select>        
              </div>
            </div>
  
            <div class="col-md-6">
                <div class="form-group">
                  
                    <label for="foto">Foto de perfil: </label>
                    <input type="file" class="form-control" id="foto" placeholder="Senha" name="foto">        
              </div>
            </div>

            
        </div>
        <div class="col-md-6">
          <div class="form-group">
            
              <label for="tipo">Tipo: </label>
              <select required="required" class="form-control" id="tipo"  name="tipo">
                <option value="U">Usuario padrão</option>
                <option value="A">Admin</option>

            </select>            
        </div>
      </div>



    </div>



        <button type="submit" class="btn btn-success  mx-sm-3 mb-2">Cadastrar</button>
        <button type="reset" class="btn btn-warning   mx-sm-3 mb-2">Limpar</button>
    </div>

    </form>
  </body>


@endsection