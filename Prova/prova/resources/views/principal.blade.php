<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Banco de sangue</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="{{ asset('estilo.css') }}" rel="stylesheet">



  
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    <header>

      <div class="navbar navbar-light bg-light shadow-sm">
        <div class="container d-flex justify-content-between">
        <a href="{{route('principal')}}" class="navbar-brand d-flex align-items-center">
          <svg  width="40" height="40" viewBox="0 0 20 20" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
            <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
          </svg>
            Home
          </a>

          <a href="{{route('areageral.index')}}" class="navbar-brand d-flex align-items-center">
            <svg width="40" height="40" viewBox="0 0 20 20" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
              <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
              <circle cx="3.5" cy="5.5" r=".5"/>
              <circle cx="3.5" cy="8" r=".5"/>
              <circle cx="3.5" cy="10.5" r=".5"/>
            </svg>
              Area Geral
            </a>
         

            <a href="{{route('areaadmin.index')}}" class="navbar-brand d-flex align-items-center">
              <svg width="40" height="40" viewBox="0 0 20 20" class="bi bi-clipboard-data" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
              </svg>
                Area Administrativa
              </a>
    
          @guest
          <a href="{{ route('login') }}" class="navbar-brand d-flex align-items-center">
            <svg  width="40" height="40" viewBox="0 0 20 20" class="bi bi-door-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M1 15.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM11.5 2H11V1h.5A1.5 1.5 0 0 1 13 2.5V15h-1V2.5a.5.5 0 0 0-.5-.5z"/>
              <path fill-rule="evenodd" d="M10.828.122A.5.5 0 0 1 11 .5V15h-1V1.077l-6 .857V15H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117z"/>
              <path d="M8 9c0 .552.224 1 .5 1s.5-.448.5-1-.224-1-.5-1-.5.448-.5 1z"/>
            </svg>
             
              {{ __('Login') }}
          </a>
 
          @if (Route::has('register'))
            
          @endif
      @else
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <svg width="40" height="40" viewBox="0 0 20 20" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
          <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg>
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
          
      @endguest

        </div>
      </div>




    </header>






  <div class="container">







  <header class="blog-header py-3">


  <div class="jumbotron p-4 p-md-5 text-bold rounded bg-dark jumbotron-with-background">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Banco de Sangue</h1>

      <p class="lead my-3">Quando você doa sangue, doa esperança para quem mais precisa!</p>
  
    </div>
  </div>

  
  @if(session('mensagem'))
  <div class="alert alert-success">
    {{session('mensagem')}}
  </div>
@endif

@yield('conteudo')

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          
          <h3 class="mb-0 d-inline-block mb-2 text-danger">ÁREA GERAL</h3>
          <div class="mb-1 text-muted"></div>
          <p class="card-text mb-auto">Relação de agendamentos cadastrados apra doação de sangue.</p>
        <a href="{{route('areageral.index')}}" class="stretched-link">Acesso</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{asset('primeiro.png')}}" class="bd-placeholder-img" width="200" height="250" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" rect width="100%" height="100%" fill="#55595c">
        </div>
      </div>
    </div>


    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
         
          <h3 class="mb-0 d-inline-block mb-2 text-danger">ÁREA ADMINISTRATIVA</h3>
          <div class="mb-1 text-muted"></div>
          <p class="mb-auto">Cadastros e agendadmentos.</p>
        <a href="{{route('areaadmin.index')}}" class="stretched-link">Acesso</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{asset('segundo.png')}}" class="bd-placeholder-img" width="200" height="250" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" rect width="100%" height="100%" fill="#55595c">
        </div>
      </div>
    </div>
  </div>
</div>


<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <P>Images made on<a href="canva.com">Canva</a></P>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
</body>
</html>
