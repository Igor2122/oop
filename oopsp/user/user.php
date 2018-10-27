<?php 

    // connect our autoload
    require 'autoload.php';

    $igor = new User("Igor", "ig", 123);
    $igor->showInfo();
    echo "<br>";

    $reem = new User("Reem", "rm", 1234);
    $reem->showInfo();
    echo "<br>";

    $shitzu = new User("shitzy", "shtz", 12334);
    if($shitzu instanceof InterfaceUser){
        $shitzu->showInfo();
    }


    echo "<h1>Currently we have ". User::$numberUsr. "  users. </h1>";
    

    $archie = new SuperUser("Archie", "arch", 1234, "admin");
    $archie->showInfo();
