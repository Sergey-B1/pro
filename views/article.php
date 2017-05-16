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
        <div>
      </div>
      <div class="article">
        <h3> <?=$articles['title']?>
        </h3>
        <em>Опубликовано: <?=$articles['date']?></em>
        <p><?=$articles['content']?></p>
      </div>
  </div>
      <footer>
        <p>Мой первый блог</p>
        <br>
        Copyright &copy
    </div>
    </footer>
  </body>
</html>
