<?php
require_once 'models/DBConnect.php';
class Feedback
{
    /**
     * Получение отзывов из БД
     */
    public static function getfeedbackList(){
        $pdo = DBConnect::getConnection();
        $query = "SELECT *
                  FROM feedback
                  ORDER BY addDate DESC;";
        return $pdo->query($query)->fetchAll();
    }
    public static function updateApproved($approved, $id){
        $pdo = DBConnect::getConnection();
        $query = "UPDATE feedback
                  SET approved = ?
                  WHERE id = ?;";
        $statement = $pdo->prepare($query);
        $statement->execute([$approved, $id]);
        //$feedbackItem['approved'] = $approved;
        //header('location: moderate.php');

    }
    /**
     * Функция добавления нового комментария
     */
    public static function addNewFeedback($feedback){
        $pdo = DBConnect::getConnection();
        $query = "INSERT INTO feedback(fName, lName, email, type, comment)
                  VALUES (?, ?, ?, ?, ?);";
        $statement = $pdo->prepare($query);
        $statement->execute([$feedback['fName'], $feedback['lName'], $feedback['email'], $feedback['type'], $feedback['comment']]);
        return $pdo->lastInsertId(); // получаем ID
    }
}