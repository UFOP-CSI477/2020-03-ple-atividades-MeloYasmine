<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    
    <title>Tabela Estados</title>
</head>
<body>

    
    

  
    <div class="container">

        <h1 class="mx-auto" style="width: 200px;" >Estados</h1>


        <table class="table table-bordered table-sm">
        <thead class="bg-info">
        <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sigla</th>
        </tr>
    </thead>

    <tbody>

    <!--Tratar quando for exibir por id-->
    
        @foreach ($dados as $aux)

            <tr>
            <td>{{$aux['id']}}</td>
            <td>{{$aux['nome']}}</td>
            <td>{{$aux['sigla']}}</td>
            </tr>    
        
        @endforeach

    </tbody>
    </table>

</div>

</body>
</html>