<?php
// вовод одной полной новости

require 'DBConnect.php';
$pdo = DBConnect::getConnection();

$newsId = (int)$_GET['newsId'];

$query = "SELECT news.title, text, add_date, image,
            authors.id AS authorId, first_name, last_name, short_info, avatar,
            translation AS category, class_name AS category_class_name
            FROM news, authors, category
            WHERE author_id = authors.id AND 
            category_id = category.id AND
            news.id = $newsId;";
            // 5; drop database 301_mini-blog;
$statement = $pdo->query($query);
$newsItem = $statement->fetch();

// заменяем строки на параграфы
$newsItem['text'] = str_replace("\r\n", "</p><p>", $newsItem['text']);
//echo '<pre>';
//print_r($newsItem);
//echo '</pre>';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$newsItem['title']?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="news-item">
            <div class="news-info">
                <h1><?=$newsItem['title']?></h1>
                <img src="<?=$newsItem['image']?>" alt="<?=$newsItem['title']?>">
                <p><?=$newsItem['text']?></p>
                <p>Дата публикации: <?=$newsItem['add_date']?></p>
                <p>Категория: <?=$newsItem['category']?></p>
            </div>
            <div class="author-info">
                <img src="<?=$newsItem['avatar']?>" alt="<?=$newsItem['first_name']?>">
                <p><a href="author_detail.php?authorId=<?=$newsItem['authorId']?>"><?=$newsItem['first_name']?> <?=$newsItem['last_name']?></a></p>
                <p><?=$newsItem['short_info']?></p>
            </div>
        </div>
        <a href="news.php">К списку новостей</a>
    </div>
</body>
</html>
