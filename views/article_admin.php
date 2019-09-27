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
      <form action="index.php?action=<?=$_GET['action']?><?php if (!empty($_GET['id'])) echo "&id=" . $_GET['id'];?>" method="post">
        <label>
          Назва
          <input type="text" name="title" value="<?php if (!empty($article['title'])) echo $article['title'];?>" class="form-item" autofocus required>
        </label>
        <label>
          Дата
          <input type="date" name="date" value="<?php if (!empty($article['date'])) echo $article['date'];?>" class="form-item" required>
        </label>
        <label>
          Текст
          <textarea name="content" class="form-item" required><?php if (!empty($article['content'])) echo $article['content'];?></textarea>
        </label>
        <input type="submit" value="Зберигти" class="btn">
      </form>
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
