<?php

// include "Car.php";
include "Tire.php";

// $car1 = new Car("BMW",170);
// $car2 = new Car("Volvo",69);
// $car1->increaseMileage(100);
// Car::$describe;
// Car::makeNoise();
// echo "<br>";

$tire1 = new Tire("69inches", "winter","good");
echo $tire1->size." ".$tire1->type;
?>