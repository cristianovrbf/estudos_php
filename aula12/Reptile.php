<?php
require_once 'Animal.php';
class Reptile extends Animal{
    protected $scaleColor;
    
    public function move(){
        echo "<br>Crawling";
    }

    public function eat(){
        echo "<br>Eating vegetables";        
    }

    public function sound(){
        echo "<br>Reptile sounds";
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