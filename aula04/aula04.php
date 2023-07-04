<?php
require_once "Caneta3.php";

$c1 = new Caneta("Compactor", "vermelha", 0.7);
$c2 = new Caneta("BIC", "azul", 0.5);
print_r($c1);
echo "<br>";
print_r($c2);
// $c1->setModelo("BIC");
// $c1->setPonta(0.5);
// echo "<br>";
// print_r($c1);
// echo "<br>";
// echo "eu tenho uma caneta de modelo: {$c1->getModelo()} e de ponta: {$c1->getPonta()}";
?>