<?php

class Train{

    function __construct(
        public $brand,
        public $trackGauge,
        private $mileage
    ){}
    function __destruct(){
        echo $this->brand." is dead at ".$this->mileage."<Br>";
    }
    public function increaseMileage($amount){
        $this->mileage = $this->mileage + $amount;
    }
    static function makeNoise(){
        echo "CHOO, CHOO"."<Br>";
    }
}   

?>