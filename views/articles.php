<html>
<head>
  <title>Мій перший блог</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
  <div class="container">
    <h1>Мій Перший Блог</h1>
    <a href="admin">Адмін панель</a>
    <div>
      <?php foreach ($articles as $a): ?>
      <div class="article">
        <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
        <em>Опубліковано: <?=$a['date']?></em>
        <p><?=articles_intro($a['content'])?></p>
      </div>
      <?php endforeach; ?>
    </div>
    <footer>
      <p>
        Мій перший блог
        <br>
        Copyright &copy; 2015
      </p>
    </footer>
  </div>
<body>
</body>
</html>
