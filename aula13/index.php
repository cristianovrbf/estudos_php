<?php
echo "<pre>";
require_once 'Animals.php';
require_once 'Mammal.php';
require_once 'Wolf.php';
require_once 'Dog.php';

$m = new Mammal();
$m->makeSound();
$w = new Wolf();
$w->makeSound();
$d = new Dog();
$d->makeSound();

$d->reactToCall("came here son");
$d->reactToCall("i gonna catch you");
$d->reactToTime(11, 45);
$d->reactToTime(16, 00);
$d->reactToTime(21, 53);
$d->reactToOwner(true);
$d->reactToOwner(false);
$d->reactToWeightAndAge(12.5, 2);
$d->reactToWeightAndAge(4.5, 17);
?>