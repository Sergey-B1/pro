<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="style_1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div>
        <h1>Мой первый блог</h1>
        <a href="admin">Панель администратора</a>
        <div>
      </div>
      <?php foreach ($articles as $a): ?>
      <div class="article">
        <h3> <a href="articles.php?id=<?=$a['id']?>"><?=$a['title']?></a>
        </h3>
        <em>Опубликовано: <?=$a['date']?></em>
        <p><?=$a['content']?></p>
      </div>
    <?php endforeach ?>
  </div>
      <footer>
        <p>Мой первый блог</p>
        <br>
        Copyright &copy
    </div>
    </footer>
  </body>
</html>
