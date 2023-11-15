<?php
abstract class PropulsionSystem{
	function __construct(public int $power, public string $fuelType, protected int $efficiency)
	{
		
	}

	abstract function work();
}
?>