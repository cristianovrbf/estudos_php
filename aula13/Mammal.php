<?php
require_once 'Animals.php';
class Mammal extends Animals{
    protected $furColor;

    public function makeSound(){
        echo "<br>Mammal sounds";
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