<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


<?php 

// Createing inheritance on Object
/*



// try and catch 
/* 
    function test($var = false){
        try{
            echo "Start";
            if(!$var){
                throw new Exception('$var in false!');
            }
            echo "Continue";
        } catch (Exception $e){
            // echo "Exception: " . $e->getMessage() . "<br>";
            // echo "Exception: " . $e->getFile() . "<br>";
            // echo "Exception: " . $e->getLine() . "<br>";
        }
        echo "The end" ;
    }
    test(1);
    test();
*/

// Abstract Classes
/*
    abstract class HouseAbstract 
    {
        public $model = "";
        public $square;
        public $floors;
        
        function __construct($model, $square = 0, $floors = 1)
        {
            $this->model = $model;
            $this->square = $square;
            $this->floors = $floors;
        }
        
        function startProject ()
        {
            echo "Start. Model: {$this->model}";
        }
        
        function stopProject ()
        {
            echo "Stop Project: {$this->model}";
        }
        // they have to atlest reload this method while instantiating a new class and we do not need {} here
        abstract function build();
    }


 
 
    class BasicHouse extends HouseAbstract
    {
        public $paint = '';

        function __construct($model, $square, $floors, $paint)
        {
            parent::__construct($model, $square, $floors);
            
            $this->paint = $paint;
        }


        function build()
        { 
            echo "The House model : {$this->model} 
            it will be {$this->square} * {$this->floors} wide 
            and will be painted in {$this->paint}";
        }
    }

    $basicHouse = new BasicHouse('122-33-02', 5 , 2, 'yellow');
    $basicHouse->build();
*/

// INTERFACE - only can contain abastract methods no declarations at all 
// EXAMPLE ONE 
    interface Base 
    {
        function connectToDb();
        function disconnectDB();
    }

    /**
     * 
     */
    class Connect implements Base
    {
        function connectToDb()
        {
            echo "I am connceted";
        }
        function disconnectDB()
        {
            echo "I am disconnected";
        }

    }

        $connect = new Connect();
        $connect->connectToDb();
        $connect->disconnectDB();


    // EXAMPLE 2 
    /**
     * Basic house
     */
    class HouseBase
    {
        public $material;
        public $levels;

        function __construct($material, $levels)
        {
            $this->material = $material;
            $this->levels = $levels;
        }

        function build()
        {
            echo "The house will be made of {$this->material} and will have {$this->levels} number of levels by architect";
        }
    }

    interface Paintable
    {
        function paint();
    }

    interface Decoratable 
    {
        function decorate();
    }

    /**
     * actual project
     */
    class ArchiHouse extends HouseBase implements Paintable, Decoratable
    {
        public $paint;
        public $decorate;

        function __construct($material, $levels, $paint, $decorate)
        {
            parent::__construct($material, $levels);
            $this->paint = $paint;
            $this->decorate = $decorate;
        }
        function paint()
        {
            echo "And we decide to paint it in {$this->paint} color";
        }

        function decorate()
        {
            echo "And we will also add decratable {$this->decorate}";
        }
    }

    $archiHouse = new ArchiHouse('brick', 2, 'yellow', 'Flowers');
        $archiHouse->build();
        
        // we need to check if the class in iherited from the interface 
    if ($archiHouse instanceof Paintable && $archiHouse instanceof Decoratable) {
        $archiHouse->paint();
        $archiHouse->decorate();
    }

















?>

</body>
</html>