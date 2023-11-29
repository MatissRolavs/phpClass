<?php

include "Car.php";
include "Tire.php";
include "Train.php";

// $car1 = new Car("BMW",170);
// $car2 = new Car("Volvo",69);
// $car1->increaseMileage(100);
// echo Car::$describe . "<Br>";
// Car::makeNoise();
// echo "<br>";

// $tire1 = new Tire("69inches", "winter","good");
// echo $tire1->size." ".$tire1->type;
// echo "<br>";

$train1 = new Train("RAILIJS", "9mm", 8000);
$train2 = new Train("neRAILIJS", "100cm", 80);

$train2->increaseMileage(240);
Train::makeNoise();
?>