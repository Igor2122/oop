<?php 
class User 
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

    $shitzu = new User("shitzy", "shtz", 12334);
    $shitzu->showInfo();


    echo "<h1>Currently we have ". User::$numberUsr. "  users. </h1>";
    

    $archie = new SuperUser("Archie", "arch", 1234, "admin");
    $archie->showInfo();
