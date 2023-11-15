<?php
include_once("./Car.php");

enum EngineType
{
    case Gas;
    case Hybrid;
    case Electric;
    case Combustion;
}

echo"<pre>";
$myCar = new Car('Nissan', 'Blue', 1999, 198.35, 18, 2.0, EngineType::Combustion);
print_r($myCar);
$myCar->getEngineSpecification();
echo $myCar->move();
echo"</pre>";
?>
<style>
	pre{
		font-size: 20px;
	}
</style>
