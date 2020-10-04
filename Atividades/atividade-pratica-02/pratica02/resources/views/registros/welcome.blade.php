@extends('paginainicial')

@section('conteudo')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>Manutenções por equipamento</title>
</head>
<body>

    @foreach($container as $chave => $cont)
    <h2>Equipamento: {{$chave}}</h2>
    <table class= "table table-bordered table-hover table-striped">
    
    <thead  class="thead-dark">
        <tr>

        <th>ID</th>

        <th>Descrição</th>

        <th>Equipamentos</th>

        <th>Usuario</th>

        <th>Data limite</th>
        
        </tr>
    </thead>

    <tbody>
        @foreach($cont as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->descricao}}</td>
            <td>{{$c->equipamento->name}}</td>
            <td>{{$c->user->name}}</td>
            <td>{{$c->datalimite}}</td>
        </tr>
        @endforeach
    </tbody>
    
    <tr>
    
        <td colspan="3">Total</td>
        <td colspan="2">{{sizeof($cont)}}</td>
    </tr>

    </table>

    @endforeach 
    
</body>

@endsection