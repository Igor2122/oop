<?php 

$host = 'localhost';
    $usr = 'igdevelopers';
    $pass = '';
    $dbname = 'pdoposts';
    
    // Set the DSN - data source name 
    $dsn = 'mysql:host='. $host . ';dbname='. $dbname;
    
    // Create PDO instance 
    $pdo = new PDO($dsn, $usr, $pass);
    // Set the default fetch method to object
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);