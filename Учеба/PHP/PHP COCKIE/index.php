<?php


$userName = 'Ivan';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    print_r($_POST);

    echo "Привет, $_POST[firstName] $_POST[lastName]";
}else{ ?>
<form method="POST">
    <div>
        <labe>Имя:</labe>
        <input type="text" name="firstName">
    </div>
    <div>
        <labe>Фамилия:</labe>
        <input type="text" name="lastName">
    </div>
    <input type="submit" value="Отправить">
</form>
<?php }

