<?php 


spl_autoload_register(function($class)
{
   $filename =  $class . '.class.php';

   // if (!file_exists($filename)) {
   //    return false; 
   // }

   include 'baseClasses/'. $filename;

   // while (!file_exists($filename)) {
   //    echo 'Sorry file not found';
   //    continue;
   // }
   
   // WHITHOUT checking for file_exists()
   // include 'baseClasses/' . $class . '.class.php';
   // include $class . '.class.php';
});
