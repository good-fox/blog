<?php

require_once("../database.php");
require_once("../models/articles.php");

$db = new Database;

if (isset($_GET['action']))
  $action = $_GET['action'];
else
  $action = '';

if ($action == 'add') {

    if (!empty($_POST)) {
      $title = $_POST['title'];
      $date = $_POST['date'];
      $content = $_POST['content'];

      articles_new($db->db, $title, $date, $content);

      header("Location: index.php");
    }

    //$article = [];
    include("../views/article_admin.php");

} elseif ($action == 'edit') {
    if (!isset($_GET['id']))
      header("Location: index.php");
    $id = (int)$_GET['id'];

    if (!empty($_POST) && $id > 0) {
      $title = $_POST['title'];
      $date = $_POST['date'];
      $content = $_POST['content'];

      articles_edit($db->db, $id, $title, $date, $content);
      header("Location: index.php");
    }

    $article = articles_get($db->db, $id);
    include("../views/article_admin.php");

} elseif ($action == 'delete') {
    $id = $_GET['id'];
    articles_delete($db->db, $id);

    header("Location: index.php");

} else {
  $articles = articles_all($db->db);
  include("../views/articles_admin.php");
}

?>
