<?php
// контроллер для вывода новостей списком
require './models/News.php'; // подключаем модель News.

$newList = News::getNewsList(); // Получаем список новостей от модели

require 'views/news_view.php'; // подключаем вид новостей

