<?php
include_once "Vehicle.php";
class Train extends Vehicle
{
    public $trackGauge;
    
    public function __construct($brand,$trackGauge, $mileage) {
        $this->brand = $brand;
        $this->mileage = $mileage;
        $this->trackGauge = $trackGauge;
    }

    static function makeNoise(){
        echo "CHOO, CHOO"."<Br>";
    }
}   

?>