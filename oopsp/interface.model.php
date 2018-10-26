<?php 

// -1 we need a Car oject that will have certain methods 
interface Car 
{
	function startEngine();
	function stopEngine();
	function start();
	function stop();
}

/**
 * we need road object that will take classes extended from Car interface only
 */
class Route
{
	public $car;
	public $lightGreen = true;
	function __construct(Car $car)//can only except objects extended from car 
	{
		$this->car = $car;
	}

	function drive()
	{
		$this->car->startEngine();
		$this->car->start();
	}
	
	// if (!$lightGreen) {
	// 	$this->car->stop(); // car will stop to wait for green light;
	// }
	
}