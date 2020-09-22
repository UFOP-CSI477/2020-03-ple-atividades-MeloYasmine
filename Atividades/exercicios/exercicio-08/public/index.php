<?php


require '../vendor/autoload.php';

use App\Models\Estado;
use App\Models\Produto;
use App\Database\Connection;
use App\Database\AdapterSQLite;
use App\Views\dadosView;



//$estado = new Estado(1, "Minas Gerais", "MG");

//var_dump($estado);

//$connection = new Connection(new AdapterSQLite());
//var_dump($connection);



//$connection->getAdapter()->open();

$conn = new Connection(new AdapterSQLite());

//conexão aberta
$connection = $conn->getAdapter()->open();

//recuperando dados com a conexão
$estados = $conn->getAdapter()->getEstados($connection);
$cidades = $conn->getAdapter()->getCidades($connection);
$produtos = $conn->getAdapter()->getProdutos($connection);

require_once "../App/Views/TabelasView.php";
