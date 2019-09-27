<?php
require_once("database.php");
require_once("models/articles.php");

$db = new Database;
$articles = articles_all($db->db);

include("views/articles.php");
/*
foreach ($articles as $value) {
  foreach ($value as $key => $val) {
    echo "$key : $val, ";
  }
  echo "<br>";
}
*/
?>
