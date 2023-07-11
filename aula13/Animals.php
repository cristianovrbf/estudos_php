<?php
abstract class Animals{
    protected $weight;
    protected $agr;
    protected $members;

    abstract public function makeSound();

    /**
     * Get the value of members
     */ 
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Set the value of members
     *
     * @return  self
     */ 
    public function setMembers($members)
    {
        $this->members = $members;

        return $this;
    }

    /**
     * Get the value of agr
     */ 
    public function getAgr()
    {
        return $this->agr;
    }

    /**
     * Set the value of agr
     *
     * @return  self
     */ 
    public function setAgr($agr)
    {
        $this->agr = $agr;

        return $this;
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }
}
?>