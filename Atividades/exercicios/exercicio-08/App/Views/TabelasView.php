<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Estados e Produtos</title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>

<body>


    
    <h1 class="page-header">Tabela Estados</h1>
    <table class="table table-sm table-bordered">
        
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Sigla</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while ($e = $estados->fetch()) {
            echo "<tr>
            <td>" . $e["id"] . "</td>
            <td>" . $e["nome"] . "</td>
            <td>" . $e["sigla"] . " </td>
            </tr>";
            }
        ?>
    </tbody>
    </table>

    <h2 class="page-header">Tabela Cidades</h2>
    <table class="table table-sm table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Estado_id</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while ($c = $cidades->fetch()) {
                echo "<tr>
                <td>" . $p["id"] . "</td>
                <td>" . $p["nome"] . "</td>
                <td>" . $p["estado_id"] . " </td>
                </tr>";
                }
        ?>
    </tbody>
    </table>

    <h3 class="page-header">Tabela Produtos</h3>
    <table class="table table-sm table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Unidade</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while ($p = $produtos->fetch()) {
            echo "<tr>
            <td>" . $p["id"] . "</td>
            <td>" . $p["nome"] . "</td>
            <td>" . $p["un"] . " </td>
            </tr>";
            }
        ?>
    </tbody>
    </table>

</body>

</html>