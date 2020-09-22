<?php

namespace App\Database;


use PDO;


class AdapterSQLite implements AdapterInterface {

    public function open()
    {
        $dbfile =  "../App/Database/database.sqlite";
        $dbuser = "";
        $dbpassword = "";
        $dbhost = "";

        $strConnection = "sqlite:" . $dbfile;

        $connection = new PDO($strConnection, $dbuser, $dbpassword);

        return $connection;
    }

    public function close()
    {
    }

    public function insertProdutos($connection){
        return $connection->query("SELECT * FROM estados");
    }

    public function getEstados($connection)
    {
        return $connection->query("SELECT * FROM estados");
        
    }

    public function getCidades($connection)
    {
        return $connection->query("SELECT * FROM cidades");
    }

    public function getProdutos($connection)
    {
        
        return $connection->query("SELECT * FROM produtos");
    }
}