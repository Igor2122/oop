<?php 

// connect our autoload
require 'autoload.php';

class User implements InterfaceUser
    {
        public $name;
        public $login;
        public $password;
        public static $numberUsr = 0;// to count # of obj created from this calss 
        
    function __construct ($n, $l, $pssrd){
        
        $this->name = $n;
        $this->login = $l;
        $this->password = $pssrd;
        ++self::$numberUsr;
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

    function showUsrQuant ()
    {
        echo User::$numberUsr;
    }
    
    function hr()
    {
        echo "<hr>";
    }
}