<?php
require 'DBConnect.php';
$pdo = DBConnect :: getConnection();
print_r ($pdo);

$query = "SELECT idMoonday FROM mooncalendar WHERE data = DATE_FORMAT(NOW(), '%Y-%m-%d');";
$statement = $pdo->query($query);
print_r($statement->fetch());