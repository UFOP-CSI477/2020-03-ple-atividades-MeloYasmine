@extends('welcome')

@section('conteudo')


 

  <head>
   
    <title>Seu perfil</title>



    <!-- Custom styles for this template -->

  </head>
  <body>


    
    

    <div class="container" style="margin-bottom: 100px; margin-top:100px; background: linear-gradient(#EAEAAE, #9198e5); border-radius: 10px; border-style:groove;" >
        <h1 class="mx-auto" style="text-align:center; margin-bottom:20pt;">{{$user->apelido}}</h1>
        

        <div class="row">

          <div class="col-md-4">
            
              @if(Auth::user()->foto != null)
                  
              <img src="{{asset('storage/users/'.Auth::user()->foto)}}"  style="border-style:dashed; max-width: 200px;"> 
        
            @endif
              </div>
          
          <div class="col-md-4">
            
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Nome
                    </button>
                  </h5>
                </div>
            
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                     {{$user->name}}
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Apelido
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    {{$user->apelido}}
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Sexo
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    @if($user->sexo == 'F')
                    Feminino
                  @elseif($user->sexo == 'M')
                    Masculino
                  @elseif($user->sexo == 'N')
                    Não informado
                  @endif                    
                  </div>
                </div>
              </div>
            </div>

          </div>
            <div class="col-md-4">

              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        E-mail:
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                      {{$user->email}}
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Data nascimento
                      </button>
                    </h5>
                  </div>
                  <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                      {{$user->data_nasc}}
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Gênero favorito
                      </button>
                    </h5>
                  </div>
                  <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                    <div class="card-body">
                      {{$user->genero_fav}}
                    </div>
                  </div>
                </div>
              </div>

            </div>
          
        </div>
    
        <form name="frmDelete"
        action="{{route('users.destroy', $user->id)}}"
        method="post"
        onsubmit="return confirm('Confirma a exclusão do user?')" style="margin: 20pt;">
        @csrf
        @method('DELETE')
        <a type="button" class="btn btn btn-success mx-sm-1 mb-1" href="{{route('users.edit', $user->id)}}">Adicionar Foto</a>
        <a type="button" class="btn btn btn-success mx-sm-1 mb-1" href="{{route('users.edit', $user->id)}}">Atualizar Perfil</a>
        <input type="submit" class="btn btn btn-danger mx-sm-1 mb-1" value="Excluir">
        <a type="button" class="btn btn btn-info mx-sm-1 mb-1" href="{{route('users.index')}}">Voltar</a>
        
        </form>
        </div>


    </div>


   




</div>

    </div>
  </div>

  

    </body>



@endsection