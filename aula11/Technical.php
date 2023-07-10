<?php
require_once 'Student.php';
final class Technical extends Student{
    private $profissionalRegister;

    public function pratice(){
        echo "<br>Praticing...";
    }

    /**
     * Get the value of profissionalRegister
     */ 
    public function getProfissionalRegister()
    {
        return $this->profissionalRegister;
    }

    /**
     * Set the value of profissionalRegister
     *
     * @return  self
     */ 
    public function setProfissionalRegister($profissionalRegister)
    {
        $this->profissionalRegister = $profissionalRegister;

        return $this;
    }
}
?>