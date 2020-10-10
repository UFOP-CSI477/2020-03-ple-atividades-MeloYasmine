@extends('welcome')

@section('conteudo')


 

  <head>
   
    <title>Seu perfil</title>



    <!-- Custom styles for this template -->

  </head>
  <body>


    <div class="album py-1" style="margin-bottom: 100px; margin-top:100px; ">
      <div class="container">

      <h1 class="mx-auto" style="text-align:center; margin-bottom:20pt;">Seu Perfil {{$user->apelido}}</h1>


    <table class="table table-bordered table-sm">
    <thead class="bg-info">
    <tr>
    <th>Nome</th>
    <th>Apelido</th>
    <th>Sexo</th>
    <th>E-mail</th>
    <th>Data Nascimento</th>
    <th>Gênero favorito</th>
 
 
    </tr>
</thead>

<tbody>

  <!--Tratar quando for exibir por id-->

    

        <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->apelido}}</td>
        <td>    
          <option value="{{$user->sexo}}">
          @if($user->sexo == 'F')
            Feminino
          @elseif($user->sexo == 'M')
            Masculino
          @elseif($user->sexo == 'N')
            Não informado
          @endif                    
        </option>
      </td>
        <td>{{$user->email}}</td>
        <td>{{$user->data_nasc}}</td>
        <td>{{$user->genero_fav}}</td>
    
  
        </tr>    
    
    

</tbody>
</table>


<form name="frmDelete"
action="{{route('users.destroy', $user->id)}}"
method="post"
onsubmit="return confirm('Confirma a exclusão do user?')">
@csrf
@method('DELETE')
<a type="button" class="btn btn-sm btn-success mx-sm-1 mb-1" href="{{route('users.edit', $user->id)}}">Adicionar Foto</a>
<a type="button" class="btn btn-sm btn-success mx-sm-1 mb-1" href="{{route('users.edit', $user->id)}}">Atualizar Perfil</a>
<input type="submit" class="btn btn-sm btn-danger mx-sm-1 mb-1" value="Excluir">
<a type="button" class="btn btn-sm btn-info mx-sm-1 mb-1" href="{{route('users.index')}}">Voltar</a>

</form>

</div>

    </div>
  </div>

  

    </body>



@endsection