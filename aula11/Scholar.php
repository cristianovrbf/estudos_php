<?php
require_once 'Student.php';
final class Scholar extends Student{
    private $discount;

    public function renewDiscount(){
        echo "<br>Your discount was renewed!";
    }

    public function monthlyPayment(){
        echo "<br>Mensal value payed with the discount! Value discounted was {$this->discount}";
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */ 
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get the value of discount
     */ 
    public function getDiscount()
    {
        return $this->discount;
    }
}
?>