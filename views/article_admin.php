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
        <h1>Мой первый блог</h1>
        <div>
          <form method="post" action="index.php?action=add">
            <label>
              Название<br>
              <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
            </label>
            <br>
            <label>
              Дата<br>
              <input type="date" name="date" value="" class="form-item" required>
            </label>
            <br>
            <label>
              Содержимое<br>
              <textarea class="form-item" name="content" required></textarea>
            </label>
            <br>
            <input type="submit" value="Сохранить" class="btn">
          </form>
        </div>
      <footer>
        <p>Мой первый блог</p>
        <br>
        Copyright &copy
    </div>
    </footer>
  </body>
</html>
