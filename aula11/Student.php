<?php
require_once 'Person.php';
class Student extends Person{
    private $registration;
    private $course;

    public function monthlyPayment(){
        echo "<br>Mensal value payed!";
    }

    /**
     * Get the value of registration
     */ 
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * Set the value of registration
     *
     * @return  self
     */ 
    public function setRegistration($registration)
    {
        $this->registration = $registration;

        return $this;
    }

    /**
     * Get the value of course
     */ 
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set the value of course
     *
     * @return  self
     */ 
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }
}
?>