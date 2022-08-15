<?php

class Car
{

    public $doors = 4;
    public $color = "Black";
    private $location = "Sanford, Florida";
    public static $city = "Miami, Florida";
    public static $states = [
    "Florida,
     Georgia,
    Alabama,
       New York City"
    ];


    public function statement()
    {

        echo "<h1>The {$this->company} {$this->name} is a beautiful car. It has {$this->doors} doors and it's color is {$this->color}. It costs $ {$this->price}.</h1>";

        $this->store();
    }

    private function store()
    {
        echo "Sold in {$this->location}. Come in today!";
    }

    public static function city() {
        return "Miami, FL";
    }

    public static function states(){
        foreach(self::$states as $state){
            echo "<h1>{$state}</h1>";
          }
    }
}
