<?php
include_once("./ElectricMotor.php");
include_once("./ICEngine.php");
include_once("./Tire.php");
class Car{
	private $tires = [];
	private $propSystem = [];
	function __construct(public string $brand, public string $color, private int $releaseYear, private float $mileage, public int $tireSize, public float $tirePressure, public EngineType $engineType)
	{
		switch($engineType){
			case EngineType::Electric:
				$this->propSystem[] = new ElectricMotor(780, "Electricity", 0.9);
				break;
			case EngineType::Hybrid:
				$this->propSystem[] = new ElectricMotor(780, "Electricity", 0.9);
				$this->propSystem[] = new ICEngine(780, "Gasoline", 0.4);
                $this->propSystem[1]->setEngineSpecs(2600, 6);
				break;
			case EngineType::Combustion:
				$this->propSystem[] = new ICEngine(780, "Gasoline", 0.4);
                $this->propSystem[0]->setEngineSpecs(2600, 6);
				break;
			case EngineType::Gas:
				$this->propSystem[0] = new ICEngine(780, "Gasoline", 0.4);
				break;
			default:
				echo "No type selected :(\n";
				break;
		}
		for($i=0; $i<4; $i++){
			$this->tires[] = new Tire(18, 200);
		}
	}
	function move(){
        switch($this->engineType){
			case EngineType::Electric:
				$this->propSystem[0]->work();
				break;
			case EngineType::Hybrid:
				$this->propSystem[0]->work();
				$this->propSystem[1]->work();
				break;
			case EngineType::Combustion:
				$this->propSystem[0]->work();
				break;
			case EngineType::Gas:
				$this->propSystem[0]->work();
				break;
			default:
				echo "No type selected :(\n";
				break;
		}
	}
	function makeNoise(){
		echo "Beep, beep.";
	}
}
?>