@extends('principal')

@section('conteudo')
<div class="container">

    <h1 class="mx-auto" style="width: 200px;" >Produtos</h1>


    <table class="table table-bordered table-sm">
    <thead class="bg-info">
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Unidade</th>
    </tr>
</thead>

<tbody>

  <!--Tratar quando for exibir por id-->

    @foreach ($produtos as $aux)

        <tr>
        <td>{{$aux['id']}}</td>
        <td>{{$aux['nome']}}</td>
        <td>{{$aux['un']}}</td>
        </tr>    
    
    @endforeach

</tbody>
</table>

</div>
@endsection