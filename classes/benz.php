<?php

class Benz extends Car{

    public $company = "Benz";

    public function __construct($name, $doors, $color, $price, Inventory $inventory) {
        $this->name = $name;
        $this->doors = $doors;
        $this->color = $color;
        $this->price = $price;
        $this->inventory = $inventory;
    }

    public function price(){
        echo "<h3>The price of the {$this->company} {$this->name} is {$this->price} pounds.</h3>";
   
        echo $this->inventory->carTotal($this->company);
    }

}


?>