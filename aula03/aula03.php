<?php
require_once "Caneta2.php";

$c1 = new Caneta();
$c1->modelo = "compactor 07";
$c1->cor = "azul";
print_r($c1);
$c1->tampar();
echo '<br>';
print_r($c1);
?>