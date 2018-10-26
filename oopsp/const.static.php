<?php 

/**
 * constant 
 */
class ConstructionCompany
{
	const NAME = "Constuction Company";
	public static $Counter = 0;

	function __construct(){
		++self::$Counter;// we increment counter here with each new company created
	}

	function printName ()
	{
		echo self::NAME;// echo out const NAME
	}

	// static function we can call it with class name
	// ConstructionCompany::welcome(); 
	static function welcome()
	{
		echo 'wellcome to our project';
	}
}

$newComp = new ConstructionCompany();
$newComp->printName();

echo ConstructionCompany::NAME;
echo "<br>"; 
echo 'we have ' . ConstructionCompany::$Counter . ' companies that have been registred';
echo "<br>"; 
ConstructionCompany::welcome();







