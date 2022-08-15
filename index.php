<?php

require ("classes/car.php");
require ("classes/bmw.php");
require ("classes/benz.php");
require ("classes/inventory.php");

$car1 = new Bmw ("i8", 4, "Blue", "50,000", new Inventory);
// $car2 = new Benz ("S Class", 2, "Black", "70,000");

// $car1->statement();
$car1->price();
// foreach(Car::$states as $state){
//   echo "<h1>{$state}</h1>";
// }

$car1->states();

// echo "<br>";

// $car2->statement();
// $car2->price();

?>