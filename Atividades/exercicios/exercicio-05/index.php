<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8>">
    <meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">


  
    <title>Cadastro</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="./exercicio-04/validar.js"></script>
    <link rel="stylesheet" href="./formulario.css">



</head>

<body>

    <div class="flex">
            <h1>Cadastro de usuário</h1>

    </div>

    <form action="validar.php" method="post" name="frm">
        <div class="row">


          <div class="col">
              <div>
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required> 
                <br>
  
                <label for="senha">Senha: </label>
                <input type="password" name="senha" name="senha" id="senha" class="form-control">



            </div>
        </div>



          <div class="col">            
                <label for="email">E-mail: </label>
                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">    
                <br>
                <label for="dataNasc">Data de nascimento:</label>
                <input type="date" name="dataNasc" name="dataNasc" id="dataNasc" class="form-control">

         
            </div>


        </div>
        <br>
        <div class="flex">
            <input type="submit" name="btnAcessar" value="Confirmar" class="btn btn-outline-success btn-lg" onclick="vMusica()">
            <input type="submit" name="btnLimpar" value="Excluir" class="btn btn-outline-danger btn-lg">
        </div>
        
      </form>

 









</body>



</html>   
