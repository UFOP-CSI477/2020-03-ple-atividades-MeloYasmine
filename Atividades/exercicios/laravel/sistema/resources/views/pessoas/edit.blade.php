@extends ('principal')

@section('conteudo')

<form  action="{{route('produtos.update', $produto->id)}}" method="post">
@csrf

@method('PUT')
    <div class="form-group  mx-sm-3 mb-2">
  
        <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="{{$produto->nome}}"class="form-control">
    </div>

    <div class="form-group mx-sm-3 mb-2">
        <label for="un">Unidade:</label>
    <input type="text" name="un" id="un" value="{{$produto->un}}"class="form-control">
    </div>

    <button type="submit" class="btn btn-primary  mx-sm-3 mb-2">Atualizar</button>
    <button type="reset" class="btn btn-primary   mx-sm-3 mb-2">Limpar</button>




    
    </form>

@endsection