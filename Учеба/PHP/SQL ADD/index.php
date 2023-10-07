<?php
/**
 * CRUD
 *
 * 1. CREATE - создание
 * 2. READ - чтение
 * 3. UPDATE - Обновление
 * 4. DELETE - удаление
 */

//print_r($_POST);
//print_r($_GET);

require 'DBConnect.php';
$pdo = DBConnect::getConnection();

/**
 * Создаем таблицу для хранения данных
 */
$query = "CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    login VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    avatar TEXT NOT NULL 
);";
$statement = $pdo->query($query);
// если в щапросе ошибка, прерываем работу
if(!$statement)die('упс, что-то пошло не так');
// если в щапросе ошибка, прерываем работу
//print_r($statement);





?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Работа с сотрудниками</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Работа с сотрудниками</h2>

    <h3>Список сотрудников</h3>
    <a href="?add">Добавить нового сотрудника</a>

    <?php
    /**
     * Если нажата ссылка на добавление сотрудника
     * <a href="?add">Добавить нового сотрудника</a>
     */
    if(isset($_GET['add'])){
        //показываем форму для добавления
        echo <<<HTML
    <form method="POST" class="add-user" enctype="multipart/form-data">
        <div>
            <label>Имя:</label>
            <input type="text" name="firstName">
        </div>
        <div>
            <label>Фамилия:</label>
            <input type="text" name="lastName">
        </div>
        <div>
            <label>логин:</label>
            <input type="text"  name="login">
        </div>
        <div>
            <label>Электронная почта</label>
            <input type="email"  name="email">
        </div>
        <div>
            <label>Пароль</label>
            <input type="password" name="password">
        </div>
        <div>
            <label>Аватар</label>
            <input type="file"  name="avatar">
        </div>
         <div>
            <input type="submit"  name="action" value="Создать">
        </div>
    </form>
HTML;

    }

    /**
     * если отправлена форма для записи нового сотрудника
     *  <input type="submit"  name="action" value="Создать">
     */
    if(isset($_POST['action']) && $_POST['action'] === 'Создать'){
        //получаем данные о картинке
        $avatar = $_FILES['avatar'];
        //проверяем на пустые поля
        if( !empty($_POST['firstName']) &&
            !empty($_POST['lastName']) &&
            !empty($_POST['login']) &&
            !empty($_POST['email']) &&
            !empty($_POST['password']) &&
            $avatar['size']
        ){ //если НЕ пусто, продолжаем
            echo '<h1>Проверка пройдена</h1>';
            // Экранируем введеные данные
            $firstName = htmlspecialchars(trim($_POST['firstName']));
            $lastName = htmlspecialchars(trim($_POST['lastName']));
            $login = htmlspecialchars(trim($_POST['login']));
            $email = htmlspecialchars(trim($_POST['email']));
            // дополнительно хешируем пароль
            $password = password_hash(htmlspecialchars(trim($_POST['password'])), PASSWORD_DEFAULT);
            //формируем путь к картинке
            $avatarPath = 'images/'.time().'_'.$avatar['name'];
            // Перемещаем картинку в нужную папку
            move_uploaded_file($avatar['tmp_name'], $avatarPath);

            // Записываем данные в БД
            $query = "INSERT INTO users VALUES(?, ?, ?, ?, ?, ?, ?)";
            // 1. Подготовка запроса
            $statement = $pdo->prepare($query);
            // 2. Выполнения запроса
            $statement->execute([null, $firstName, $lastName, $login, $email, $password, $avatarPath]);

            // перезагружаем страницу
            header('location: /SQL%20ADD');
        }else{
            echo '<h3 class="error-msg">Заполните все поля</h3>';
        }

    }

    /**
     * Удаление сотрудника если нажата кнопка
     * <input type="submit" name="action" value="Удалить">
     */
    if(isset($_POST['action']) && $_POST['action'] === 'Удалить'){
        // Забираем из массива пост id сотрудника и приводим к числу
        $userId = (int)$_POST['userId'];

        // Получаем путь к картинке сотрудника по ID
        $query = "SELECT avatar FROM users WHERE id=?";
        $statement = $pdo->prepare($query);
        $statement->execute([$userId]);
        $avatarPath = $statement->fetch()['avatar'];
//        print_r($avatarPath);
        // Удаляем картинку
        // 1. Если картинка существует и это не дефолтная картинка
        if (file_exists($avatarPath && $avatarPath !== './images/default.jpg')){
            unlink($avatarPath); // удаляем
        }

        // удаляем сотрудника
        $query = "DELETE FROM users WHERE id=?";
        $statement = $pdo->prepare($query);
        $statement->execute([$userId]);

        //перенаправляем
        header('location: /SQL%20ADD');
    }
    //    print_r($_FILES)
    /**
     *  Редактированние данных о сотрудниках
     * <input type="submit" name="action" value="Изменить">
     */
    if(isset($_POST['action']) && $_POST['action'] === 'Изменить'){
//        print_r($_POST);
        // 1. Получаем id
        $userId = (int)$_POST['userId'];
        // 2. Получаем данные о пользователе для вставки в форму по ID сотрудника
        $query = "SELECT firstName, lastName, login, email
        FROM users 
        WHERE id=?";
        $statement = $pdo->prepare($query);
        $statement->execute([$userId]);
        $user= $statement->fetch();
//        print_r($user);
        // 3. Отображаем форму и подставляем в нее полученные БД данные
        echo <<<HTML
    <form method="POST" class="add-user" enctype="multipart/form-data">
        <div>
            <p>ID: $userId</p>
            <input type="hidden" name="userId" value="$userId">
        </div>
        <div>
            <label>Имя:</label>
            <input type="text" name="firstName" value="$user[firstName]">
        </div>
        <div>
            <label>Фамилия:</label>
            <input type="text" name="lastName" value="$user[lastName]">
        </div>
        <div>
            <label>логин:</label>
            <input type="text"  name="login" value="$user[login]">
        </div>
        <div>
            <label>Электронная почта</label>
            <input type="email"  name="email" value="$user[email]">
        </div>
        <div>
            <label>Аватар</label>
            <input type="file"  name="avatar">
        </div>
         <div>
            <input type="submit"  name="action" value="Обновить">
        </div>
    </form>
HTML;

    }

    /**
     * Если нажата кнопка обновить
     * <input type="submit"  name="action" value="Обновить">
     * получаем данные из формы и обрабатываем
     */
    if(isset($_POST['action']) && $_POST['action'] === 'Обновить'){
//        print_r($_POST);
//        print_r($_FILES);
        // проверяем данные на пустоту
        if(!empty($_POST['firstName']) &&
            !empty($_POST['lastName']) &&
            !empty($_POST['login']) &&
            !empty($_POST['email'])
        ){ // Если поля не пустые, работаем с данными
            // экранируем данные
            $firstName = htmlspecialchars(trim($_POST['firstName']));
            $lastName = htmlspecialchars(trim($_POST['lastName']));
            $login = htmlspecialchars(trim($_POST['login']));
            $email = htmlspecialchars(trim($_POST['email']));
            $userId = (int)$_POST['userId']; // получаем ID
            // Получаем картинку
            $avatar = $_FILES['avatar'];

            // проверка на размер картинки
            if ($avatar['size'] > 500000){
                echo "Картинка слишком большая";
            }
            // Проверяем наличие картинки
            if ($avatar['size'] === 0 ){ // Если картинка не приложена
                // обновляем текстовые данные в таблице
                echo '<h1>Картинка не приложена</h1>';
                $query = "UPDATE users
                SET firstName = ?, lastName = ?, login = ?, email = ?
                WHERE id=?";
                $statement = $pdo->prepare($query);
                $statement->execute([$firstName, $lastName, $login, $email, $userId]);
            }else{//если картинка приложена
                //формуриуем путь для новой картинки
                $avatarPath = 'images/'.time().'_'.$avatar['name'];
                // перемещаем новую картинку в нужную папку
                move_uploaded_file($avatar['tmp_name'], $avatarPath);
                // полчаем путь к старой картинке
                $query = "SELECT avatar FROM users WHERE id =?";
                $statement = $pdo->prepare($query);
                $statement->execute([$userId]);
                $oldAvatarPath = $statement->fetch()['avatar'];
                print_r($oldAvatarPath);

                // удаляем старую картинку
                if(file_exists($oldAvatarPath) && $oldAvatarPath !== './images/default.jpg'){
                    unlink($oldAvatarPath);
                }
                // записываем в БД все данные включая путь к новой картинке
                $query = "UPDATE users SET firstName = ?, lastName = ?, login = ?, email = ?, avatar = ?
                            WHERE id=?";
                $statement = $pdo->prepare($query);
                $statement->execute([$firstName, $lastName, $login, $email, $avatarPath, $userId]);
                die();
            }
            // перезагружаем страничку
            header('location: /SQL%20ADD');
            // обновляем данные в БД

        }else{
            echo '<h3 class="error-msg">Заполните все поля</h3>';
        }


    }

    /**
     * Получаем список сотрудников из БД
     */
    $query = "SELECT id, firstName, lastName, login, email, password, avatar 
            FROM users
            ORDER BY id DESC;";
    $statement = $pdo->query($query);
    //print_r($statement->fetchAll());
    ?>
    <!-- отображаем сотрудников -->
    <div class="users">
    <?php while($user = $statement->fetch()):?>
        <div class="user">
            <img src="<?=$user['avatar']?>" alt="<?=$user['firstName']?>.' '.<?=$user['firstName']?>" >
            <p>ID: <span><?=$user['id']?></span>  </p>
            <p>Имя: <span><?=$user['firstName']?></span> </p>
            <p>Фамилия: <span><?=$user['lastName']?></span> </p>
            <p>Логин: <span><?=$user['login']?></span> </p>
            <p>Электронная почта: <span><?=$user['email']?></span> </p>

            <!--Форма для кнопок удаления и редактирования пользователей-->
            <form method="post">
                <!--  Передаем ID для дальнейшей работы -->
                <input type="hidden" name="userId" value="<?=$user['id']?>">

                <input type="submit" name="action" value="Изменить">
                <input type="submit" name="action" value="Удалить">
            </form>
        </div>
    <?php endwhile;?>
    </div>
</body>
</html>
