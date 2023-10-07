<?php
// контроллер обратной связи
require 'core/Contact.php'; // класс для проверки данных
require 'models/Feedback.php'; // класс для проверки данных
require 'models/Users.php'; // Класс дл работы с

$title = 'Обратная связь';

if($_SERVER['REQUEST_METHOD'] === 'POST') {// если форма отправлена
    // проверяем данные
    list($errors, $input) = Contact::validateForm();
    print_r($errors);
    print_r($input);
    // если ошибки есть
    if($errors){// показываем форму
        require 'view/contact_view.php';
    }else{ // если ошибок нет
        // сохраням данные
        Contact::processForm($input);

    }


}else{
    //есои страница загружена впервые отображаем форму
    require 'view/contact_view.php';

}

