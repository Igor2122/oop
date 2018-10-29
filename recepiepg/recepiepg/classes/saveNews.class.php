<?php 

    $recName = $_POST["recName"];
    $ingridients = $_POST["ingridients"];
    $directions = $_POST["directions"];
        
        
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!$recName && !$ingridients){
            $message = "Please fill all the fields";
        } else {
            header("Location: admin.page.php");
            echo $recName, $ingridients, $directions;
            exit;
        }
    }