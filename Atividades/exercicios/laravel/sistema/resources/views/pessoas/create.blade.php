@extends ('principal')

@section('conteudo')

<form  action="{{route('produtos.store')}}" method="post">
@csrf
    <div class="form-group  mx-sm-3 mb-2">
  
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control">
    </div>

    <div class="form-group mx-sm-3 mb-2">
        <label for="un">Unidade:</label>
        <select name="un" id="un" class="form-control">
            <option>Kg</option>
            <option>g</option>
            <option>l</option>
            <option>m</option>
            <option>pç</option>
          </select>
    </div>

    <button type="submit" class="btn btn-primary  mx-sm-3 mb-2">Inserir</button>
    <button type="reset" class="btn btn-primary   mx-sm-3 mb-2">Limpar</button>




    
    </form>

@endsection