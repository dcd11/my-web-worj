<?php
require_once 'DBConnect.php';
class gallery
{
    public static function getImage(){
        $pdo = DBConnect::getConnection();
        $query = "SELECT *
                  FROM gallery;";
        return $pdo->query($query)->fetchAll();
    }
}