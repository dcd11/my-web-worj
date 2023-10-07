<?php

$publications = require 'news_data.php';

/**
 * Class Publications
 * абстрактный класс для хранения базовых свойства и методов
 * абстрактный класс - класс, экземпляр которого нельзя создать
 * абстрактный метод - должен быть реализован в классах-потомках(дочерних)
 */


abstract class Publications{
    protected $id;
    protected $category;
    protected $title;
    protected $shortText;
    protected $addDate;

    public function __construct($newsItem){
        $this->id = $newsItem['id'];
        $this->category = $newsItem['category'];
        $this->title = $newsItem['title'];
        $this->shortText = $newsItem['short_text'];
        $this->addDate = $newsItem['add_date'];
    }


    // Абстрактный класс
    abstract public function printItem();
}


/**
 * Class SportNews
 * дочерний класс категории новостей спорта
 */

class SportNews extends Publications{
    // метод для вывода новости в документ
    public function printItem(){
         echo <<<HTML
            <div class="news sport-news">
                <h2>$this->title</h2>
                <p>$this->shortText</p>
                <a href="news_detail.php?id=$this->id">Подробнее...</a>
            </div>

HTML;
    }
}

/**
 * Class SpaceNews
 * дочерний класс категории новостей космоса
 */

class SpaceNews extends Publications{
    // метод для вывода новости в документ
    public function printItem(){
        echo <<<HTML
            <div class="news space-news">
                <h2>$this->title</h2>
                <a href="news_detail.php?id=$this->id">Подробнее...</a>
            </div>

HTML;
    }

}/**
 * Class ScienceNews
 * дочерний класс категории новостей ноуки
 */

class ScienceNews extends Publications{
    // метод для вывода новости в документ
    public function printItem(){
        echo <<<HTML
            <div class="news science-news">
                <h2>$this->title</h2>
                <p>ID: $this->id</p>
                <p>$this->shortText</p>
                <p>Категория: $this->category</p>
                <p>Дата публикации: $this->addDate</p>
                <a href="news_detail.php?id=$this->id">Подробнее...</a>
            </div>

HTML;
    }

}

class CultureNews extends Publications{
    public function printItem(){
        echo <<<HTML
            <div class="news culture-news">
                <h2>$this->title</h2>
                <p>$this->shortText</p>
                <p>Дата публикации: $this->addDate</p>
                <a href="news_detail.php?id=$this->id">Подробнее...</a>
            </div>

HTML;
    }

}
