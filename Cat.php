<?php
class Cat{
	private $age = 0;
	public $name;
	function birthday(){
		$this->age+=1;
	}
	static function moew(){
		echo"moew";
	}
}
?>
