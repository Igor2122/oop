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

    class User 
    {
        public $name;
        public $login;
        public $password;
        
        function __construct ($n, $l, $pssrd){
            
            $this->name = $n;
            $this->login = $l;
            $this->password = $pssrd;
        }
    
    function showInfo()
    {
        $this->hr();
        echo "User Name: {$this->name}";
        $this->hr();
        echo "User Login: {$this->login}";
        $this->hr();
        echo "User Password: {$this->password}";
        $this->hr();
    }
    
    function hr()
    {
        echo "<hr>";
    }
    }


    class SuperUser extends User
    {
        public $role;
        
        function __construct($n, $l, $pssrd, $pos)
        {
            parent::__construct($n, $l, $pssrd);
            $this->role = $pos;
        }
        
        function showInfo()
        {
            parent::showInfo();
            echo "Position: {$this->role}";
        }
        
    }

    $igor = new User("Igor", "ig", 123);
    $igor->showInfo();
    echo "<br>";

    $reem = new User("Reem", "rm", 1234);
    $reem->showInfo();
    echo "<br>";


    $archie = new SuperUser("Archie", "arch", 1234, "admin");
    $archie->showInfo();
*/

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
abstract class HouseAbstract 
{
    public $model = "";
    public $square;
    public $floors;
    
    function __construct($model, $square = 0, $floors = 1)
    {
        
    }
    
    function startProject ()
    {
        echo "Start. Model: {$this->model}";
    }
    
    function stopProject ()
    {
        echo "Stop Project: {$this->model}";
    }
}

// $house = new HouseAbstract("1", "2","3"); - will throw an error as this is an abastact class

?>

</body>
</html>