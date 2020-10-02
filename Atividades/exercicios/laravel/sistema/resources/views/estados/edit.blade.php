@extends ('principal')

@section('conteudo')

<form  action="{{route('estados.update', $estado->id)}}" method="post">
@csrf
@method('PUT')
    <div class="form-group  mx-sm-3 mb-2">
  
        <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="{{$estado->nome}}"class="form-control">
    </div>

    <div class="form-group mx-sm-3 mb-2">
        <label for="sigla">Sigla:</label>
    <input type="text" name="sigla" id="sigla" value="{{$estado->sigla}}"class="form-control">
    </div>

    <button type="submit" class="btn btn-primary  mx-sm-3 mb-2">Atualizar</button>
    <button type="reset" class="btn btn-primary   mx-sm-3 mb-2">Limpar</button>




    
    </form>

@endsection