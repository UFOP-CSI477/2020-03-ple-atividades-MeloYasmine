
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    
    <title>Página Principal</title>

    <!--Java Script-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">



    <style>

      body{
        background-color:#f9f9f9;
      }
    </style>
    
    <!-- Custom styles for this template -->

  </head>
  <body>

    <header>

  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
    <a href="{{route('principal')}}" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" stroke="currentColor"   class="mr-2" viewBox="0 0 24 24" focusable="false"><path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
          <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Home</strong>
      </a>

      <a href="{{route('equipamentos.index')}}" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  stroke="currentColor"  aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Equipamentos</strong>
      </a>

      <a href="{{route('registros.index')}}" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  stroke="currentColor"  aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path fill-rule="evenodd" d="M5 15V1H4v14h1zm8-11.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Registros</strong>
      </a>

      <a href="{{route('users.index')}}" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  stroke="currentColor"  aria-hidden="true" class="bi bi-people-fill"  viewBox="0 0 24 24" focusable="false"><path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Usuários</strong>
      </a>


      @guest
      
          <a  href="{{ route('login') }}" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" stroke="currentColor"   viewBox="0 0 24 24" focusable="false"><path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zm4.854-7.85a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/><circle cx="12" cy="13" r="4"/></svg>
            <strong>Login</strong>
          </a>

          @if (Route::has('register'))
           <a  href="{{ route('register') }}" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  stroke="currentColor"  class="bi bi-people-fill"  viewBox="0 0 24 24" focusable="false"><path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zM13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/><circle cx="12" cy="13" r="4"/></svg>
            <strong>Novo Usuário</strong>
          </a>
            @endif
     
      

  @else
      <div class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
      </div>
  @endguest

      
    </div>
  </div>
</header>

<main role="main">



  <section class="jumbotron text-center">
    <div class="container">
      <h1>Sistema de Manutenção de Equipamentos</h1>
      </div>
  </section>

  @if(session('mensagem'))
    <div class="alert alert-success">
      {{session('mensagem')}}
    </div>
  @endif
  
  @yield('conteudo')

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Área Geral - Suporte</h5>
                <h6 class="card-subtitle mb-2 text-muted">----</h6>
                <p class="card-text">Lsta de equipamentos e manutenções para cada equipamento.
                </p>
                            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                
                <a type="button" class="btn btn-lg btn-outline-success" href="{{route('geral')}}">Acessar</a>
                  
                </div>
              
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4 shadow-sm">
              <div class="card-body">
                  <h5 class="card-title">Área administrativa</h5>
                  <h6 class="card-subtitle mb-2 text-muted">----</h6>
                  <p class="card-text">Cadastros de equipamentos
                    e manutenções.
                  </p>
                              <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a type="button" class="btn btn-lg btn-outline-success" href="{{route('administrativo')}}">Acessar</a>
                    
                  </div>
              
                </div>
              </div>
            </div>
          </div>        

       

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    </div>
</footer>




      </html>
