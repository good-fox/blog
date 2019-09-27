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
    <br>
    <a href="index.php">Список усіх статей</a>
      <div class="article">
        <h3><?=$articles['title']?></h3>
        <em>Опубліковано: <?=$articles['date']?></em>
        <p><?=$articles['content']?></p>
      </div>
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
