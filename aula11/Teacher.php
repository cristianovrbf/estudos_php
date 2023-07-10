<?php
require_once 'Person.php';
class Teacher extends Person{
    private $speciality;
    private $salary;

    public function reciveRaise($value){
        $currentSalary = $this->getSalary();
        $newSalary = $currentSalary + $value;
        $this->setSalary($newSalary);
    }

    /**
     * Get the value of speciality
     */ 
    public function getSpeciality()
    {
        return $this->speciality;
    }

    /**
     * Set the value of speciality
     *
     * @return  self
     */ 
    public function setSpeciality($speciality)
    {
        $this->speciality = $speciality;

        return $this;
    }

    /**
     * Get the value of salary
     */ 
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     *
     * @return  self
     */ 
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }
}
?>