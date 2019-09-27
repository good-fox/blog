<?php
require_once("database.php");
require_once("models/articles.php");

$db = new Database;
$articles = articles_get($db->db, $_GET['id']);

include("views/article.php");

/*
foreach ($articles as $key => $val) {
  echo "$key : $val, ";
}
*/

?>
