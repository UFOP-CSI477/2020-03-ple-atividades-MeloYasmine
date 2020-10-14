<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <script src="{{asset('java.js')}}"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="{{asset('estilo.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
   
    <link href="blog.css" rel="stylesheet">
    <title>Musica</title>
  </head>
  <body>
    <header>

      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
        <a href="/" class="navbar-brand d-flex align-items-center">
          <svg  width="40" height="40" viewBox="0 0 20 20" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
            <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
          </svg>
            Home
          </a>

          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg width="40" height="40" viewBox="0 0 20 20" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
              <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
              <circle cx="3.5" cy="5.5" r=".5"/>
              <circle cx="3.5" cy="8" r=".5"/>
              <circle cx="3.5" cy="10.5" r=".5"/>
            </svg>
              Sobre
            </a>
         

      <!-- Authentication Links -->
      @guest
      <a href="{{ route('login') }}" class="navbar-brand d-flex align-items-right">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-headphones" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 3a5 5 0 0 0-5 5v4.5H2V8a6 6 0 1 1 12 0v4.5h-1V8a5 5 0 0 0-5-5z"/>
          <path d="M11 10a1 1 0 0 1 1-1h2v4a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3zm-6 0a1 1 0 0 0-1-1H2v4a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-3z"/>
        </svg>
          Login
      </a>
      @if (Route::has('register'))
          <a href="{{ route('register') }}" class="navbar-brand d-flex align-items-right">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
              Register
          </a>
      @endif
  @else
      <a class="nav-item dropdown">
     
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            @if(Auth::user()->foto != null)
                  
            <img src="{{asset('storage/users/'.Auth::user()->foto)}}"  style="max-width: 50px; border-radius: 10px; border-style:groove;"> 
      
          @endif
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
      </a>
  @endguest
    

        </div>
      </div>




    </header>






  <div class="container" style="margin-top: 80pt">





  
  @if(session('mensagem'))
  <div class="alert alert-success">
    {{session('mensagem')}}
  </div>
@endif

@yield('conteudo')

  <div class="row mb-2">

    <div class="col-md-3">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            
            <h3 class="mb-0 d-inline-block mb-2 text-dark">MUSICAS</h3>
     
          <a href="{{route('musicas.index')}}" class="stretched-link">
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="{{asset('2.png')}}" class="bd-placeholder-img" width="255" height="250" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" rect width="100%" height="100%" fill="#55595c">
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            
            <h3 class="mb-0 d-inline-block mb-2 text-dark">ÁREA GERAL</h3>
    
          <a href="{{route('users.create')}}" class="stretched-link">
          </div>
          <div class="col-auto d-none d-lg-block">
            <img href="{{route('users.create')}}" src="{{asset('5.png')}}" class="bd-placeholder-img" width="255" height="250" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" rect width="100%" height="100%" fill="#55595c">
          </a>
          </div>
        
        </div>
      </div>

    
      <div class="col-md-3">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            
            <h3 class="mb-0 d-inline-block mb-2 text-dark">MEU PERFIL</h3>
  
            @if(Auth::user())
               <a href="{{route('users.show', Auth::user()->id)}}" class="stretched-link">
            

            @else
               <a href="{{route('register')}}" class="stretched-link">
            @endif

          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="{{asset('3.png')}}" class="bd-placeholder-img" width="255" height="250" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" rect width="100%" height="100%" fill="#55595c">
            </a>
          </div>
        </div>
      </div>
    
      

      <div class="col-md-3">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            
            <h3 class="mb-0 d-inline-block mb-2 text-dark">PLAYLISTS</h3>
  
          <a href="{{route('playlists.index')}}" class="stretched-link">
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="{{asset('4.png')}}" class="bd-placeholder-img" width="255" height="250" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" rect width="100%" height="100%" fill="#55595c">
          </a>
          </div>
        </div>
      </div>
  




    
</div>


</body>
@if(Auth::user())
  @if(Auth::user()->tipo == 'A')
    <footer class="blog-footer">
      <a href="{{route('musicas.create')}}">Area Admin</a>
    </p>
    </footer>
  @endif
@endif
</html>
