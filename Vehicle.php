<?php

abstract class Vehicle {
    public $brand;
    protected $mileage;
    static $description = "I am large and ViVi";

    public function increaseMileage($amount){
        $this->mileage = $this->mileage + $amount;
    }
    public function __destruct() {
        echo $this->brand ." is dead at mileage " . $this->mileage."<Br>";
    }
    abstract static function makeNoise();
}