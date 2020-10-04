@extends('principal')

@section('conteudo')

<div class="row mb-2" style="margin-top: 100px; margin-bottom: 100px">
  <div class="col-md-6">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        
        <h3 class="mb-0 d-inline-block mb-2 text-danger">PESSOAS</h3>
        <div class="mb-1 text-muted"></div>
        <a href="{{route('pessoas.create')}}" class="stretched-link">Cadastro</a>
        <a href="{{route('pessoas.index')}}" class="stretched-link">Visualizar</a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="adm1.png" class="bd-placeholder-img" width="150" height="215" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" rect width="100%" height="100%" fill="#55595c">
      </div>
    </div>
  </div>


  <div class="col-md-6">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
       
        <h3 class="mb-0 d-inline-block mb-2 text-danger">ÁREA DE COLETA</h3>
        <div class="mb-1 text-muted"></div>

        <a href="{{route('coletas.create')}}" class="stretched-link">Cadastro</a>
        <a href="{{route('coletas.index')}}" class="stretched-link">Visualizar</a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="adm2.png" class="bd-placeholder-img" width="150" height="215" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" rect width="100%" height="100%" fill="#55595c">
      </div>
    </div>
  </div>






    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          
          <h3 class="mb-0 d-inline-block mb-2 text-danger">AGENDAMENTOS</h3>
          <div class="mb-1 text-muted"></div>
          
        <a href="{{route('agendamentos.create')}}" class="stretched-link">Agendar Coleta</a>
        <a href="{{route('agendamentos.index')}}" class="stretched-link">Visualizar</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="adm3.png" class="bd-placeholder-img" width="150" height="215" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" rect width="100%" height="100%" fill="#55595c">
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
         
          <h3 class="mb-0 d-inline-block mb-2 text-danger">ADMINISTRADORES</h3>
          <div class="mb-1 text-muted"></div>
          <a href="{{ route('register') }}">{{ __('Adicionar Administrador') }}</a>

       
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="adm4.png" class="bd-placeholder-img" width="150" height="215" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" rect width="100%" height="100%" fill="#55595c">
        </div>
      </div>
    </div>
  


@endsection
