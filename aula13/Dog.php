<?php
require_once "Wolf.php";
class Dog extends Wolf{
    public function makeSound(){
        echo "<br>Au! Au! Au!";
    }

    public function reactToCall($call){
        if($call == "came here son" || $call == "pick your food"){
            echo "<br>Wag tail and bark...";
        }else{
            echo "<br>Growl!!!";
        }
    }

    public function reactToTime($hour, $minutes){
        if($hour < 12){
            echo "<br>Wag tail...";
        }elseif($hour < 18){
            echo "<br>Wag tail and bark...";
        }else{
            echo "<br>Ignore!";
        }
    }

    public function reactToOwner($isOwner){
        if($isOwner){
            echo "<br>Wag tail...";
        }else{
            echo "<br>Growl and bark!!!";
        }
    }
    
    public function reactToWeightAndAge($weight, $age){
        if($age < 5){
            if($weight < 10){
                echo "<br>Wag tail...";
            }else{
                echo "<br>Bark!";
            }
        }else{
            if($weight < 10){
                echo "<br>Growl!!!";
            }else{
                echo "<br>Ignore!";
            }
        }
    }
}
?>