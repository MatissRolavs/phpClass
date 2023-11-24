<?php

class Bird {
    public $name;
    private $age;

    public function __construct($cName,$cAge){
        $this->name = $cName;
        $this->age = $cAge;
    }

    public function __destruct(){
        echo $this->name. " ir miris" ."<br>";
    }

    public function fly(){
        echo "Lido prom putnin " . $this->name;
    }
}

?>