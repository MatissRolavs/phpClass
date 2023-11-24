<?php

include "Car.php";

$car1 = new Car("BMW",170);
$car2 = new Car("Volvo",69);
$car1->increaseMileage(100);
Car::$describe;
Car::makeNoise();
echo "<br>";
?>