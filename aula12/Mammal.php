<?php
require_once 'Animal.php';
class Mammal extends Animal{
    protected $furColor;

    public function move(){
        echo "<br>Running";
    }

    public function eat(){
        echo "<br>suckling";        
    }

    public function sound(){
        echo "<br>Mammal sound";
    }

    /**
     * Get the value of furColor
     */ 
    public function getFurColor()
    {
        return $this->furColor;
    }

    /**
     * Set the value of furColor
     *
     * @return  self
     */ 
    public function setFurColor($furColor)
    {
        $this->furColor = $furColor;

        return $this;
    }
}
?>