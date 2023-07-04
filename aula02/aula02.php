<?php
require_once "Caneta.php";

$c1 = new Caneta();
$c1->modelo = "compactor 07";
$c1->cor = "azul";
$c1->ponta = 0.7;
$c1->carga = 85;
$c1->tampada = true;
print_r($c1);
$c1->tampar();
?>