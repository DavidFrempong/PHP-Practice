<?php

class Bmw extends Car{

    public $company = "BMW";

    public function __construct($name, $doors, $color, $price) {
        $this->name = $name;
        $this->doors = $doors;
        $this->color = $color;
        $this->price = $price;
    }

    public function price(){
        echo "<h3>The price of the {$this->company} {$this->name} is {$this->price} USD.</h3>";
    }

}


?>