<?php
require_once 'Mammal.php';
class Kangaroo extends Mammal{
    public function usingBag(){
        echo "<br>Using the bag...";
    }
    public function move(){
        echo "<br>Jumping...";
    }
}
?>