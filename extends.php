<?php 
class SuperHouse{
    public $model = "";
    public $square = 0;
    public $floors = 0;
    public $color = "none";
    // Конструктор класса
    function __construct($model, $square = 0, $floors = 1){
      $this->model = $model;
      $this->square = $square;
      $this->floors = $floors;
	}
	function startProject(){
		echo "Start. Model: {$this->model}\n";
	}
   function stopProject(){
      echo "Stop. Model: {$this->model}\n\n";
	}
	function build(){
		echo "Build. House: {$this->square}x{$this->floors}\n";
	}
	function paint(){
		echo "Paint. Color: {$this->color}\n";
	} 
}

$simple = new SuperHouse("A-100-123", 120, 2); $simple->color = "red"; $simple->startProject();
$simple->build();
$simple->paint();
$simple->stopProject();

class SimpleHouse extends SuperHouse
{
	public $fireplace = true;
	public $patio = true;

	function fire()
	{
		if($this->fireplace)
			echo "Fueled Fireplace";
	}
}

$superHouse = new SimpleHouse('A-100-134', '120x29', 3 );
$superHouse->color = 'yellow';
$superHouse->startProject();
$superHouse->build();
$superHouse->paint();
$superHouse->fire();

class FabricHouse extends SimpleHouse{
    // Перегрузка метода
function build(){
	echo "Build. Fabric: {$this->square}x{$this->floors}\n";
	}	 
}

$fabric = new FabricHouse("B-200-007", 3250, 5); $fabric->color = "white"; 
$fabric->startProject();
$fabric->build();
$fabric->paint();
$fabric->stopProject();

class SuperFabricHouse extends FabricHouse{
    function build()
    {
    	echo "=====================================\n";
    	echo parent::build();
    	echo "=====================================\n";
    }
}

$super_fabric = new SuperFabricHouse("C-201-034", 5150, 7); $super_fabric->color = "black"; $super_fabric->startProject();
$super_fabric->build();
$super_fabric->paint();
$super_fabric->stopProject();
$super_fabric->stopProject();


















