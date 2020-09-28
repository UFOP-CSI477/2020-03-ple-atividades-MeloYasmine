<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="http://www.w3.org/2000/svg">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



    
    <title>Sistema de Vendas</title>
</head>
<body>

        <div class="container-fluid">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
                <a class="navbar-brand logo" href="{{route('principal')}}">

                    <img src="http://www.w3.org/2000/svg" alt="Logo">
                    SisVen
                </a>

                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="{{route('principal')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('estados.index')}}">Estados</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('produtos.index')}}">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="/">Cidades</a></li>
                    <li class="nav-item"><a class="nav-link" href="/">Vendas</a></li>
                </ul>
            
            </nav>
        </div>

        <!--Contéudo da página-->
        @yield('conteudo')




</body>
</html>
