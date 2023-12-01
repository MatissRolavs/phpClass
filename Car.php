<?php
include_once "Vehicle.php";
class Car extends Vehicle
{   
    public function __construct($brand, $mileage) {
        $this->brand = $brand;
        $this->mileage = $mileage;
    }

    public static $describe = "masinai ir 4 riepas";

    public static function makeNoise(){
        echo "Beep, beep!";
    }
}

?>