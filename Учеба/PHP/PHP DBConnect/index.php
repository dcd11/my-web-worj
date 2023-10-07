<?php
require 'DBConnect.php';
$pdo = DBConnect::getConnection();

print_r($pdo);

// CRUD
// CREATE, READ, UPDATE, DELETE

// CREATE - это создание БД, таблицы
// SELECT - это получение данных из таблц(-ы)
// UPDATE - это обновление существующих данных в таблице
// INSERT - это вставка новых данных в таблицу(-ы)
// ALTER - это измененние таблицы
// DELETE - это удаленние данных из таблицы
// DROP - это удаление таблицы или базы данных

/**
CREATE TABLE books(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(255) NOT NULL,
description VARCHAR NOT NULL,
authorsId INT NOT NULL,
FOREIGN KEY(authorsId) REFERENCES authors(id) // - связка колонки authorsId с таблицей authors с колонкой id
);
 */

/// SELECT id, title, description, firstName, lastName
///  FROM books, authors;
/// SELECT books.id, title, description, firstName, lastName FROM books, authors WHERE authorID = authors.id;
/// SELECT books.id AS booksId, title, description, firstName, authors.id AS authorsId, lastName FROM books,
///  authors WHERE authorsID = authors.id;
/// SELECT news.id, news.title newsTitle, add_date, image, first_name, last_name, avatar, category.title AS catTitle, classname FROM news, authors, category WHERE author_id = authors.id AND category_id = category.id;
///

