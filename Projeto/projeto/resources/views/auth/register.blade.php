@extends('welcome')

@section('conteudo')

<form method="POST" action="{{ route('register') }}" style="border-style:dashed; margin:10px; border-radius: 10px; margin-bottom:150pt;">
@csrf

<div class="container" style="place-items:center; margin-top:30pt; margin-bottom:30pt">
      <h1 class="card-title" style="text-align:center; margin-bottom:20pt;">Cadastro de usuarios</h1>

        <div class="row">

          <div class="col-md-6">
            <div class="form-group">
                <label for="name">Nome:</label>                           
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
          </div>
                      
        <div class="col-md-6">
            <div class="form-group">
                <label for="apelido">Apelido: </label>
                <input id="apelido" type="text" class="form-control @error('apelido') is-invalid @enderror" name="apelido" value="{{ old('apelido') }}" required autocomplete="apelido">
                @error('apelido')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
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
                <label for="data_nasc">Data de Nascimento: </label>
                <input required="required" type="date" class="form-control" id="data_nasc"  name="data_nasc">        
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
                    <label for="email">E-mail</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">            
                    <label for="password">Senha:</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password-confirm">Confirme a senha:</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
        </div>
        @if(Auth::user())
        @if(Auth::user()->tipo == 'A')
           </div><div class="col-md-6">
               <div class="form-group">
               
                   <label for="tipo">Tipo: </label>
                   <select required="required" class="form-control" id="tipo"  name="tipo">
                   <option value="U">Usuario padrão</option>
                   <option value="A">Admin</option>
   
               </select>            
           </div>
           </div>
        @endif
   @else 
       </div><div style="display: none;"class="col-md-6">
           <div class="form-group">
           
               <label for="tipo">Tipo: </label>
               <select   required="required" class="form-control" id="tipo"  name="tipo">
               <option value="U">Usuario padrão</option>
               

           </select>            
       </div>
       </div>       
   @endif
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-lg btn-success">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
