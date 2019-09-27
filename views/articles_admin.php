<html>
<head>
  <title>Мій перший блог</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Мій Перший Блог</h1>
    <div>
      <a href="index.php?action=add">Додати Статю</a>
      <table class="admin-table">

        <tr>
          <th>Дата</th>
          <th>Заголовок</th>
          <th></th>
          <th></th>
        </tr>

        <?php foreach ($articles as $a): ?>
          <tr>
            <td><?=$a['date']?></td>
            <td><?=$a['title']?></td>
            <td><a href="index.php?action=edit&id=<?=$a['id']?>">Редагувати</a></td>
            <td><a href="index.php?action=delete&id=<?=$a['id']?>">Удалити</a></td>
          </tr>
        <?php endforeach; ?>

      </table>
    </div>
    <footer>
      <p>
        Мій перший блог
        <br>
        Copyright &copy; 2015
      </p>
    </footer>
  </div>
</body>
</html>
