<?php
abstract class Vehicle {
	public $brand;
	protected $milage = 0;
	
	function __construct($brand){
		$this->brand = $brand;
		echo $this->brand." is cool.";		
	}
	abstract static function makeNoise();
	public function getMilage(){
		return $this->milage;
	}
}
?>
