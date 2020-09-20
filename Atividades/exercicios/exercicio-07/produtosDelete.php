<?php

require 'connection.php';

$sql= "DELETE FROM produtos";

$connection->exec($sql);
header('Location: index.php');
exit();