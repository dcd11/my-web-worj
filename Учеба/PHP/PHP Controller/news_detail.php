<?php
// вовод одной полной новости

require 'models/News.php'; // подключаем модель News


$newsId = (int)$_GET['newsId']; // забираем ID новостей из массива $_GET

$newsItem = News::getNewsItemById($newsId); // получаем массив с новостью

// заменяем строки \r\n на параграфы
$newsItem['text'] = str_replace("\r\n", "</p><p>", $newsItem['text']);

require 'views/news_detail_view.php'; // подключаем нужный вид