<?php


    //Configuração: 
    $dbfile = "./db/database.sqlite";
    $dbuser = "";
    $dbpassword = "";
    $dbhost = "";

    //string de conexão - '.' concatenar
    $strConnection = "sqlite:" . $dbfile;

    $connection = new PDO($strConnection, $dbuser, $dbpassword);

   // $sql="DROP TABLE produtos";

   $sql= "CREATE TABLE database.produtos(
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nome VARCHAR(100) NOT NULL,
        un VARCHAR(3) NOT NULL
       )";
    
    $connection->exec($sql);
   

    //var_dump($connection);
