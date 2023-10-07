<?php
// Модель для работы с пользователями с табличкой Users
require_once 'DBConnect.php';

class Users
{

    /**
     * Получения пароля по логину
     */
    public static function getPasswordByLogin($login){
        $pdo = DBConnect::getConnection();

        $query = "SELECT password
                    FROM users
                    WHERE login = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$login]);

        return $statement->fetch()['password']; // вернули пароль
    }

    /**
     * Получение данных о пользователе для сесссии (id, moderMode);
     */
    public static function getUserInfoSession($login){
        $pdo = DBConnect::getConnection();

        $query = "SELECT id, moderMode
                    FROM users
                    WHERE login = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$login]);

        return $statement->fetch();
    }

    /**
     * Отображение данных в Панели модерации
     */

    public static function getUserInfo($userId){
        $pdo = DBConnect::getConnection();
        $query = "SELECT * FROM `users` WHERE id = ?;";
        $statement = $pdo->prepare($query);
        $statement->execute([$userId]);
        return $statement->fetch();
        //var_dump($statement->fetch());

    }
    /**
     * Смена логина
     */

    public static function updateLogin($login, $userId){
        $pdo = DBConnect::getConnection();
        $query = "UPDATE users
                  SET login = ?
                  WHERE id = ?;";
        $statement = $pdo->prepare($query);
        $statement->execute([$login, $userId]);
        $_SESSION['validUser'] = $login;
        header('location: moderate.php');
    }

}