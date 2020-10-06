@extends('principal')

@section('conteudo')

<a href="{{route('cidades.create')}}">Cadastrar cidade</a>

<div class="container">

    <h1 class="mx-auto" style="width: 200px;" >Cidades</h1>


    <table class="table table-bordered table-sm">
    <thead class="bg-info">
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Estado</th>
    <th>Exibir</th>
    </tr>
</thead>

<tbody>

  <!--Tratar quando for exibir por id-->

    @foreach ($cidades as $aux)

        <tr>
        <td>{{$aux->id}}</td>
        <td>{{$aux->nome}}</td>
        <td>{{$aux->estado->nome}}</td>
        <td><a href="{{route('cidades.show', $aux->id)}}">Exibir</a></td> 
        </tr>    
    
    @endforeach

</tbody>
</table>

</div>
@endsection