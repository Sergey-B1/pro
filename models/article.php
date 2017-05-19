<?php
function articles_all($link){
  $query = "SELECT * FROM article ORDER BY id DESC";
  $result = mysqli_query($link, $query);

  if (!$result)
    die(mysqli_error($link));

    $n = mysqli_num_rows($result);
    $articles = array();

    for ($i = 0; $i < $n; $i++)
    {
      $row = mysqli_fetch_assoc($result);
      $articles[] = $row;
    }
    return $articles;
}
function articles_get($id){
return ["id"=> 1, "title" => "Заголовок", "date" => "2015-01-01", "content" => "Текст"];
}
function articles_new($title, $date, $content){
  $title = trim($title);
  $content = trim($content);

  if ($title == '')
  return false;

  $t = "INSERT INTO article (title, date, content) VALUES ('%s', '%s', '%s')";
  $query = sprintf($t, mysqli_real_escape_string($link, $title),
  mysqli_real_escape_string($link, $date),
  mysqli_real_escape_string($link, $content));

  echo $query;
  $result = mysqli_query ($link, $query);

  if (!$result)
    die(mysqli_error($link));
    return true;
}
function articles_edit($link, $id, $title, $date, $content){
  $title = trim($title);
  $content = trim($content);
  $date = trim($date);
  $id = (int)$id;

  if ($title == '')
  return false;

  $sql = "UPDATE article SET title='%s', content='%s', date='%s' WHERE id='%d'";

  $query = sprintf($sql, mysqli_real_escape_string($link, $title),
  mysqli_real_escape_string($link, $content),
  mysqli_real_escape_string($link, $date),
  $id);

  $result = mysqli_query ($link, $query);

  if (!$result)
    die(mysqli_error($link));

    return mysqli_affected_rows($link);
}
function articles_delete($link, $id){
  $id = (int)$id;

  if ($id == 0)
  return false;

  $query = sprintf("DELETE FROM article WHERE id='%d'", $id);
  $result = mysqli_query($link, $query);

  if ($result)
    die(mysqli_error($link));

    return mysqli_affected_rows($link);
}
function articles_intro($text, $len=55){
  return substr($text, 0, $len);
}
 ?>
