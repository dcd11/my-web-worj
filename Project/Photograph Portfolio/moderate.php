<?php
//require 'enter.php';
require 'models/Feedback.php';
// контроллер лк пользователя
session_start();
//
require 'models/Users.php'; // подключаем класс для работы с табицей пользователей (users)



// получаем данные о пользователе
$userInfo = Users::getUserInfo((int)$_SESSION['userId']);
// получаем данные из из таблицы feedback
$feedbackList = Feedback::getfeedbackList();

// обновляем логин
if (isset($_POST['action']) && $_POST['action'] === 'Обновить логин') {
    print_r($_POST);
    $login = htmlspecialchars(trim($_POST['newLogin']));

    Users::updateLogin($login, (int)$_SESSION['userId']);

    header('Location: moderate.php');
}

// модерируем отзывы



// изменения данных
// if(){}

require 'view/moderate_view.php';