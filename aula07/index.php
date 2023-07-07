<?php
require_once 'Lutador.php';
require_once 'Luta.php';
$lutadores = array();
$l1 = new Lutador('Pretty Boy','França', 31, 1.75,68.9, 11, 2 ,1);
$l2 = new Lutador('Putscript','Brasil',29, 1.68,57.8, 14, 2, 3);
$l3 = new Lutador('SnapShadow','EUA',35, 1.65, 80.9, 12, 2, 1);
$l4 = new Lutador('Dead Code','Austrália', 28, 1.93, 81.6, 13, 0 ,2);
$l5 = new Lutador('Ufocobol','Brasil', 37, 1.70, 119.3, 5, 4 ,3);
$l6 = new Lutador('Nerdaard','EUA', 30, 1.81, 105.7, 12, 2 ,4);
array_push($lutadores, $l1, $l2, $l3, $l4, $l5, $l6);
$UFC01 = new Luta();

foreach($lutadores as $lutador){
    $lutador->apresentar();
}

for ($i = 0; $i < 6; $i++){
    if($i < 5){
        $UFC01->marcarLuta($lutadores[$i],$lutadores[$i+1]);
        $UFC01->lutar();
    }
}

foreach($lutadores as $lutador){
    $lutador->apresentar();
}


?>