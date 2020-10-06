@extends('principal')

@section('conteudo')


<div class="container">

    <h1 class="mx-auto" style="width: 200px;">Dados da cidade</h1>


    <table class="table table-bordered table-sm">
    <thead class="bg-info">
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Estado</th>
    <th>Sigla estado</th>
    </tr>
</thead>

<tbody>

        <tr>
        <td>{{$cidade->id}}</td>
        <td>{{$cidade->nome}}</td>
        <td>{{$cidade->estado->nome}}</td>
        <td>{{$cidade->estado->sigla}}</td>
        </tr>    
   

</tbody>
</table>

<a href="{{route('cidades.edit', $cidade->id)}}">Editar</a>
<a href="{{route('cidades.index')}}">Voltar</a>

<form name="frmDelete"
action="{{route('cidades.destroy', $cidade->id)}}"
method="post">

@csrf
@method('DELETE')
<input type="submit" value="Excluir">
</form>
</div>
    
@endsection
