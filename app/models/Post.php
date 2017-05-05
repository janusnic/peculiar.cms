<?php

/**
 * Модель для работы с posts
 */

class Post {

    
    public static function index () {
        
        $db = require ROOT.'/config/db.php';

        $con = Connection::make($db['database']);


        //Подготавливаем данные

        $sql = "SELECT id, title, content, DATE_FORMAT(`create_at`, '%d.%m.%Y %H:%i:%s') AS formated_date, status FROM posts ORDER BY id ASC";

        $con->exec("set names utf8");
       
        
        //Выполняем запрос
        $res = $con->query($sql);

        //Получаем и возвращаем результат
        $posts = $res->fetchAll(PDO::FETCH_ASSOC);

        return $posts;

    }

    
 }