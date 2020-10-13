@extends('welcome')

@section('conteudo')


 

  <head>
   
    <title>Seu perfil</title>
    <link href="{{ asset('estilo.css') }}" rel="stylesheet">


    <!-- Custom styles for this template -->

  </head>
  <body>


    
    

    <div class="container" style="margin-bottom: 100px; margin-top:100px; background: linear-gradient(#EAEAAE, #9198e5); border-radius: 10px; border-style:groove;" >
        <h1 class="mx-auto" style="text-align:center; margin-bottom:20pt;">{{$user->apelido}}</h1>
        

        <div class="row">

          <div class="col-md-4">
            
              @if(Auth::user()->foto != null)
                  
              <img src="{{asset('storage/users/'.Auth::user()->foto)}}"  style="border-style:dashed; max-width: 200px; margin-left: 50pt;"> 
        
            @endif
              </div>
          
          <div class="col-md-4" >
            <label class="legenda">NOME</label>
            <div class="perfil">              
              <label>{{$user->name}}</label>
            </div>
           
            <label class="legenda">APELIDO</label>
            <div class="perfil" >
              <label>{{$user->apelido}}</label>
            </div>

            <label class="legenda">SEXO</label>
            <div class="perfil" >
              <label>
                @if($user->sexo == 'F')
                 {{$user->sexo}}
                @elseif($user->sexo == 'M')
                 {{$user->sexo}}
                @elseif($user->sexo == 'N')
                 {{$user->sexo}}
                @endif
                
                
                </label>
            </div>
        

          </div>

            <div class="col-md-4">

              <label class="legenda">E-MAIL</label>
              <div class="perfil" >
                <label>{{$user->email}}</label>
              </div>

              <label class="legenda">DATA DE NASCIMENTO</label>
              <div class="perfil" >
                <label>{{$user->data_nasc}}</label>
              </div>

              <label class="legenda">GÊNERO MUSICAL FAVORITO</label>
              <div class="perfil" >
                <label>{{$user->genero_fav}}</label>
              </div>
           
              
              
            </div>
          
        </div>
    
        <form name="frmDelete"
        action="{{route('users.destroy', $user->id)}}"
        method="post"
        onsubmit="return confirm('Confirma a exclusão do user?')" style="margin: 20pt;">
        @csrf
        @method('DELETE')
        <a type="button" class="btn btn btn-success mx-sm-1 mb-1" href="{{route('users.edit', $user->id)}}">Adicionar Foto/Atualizar Perfil</a>
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