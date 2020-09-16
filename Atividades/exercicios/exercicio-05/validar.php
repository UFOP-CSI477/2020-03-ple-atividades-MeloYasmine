<?php

    //echo "POST";
    //var_dump($_POST);

    $user = $_POST['nome'];
    $pass = $_POST['senha'];

    if($user == "admin" && $pass =="123456"){
        echo "Olá, $user!";
    }else{
        echo "<h1>Usuário e/ou senha inválidos</h1>";
    }

    echo '<a href="index.php">Voltar</a>';