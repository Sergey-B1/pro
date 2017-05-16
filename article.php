<?php
require_once("database.php");
require_once("models/article.php");

$link = db_connect();
$articles = articles_get($_GET[$link, 'id']);

include("views/article.php");
?>
