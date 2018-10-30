<?php 


$recName = $_POST["recName"];
$category = $_POST["category"];
$ingridients = $_POST["ingridients"];
$direction = $_POST["directions"];

if (empty($recName) or empty($ingridients) or empty($direction)) {
   $message = "Please fill in all the form inputs";
} else {
   if(!$recp->saveRec($category, $recName, $ingridients, $direction)){
      $message = "Error Saving Data";
   } else {
      header("Location: admin.page.php");
      exit;
   }
}