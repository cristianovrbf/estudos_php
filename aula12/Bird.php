<?php
require_once 'Animal.php';
class Bird extends Animal{
    protected $featherColor;
    
    public function move(){
        echo "<br>Flying";
    }

    public function eat(){
        echo "<br>Eating fruits";        
    }

    public function sound(){
        echo "<br>Bird sound";
    }

    public function makeNest(){
        echo "<br>Making nest";
    }

    /**
     * Get the value of featherColor
     */ 
    public function getFeatherColor()
    {
        return $this->featherColor;
    }

    /**
     * Set the value of featherColor
     *
     * @return  self
     */ 
    public function setFeatherColor($featherColor)
    {
        $this->featherColor = $featherColor;

        return $this;
    }
}
?>