<?php 

class User 
{
    public $name;
    public $login;
    public $password;
    
    function showInfo()
    {
        echo "<ul>";
            echo "<li>Name: {$this->name}</li>";
            echo "<li>Lgin: {$this->login}</li>";
            echo "<li>Pass: {$this->password}</li>";
        echo "</ul>";
        
        $this->addBr();
    }
    
    function addBr ()
    {
        echo "<br>";
    }
    
    function __construct($name, $login, $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        // calling method here 
        $this->showInfo();
    }
    
    function __destruct()
    {
        echo "The user's name: {$this->name}";
        // calling add bar method
        $this->addBr();
    }
}

$user1 = new User("Igor", "igor@yahoo.com", "pass123");
    
$user2 = new User("Reem", "reem@yahoo.com", "pass123");
    
$user3 = new User("Archie", "archie@yahoo.com", "pass123");
    





    





