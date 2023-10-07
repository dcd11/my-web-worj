<?php
// имя БД - 208_users
// адрес сервера БД
// логин пользователя
// пароль пользователя
// статические свойства и методы - обращения без создания объекта
// self:: - обращение в контексте класса (ссылка на текущий класс)

class DBConnect
{
    // объявили статически свойства
    private static $dbName = '208_users';
    private static $dbHost = 'localhost';
    private static $dbLogin = 'root';
    private static $dbPassword = '';

    // метод для формирования DSN
    private static function getDSN(){
        return 'mysql:dbname=' . self::$dbName.';host='.self::$dbHost;
    }

    // метод для получения объекта соединения с БД
    public static function getConnection(){
        return new PDO(self::getDSN(), self::$dbLogin, self::$dbPassword);
    }
}

//echo DBConnect::$dbName;
//echo DBConnect::getDSN();
