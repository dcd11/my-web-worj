<?php
ini_set('memory_limit', '100M');
// контроллер страницы входа
require 'models/Users.php'; // Класс дл работы
require 'core/SingIn.php'; //
$title = "Панель администратора";


print_r($_POST);
if (!isset($_SESSION['validUser'])) { // если не авторизован выносим на главную
    header('location /');
};

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    // Проверяем данные
    list($errors, $input) = SingIn::validateForm();
    print_r($errors);
    print_r($input);

    if ($errors) {
        require 'view/enter_view.php';

    } else {
        SingIn::processForm($input);
    }
}else{
    require 'view/enter_view.php';
}