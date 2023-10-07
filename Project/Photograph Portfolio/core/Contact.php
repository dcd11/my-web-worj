<?php

class Contact
{
    /**
     * Проверка имени
     */
    private static function validateFirstName($fName)
    {

        if (strlen($fName) === 0) {
            return 'Введите имя';

        }
    }

    /**
     * Проверка фамилии
     */

    private static function validateLastName($LName)
    {

        if (strlen($LName) === 0) {
            return 'Введите Фамилию';

        }
    }
    /**
     * Проверка почты
     */
    private static function validateEmail($email){
        $regExp = '/^.+@.+\..+$/';

        if(empty($email)){
            return 'Введите адес электронной почты';
        }elseif(!preg_match($regExp, $email)){
            return 'Адрес электронной почты введен в неверном формате';
        }
    }

    /**
     * Проверка формы feedback
     */

    public static function validateForm()
    {
        // объявляем массивы для ошибок
        var_dump($_POST);
        print_r($_FILES);

        $errors = [];
        $input = [];

        // экранируем данные и обрезаем конечные пробелы
        $input['fName'] = htmlspecialchars(trim($_POST['fName']));
        $input['lName'] = htmlspecialchars(trim($_POST['lName']));
        $input['email'] = htmlspecialchars(trim($_POST['email']));
        $input['type'] = htmlspecialchars(trim($_POST['type']));
        $input['comment'] = htmlspecialchars(trim($_POST['comment']));

        /**
         * Проверка имени
         */
        $fNameError = self::validateFirstName($input['fName']);
        if($fNameError){
            // Если обнаружена ошибка при вводе
            $errors['fName'] = $fNameError;
        }

        /**
         * Проверка Фамилии
         */
        $lNameError = self::validateLastName($input['lName']);
        if($lNameError){
            // Если обнаружена ошибка при вводе
            $errors['lName'] = $lNameError;
        }

        /**
         * Проверка почты
         */
        $emailError = self::validateEmail($input['email']);
        if($emailError){
            $errors['email'] = $emailError;
        }

        return [$errors, $input];

    }


    /**
     * Добавление данных формы в таблицу feedback
     */
    public static function processForm($input){

        Feedback::addNewFeedback($input);

        // перенаправляю на главную
        header('Location: /');



    }


}