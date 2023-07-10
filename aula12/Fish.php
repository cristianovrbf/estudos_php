<?php
require_once 'Animal.php';
class Fish extends Animal{
    protected $scaleColor;

    public function move(){
        echo "<br>Swimming";
    }

    public function eat(){
        echo "<br>Eating substances";        
    }

    public function sound(){
        echo "<br>Fish don't make sounds";
    }
    
    public function bubbles(){
        echo "<br>Making Bubbles";
    }

    /**
     * Get the value of scaleColor
     */ 
    public function getScaleColor()
    {
        return $this->scaleColor;
    }

    /**
     * Set the value of scaleColor
     *
     * @return  self
     */ 
    public function setScaleColor($scaleColor)
    {
        $this->scaleColor = $scaleColor;

        return $this;
    }
}
?>