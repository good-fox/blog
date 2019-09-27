<?php

function articles_all($db){
  $query = "SELECT * FROM articles ORDER BY id DESC";
  $result = mysqli_query($db, $query);

  $n = mysqli_num_rows($result);
  $articles = array();

  for ($i=0; $i < $n; $i++) {
    $row = mysqli_fetch_assoc($result);
    $articles[] = $row;
  }

  return $articles;
}

function articles_get($db, $id){
  $query = "SELECT * FROM articles WHERE id=$id";
  $result = mysqli_query($db, $query);

  $articles = mysqli_fetch_assoc($result);

  return $articles;
}

function articles_new($db, $title, $date, $content){
  $tile = trim($title);
  $content = trim($content);

  if ($title == '')
    return false;

  $str = "INSERT INTO articles (title, date, content) VALUES ('%s', '%s', '%s')";
  $query = sprintf($str,
    mysqli_real_escape_string($db, $title),
    mysqli_real_escape_string($db, $date),
    mysqli_real_escape_string($db, $content));
  //echo $query;
  $result = mysqli_query($db, $query);

  if (!$result)
    die(mysqli_error($db));

  return true;
}

function articles_edit($db, $id, $title, $date, $content){
  $tile = trim($title);
  $content = trim($content);
  $id = (int)$id;

  if ($title == '')
    return false;

  $str = "UPDATE articles SET title='%s', date='%s', content='%s' WHERE id='%d'";
  $query = sprintf($str,
    mysqli_real_escape_string($db, $title),
    mysqli_real_escape_string($db, $date),
    mysqli_real_escape_string($db, $content),
    $id);

  $result = mysqli_query($db, $query);

  if (!$result)
    die(mysqli_error($db));

  return true;
}

function articles_delete($db, $id){
  $id = (int)$id;

  if ($id == 0)
    return false;

  $query = "DELETE FROM articles WHERE id='$id'";
  $result = mysqli_query($db, $query);

  if (!$result)
    die(mysqli_error($db));

  return true;
}

function articles_intro ($text, $len = 10){
  $str = mb_substr($text, 0, $len) . ' [...]';
  return $str;
}

?>
