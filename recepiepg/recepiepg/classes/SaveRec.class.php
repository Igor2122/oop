<?php 

require_once 'rec.calss.php';

$recName = $_POST["recName"];
$category = $_POST["category"];
$ingridients = $_POST["ingridients"];
$directions = $_POST["directions"];

if (empty($recName) && empty($ingridients) && empty($directions)) {
   $errMsg = "Please fill in all the form inputs";
} else {
   if(!$recp->saveRec($category, $recName, $ingridients, $directions)){
      $message = "Error Saving Data";
   } else {
      header("Location: admin.page.php");
      $message = "Record Saved";
      exit;
   }
}