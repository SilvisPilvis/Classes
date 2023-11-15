<?php
include_once("./Car.php");

enum EngineType
{
    case Gas;
    case Hybrid;
    case Electric;
    case Combustion;
}

$myCar = new Car('Nissan', 'Blue', 1999, 198.35, 18, 2.0, EngineType::Combustion);
echo"<pre>";
print_r($myCar);
// echo $myCar."\n";
echo $myCar->move();
echo"</pre>";
?>
<style>
	pre{
		font-size: 20px;
	}
</style>
