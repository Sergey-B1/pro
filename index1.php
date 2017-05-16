<?php

require_once("database.php");
$link = db_connect();

require_once("models/article.php");
$articles = articles_all($link);

include("views/articles.php");
?>
