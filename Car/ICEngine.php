<?php
include_once("./PropulsionSystem.php");
class ICEngine extends PropulsionSystem{
    public int $displacement;
    private int $cylinderCount;
    public function setEngineSpecs(float $diaplacement_cc, int $cylinders){
        $this->displacement = $diaplacement_cc;
        $this->cylinderCount = $cylinders;
    }
	// function __construct()
	// {
	// 	// parent::__construct();
	// }
	function work(){
		echo "Brumm, brumm.";
	}
}
?>