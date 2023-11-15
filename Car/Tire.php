<?php
class Tire{
	function __construct(public int $size, public float $pressure)
	{
		echo "New tire created.\n";
	}
	// public int $size;
	// public float $pressure;
}
?>