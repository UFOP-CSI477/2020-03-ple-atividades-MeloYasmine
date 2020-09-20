<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     <link rel="stylesheet" href="tabela.css">

    <title>Lista de estados</title>
</head>
<body>

<table class="table table-bordered table-sm">
<caption>Tabela estados</caption>
  <thead class="thead-dark">
    <tr>
      <th>Índice</th>
      <th>Estado</th>
    </tr>
  </thead>

  <tbody>

    <?php
    $i = 1;
        while($e = $estados->fetch()){
            echo "<tr>" 
            
            ."<td>" .$e[ "id"] ."</td>"
            ."<td>" .$e["nome"]. "</td>" .
            
            "</tr>";

         
        }
        
    ?>

    </tbody>
    </table>





</body>
</html>