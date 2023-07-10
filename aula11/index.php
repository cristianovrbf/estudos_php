<?php
require_once 'Scholar.php';
echo '<pre>';
$s1 = new Scholar();
$s1->setName("cristiano");
$s1->setAge(20);
$s1->setGenre("M");
$s1->setRegistration(2020101008);
$s1->setCourse("Ciências da Computação");
$s1->setDiscount(530.00);
print_r($s1);
$s1->monthlyPayment();
?>