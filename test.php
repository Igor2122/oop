<?php 

class Pet
{
    // paremeters
    public $name;    
    public $age;    
    public $type = "unknown";
    
    //methods   
    function says($par)
    {
        echo "{$this->name} says: $par and he is a {$this->type}";
        $this->drawLine();
    }
    
    function drawLine()
    {
        echo "<hr>";
    }
    
    // psudo contants __CLASS__ __METHOD__
    
    function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }
    function __destruct()
    {
        echo "Object deleted";
        $this->drawLine();
    }
}

$cat = new Pet("Archie", "cat");
$cat->says('Meaow-meaow');

$dog = new Pet("Shitzy", "dog");
$dog->says("woof-woof");



// $dog->type = "dog";
// $dog->name = 'Barsik';

// $cat->sayName('meaw');
// $dog->sayName('woof');

