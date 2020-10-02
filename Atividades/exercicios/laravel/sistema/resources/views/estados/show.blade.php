@extends('principal')

@section('conteudo')


<div class="container">

    <h1 class="mx-auto" style="width: 200px;">Dados do Estado</h1>


    <table class="table table-bordered table-sm">
    <thead class="bg-info">
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Sigla</th>
    </tr>
</thead>

<tbody>

        <tr>
        <td>{{$estado['id']}}</td>
        <td>{{$estado['nome']}}</td>
        <td>{{$estado['sigla']}}</td>
        </tr>    
   

</tbody>
</table>
<a href="{{route('estados.edit', $estado->id)}}">Editar</a>
<a href="{{route('estados.index')}}">Voltar</a>

<form name="frmDelete"
action="{{route('estados.destroy', $estado->id)}}"
method="post"
onsubmit="return confirm('Confirma a exclusão do estado?')">



@csrf
@method('DELETE')
<input type="submit" value="Excluir">
</form>
</div>
    
@endsection
