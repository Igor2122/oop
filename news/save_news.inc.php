<?php

$t = $news->clearStr($_POST["title"]);
$d = $news->clearStr($_POST["description"]);
$s = $news->clearStr($_POST["source"]);
$c = $news->clearInt($_POST["category"]);

if (empty($t) or empty($d)) {
   $errMsg = "Please fill in all the form inputs";
} else {
   if(!$news->saveNews($t, $d, $s, $c)){
      $errMsg = "Error while adding news";
   } else {
      header("Location: news.php");
      echo $t, $d, $s, $c;
      exit;
   }
}
