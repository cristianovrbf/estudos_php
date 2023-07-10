<?php
require_once 'Mammal.php';
class Dog extends Mammal{
    public function hideBone(){
        echo "<br>Hiding bone...";
    }
    public function wagTail(){
        echo "<br>Tail waging...";
    }
}
?>