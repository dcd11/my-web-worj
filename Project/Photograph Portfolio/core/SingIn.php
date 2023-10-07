<?php
// класс для проверки логина и пароля при входе

class SingIn
{

    /**
     * Метод для проверки логина
     */
    private static function validateLogin($login){
        if (empty($login)){ // если пусто
            return 'Введите логин';
        }
    }
    /**
     * Метод для проверки пароля
     */
    private static function validatePassword($password, $login){
        if(empty($password)){
            return "Введите пароль";
        }
        // получаем пароль с текущего пользователя
        $passwordDB = Users::getPasswordByLogin($login);

        // Сравниваем пароль
        if (!$password === $passwordDB){
            // Если пароли не совпадают
            return 'Пароль не верен';
        }
    }





    /**
     * Метод для проверки данных формы
     */
    public static function validateForm(){
        $errors = [];
        $input = [];

        $input['login'] = htmlspecialchars(trim($_POST['login']));
        $input['password'] = htmlspecialchars(trim($_POST['password']));

        /**
         * Проверка логина & пароля
         */

        $loginError = self::validateLogin($input['login']);
        if ($loginError){// Если ошибка
            $errors['login'] = $loginError; // записываем в массив с ошибками
        }else{
            // если логин верен
            $passwordError = self::validatePassword($input['password'], $input['login']);
            if($passwordError){
                $errors['password'] = $passwordError;
            }
        }



        return [$errors, $input];
    }

    /**
     * метод обработки данных при успешной проверке
     */
    public static function processForm($input){
        // получаем необходимые для сессии данные о пользователе
        $userInfo = Users::getUserInfoSession($input['login']);
        // записываем данные в сессию
        session_start();
        $_SESSION['userId'] = $userInfo['id'];
        $_SESSION['validUser'] = $input['login'];

        header('Location: /moderate.php');

    }
}