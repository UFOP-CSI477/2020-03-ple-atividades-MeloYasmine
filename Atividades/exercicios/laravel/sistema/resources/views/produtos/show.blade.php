@extends('principal')

@section('conteudo')


<div class="container">

    <h1 class="mx-auto" style="width: 200px;">Dados do Estado</h1>


    <table class="table table-bordered table-sm">
    <thead class="bg-info">
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Unidade</th>
    </tr>
</thead>

<tbody>

        <tr>
        <td>{{$produto['id']}}</td>
        <td>{{$produto['nome']}}</td>
        <td>{{$produto['un']}}</td>
        </tr>    
   

</tbody>
</table>

<a href="{{route('produtos.edit', $produto->id)}}">Editar</a>
<a href="{{route('produtos.index')}}">Voltar</a>

<form name="frmDelete"
action="{{route('produtos.destroy', $produto->id)}}"
method="post">

@csrf
@method('DELETE')
<input type="submit" value="Excluir">
</form>
</div>
    
@endsection
