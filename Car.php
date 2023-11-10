<?php
class Car {
	// protected $brand;
	public $brand;
	public function __construct($brand) {
		$this->brand = $brand;
		echo $this->brand.' is cool. </br>';
	}
	public function __destruct(){
		echo $this->brand.' is dead. </br>';
	}
	
	static function makeNoise(){
		echo "Beep, beep!!</br>";
	}
}
?>
