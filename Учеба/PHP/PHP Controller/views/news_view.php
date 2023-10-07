<!-- Вид(шаблон) для отображения страницы со списком новостей -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список новостей</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Список новостей</h1>
    <a href="index.php">Главная</a>
    <a href="authors.php">Авторы</a>
    <div class="news-list">
        <?php foreach ($newList as $newItem):?>
            <div class="news-item">
                <div class="news-img">
                    <a href="news_detail.php?newsId=<?=$newItem['newsId']?>">
                        <img src="<?=$newItem['image']?>" alt="<?=$newItem['title'] ?>">
                    </a>
                </div>
                <div class="news-info">
                    <h2><?=$newItem['title'] ?></h2>
                    <div>
                        <p>Дата публицакии: <?=$newItem['add_date'] ?></p>
                        <p>Автор: <a href="author_detail.php?authorId=<?=$newItem['authorId']?>"><?=$newItem['first_name'] ?>
                                <?=$newItem['last_name'] ?> </p></a>
                        <p class="<?=$newItem['category_class_name'] ?>">Категория: <?=$newItem['category'] ?></p>
                        <a href="news_detail.php?newsId=<?=$newItem['newsId']?>">Подробнее...</a>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>
</body>
</html>
