<?php

class Car{
    public $brand;
    private $mileage;
    public static $describe = "masinai ir 4 riepas";

    public function __construct($b, $m){
        $this->brand = $b;
        $this->mileage = $m;
    }
    public function __destruct(){
       echo $this->brand ." is dead at mileage ". $this->mileage. "<br>";
    }
    public function increaseMileage($amount){
        $this->mileage = $this->mileage + $amount;
    }
    public static function makeNoise(){
        echo "Beep, beep!";
    }
}

?>