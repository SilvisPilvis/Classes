<?php
include_once('Car.php');
include_once('Cat.php');
echo "Var parādīt kā izskatās interneta pārlūka programmā.</br>";
// $car = new Car("Nissan");
// $car->makeNoise();
$Mincis = new Cat();
$Mincis->name = "Mincis";
$Bincis = new Cat();
$Bincis->name = "Bincis";
Cat::moew();
Car::makeNoise();
?>
