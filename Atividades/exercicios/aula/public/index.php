<?php

require '../App/Models/Estado.php';

use App\Models\Estado;

$estado = new Estado(1, "Minas Gerais", "MG");
var_dump($estado);
