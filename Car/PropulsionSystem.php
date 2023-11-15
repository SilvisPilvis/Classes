<?php
abstract class PropulsionSystem{
	function __construct(public int $power, public string $fuelType, protected float $efficiency)
	{
		
	}

	abstract function work();
}
?>