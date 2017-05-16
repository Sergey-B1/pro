<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../style1.css">
  </head>
  <body>
    <div class="container">
      <div>
        <h1>Мой первый блог</h1>
<a href="index.php?action=add">Добавить статью</a>
        <table class="admin-table">
          <tr>
            <th>Дата</th>
            <th>Заголовок</th>
            <th></th>
            <th></th>
          </tr>
          <?php foreach ($article as $a): ?>
          <tr>
            <td><? = $a['date']?></td>
            <td><? = $a['title']?></td>
            <td><a href="index.php?action=edit&id=><?=$a['id']?>">Редактировать</a></td>
            <td><a href="index.php?action=delete&id=><?=$a['id']?>">Удалить</a></td>
          </tr>
            <?php endforeach ?>
        </table>

  </div>
      <footer>
        <p>Мой первый блог</p>
        <br>
        Copyright &copy
    </div>
    </footer>
  </body>
</html>
