<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>Inserir produtos</title>
</head>
<body>

    <form class="form-inline" action="produtosControllerInsert.php" method="post">
    <div class="form-group mb-2">
  
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control">
    </div>

    <div class="form-group mx-sm-3 mb-2">
        <label for="unidade">Unidade:</label>
        <input type="text" name="unidade" id="unidade" class="form-control">
    </div>

    <button type="submit" class="btn btn-success mb-2">Inserir</button>




    
    </form>
    
</body>
</html>