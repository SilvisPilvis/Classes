<?php
include_once('Car.php');
include_once('Cat.php');
include_once('Train.php');
echo "Var parādīt kā izskatās interneta pārlūka programmā.</br>";
$car = new Car("Nissan");
// $car->makeNoise();
Car::makeNoise();
Train::makeNoise();
$car->makeNoise();
Cat::moew();
$train = new Train();
echo $train->getMileage();
?>
