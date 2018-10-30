<?php 


$recName = $_POST["recName"];
$category = $_POST["category"];
$ingridients = $_POST["ingridients"];
$direction = $_POST["directions"];

if (empty($recName) && empty($ingridients) && empty($direction)) {
   $errMsg = "Please fill in all the form inputs";
} else {
   if(!$recp->saveRec($category, $recName, $ingridients, $direction)){
      $message = "Error Saving Data";
   } else {
      header("Location: admin.page.php");
      $message = "Record Saved";
      exit;
   }
}