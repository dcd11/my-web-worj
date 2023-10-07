<?php
require 'DBConnect.php';
$pdo = DBConnect::getConnection();

$query = "SELECT books.id AS bookId, title, description, authors.id AS authorId, firstName, lastName 
FROM books, authors
WHERE authorsId = authors.id;";

$statement = $pdo->query($query);

$books = $statement->fetchAll();


// кодируем в JSON и отдаем в ответ
echo json_encode($books);
