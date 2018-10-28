<?php 
  require_once 'NewsDB.class.php';
  $news = new NewsDB();
  $errMsg = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      require "save_news.inc.php";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>News Feed</title>
	<meta charset="utf-8" />
</head>
<body>
  <h1>Latest News</h1>
  <?php
    if ($errMsg) {
      echo "<h2>$errMsg</h2>"; 
      
    }
  ?>
  <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    Title of the News:<br />
    <input type="text" name="title" /><br />
    Choose Your Category:<br />
    <select name="category">
      <option value="1">Politics</option>
      <option value="2">Culture</option>
      <option value="3">Sport</option>
    </select>
    <br />
    Body of The News Post:<br />
    <textarea name="description" cols="50" rows="5"></textarea><br />
    Source:<br />
    <input type="text" name="source" /><br />
    <br />
    <input type="submit" value="Submit!" />
</form>
<?php

?>
</body>
</html>