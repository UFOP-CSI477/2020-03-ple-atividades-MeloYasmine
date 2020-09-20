<?php



require 'connection.php';



$nome = $_POST['nome'];
$unidade = $_POST['unidade'];

if(empty($nome || $unidade)){
    echo '<div><a href="produtosViewInsert.php">Voltar<a/></div>';
    die('Informe os dados corretamente');
}
try{
//inserir
$connection->beginTransaction();

$stmt = $connection->prepare("INSERT INTO produtos (nome, un) VALUES(:nome, :unidade)");

//vincular valores aos parâmetros
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':unidade', $unidade);

$stmt->execute();

$connection->commit();

//nao pode existir execução após comando
header('Location: index.php');
exit();
}catch(Exception $p){
    $connection->rollBack();
    die("Erro ao inserir o estado: " .$p->getMessage());

}


