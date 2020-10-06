@extends ('principal')

@section('conteudo')

<form  action="{{route('cidades.store')}}" method="post">
@csrf
    <div class="form-group  mx-sm-3 mb-2">
  
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control">
    </div>

    <div class="form-group mx-sm-3 mb-2">
        <label for="estado_id">Estado:</label>
        <select name="estado_id" id="estado_id" class="form-control">
            @foreach ($estados as $estado)
        <option value="{{$estado->id}}">{{$estado->nome}}</option>

            @endforeach
                
          </select>
    </div>

    <button type="submit" class="btn btn-primary  mx-sm-3 mb-2">Inserir</button>
    <button type="reset" class="btn btn-primary   mx-sm-3 mb-2">Limpar</button>




    
    </form>

@endsection