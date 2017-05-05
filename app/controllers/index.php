<?php
$title = 'HOME PAGE';

$db = require ROOT.'/config/db.php';

$con = Connection::make($db['database']);

$sql = "SELECT id, title, content, DATE_FORMAT(`create_at`, '%d.%m.%Y %H:%i:%s') AS formated_date, status FROM posts ORDER BY id ASC";

$con->exec("set names utf8");
       
//Выполняем запрос
$res = $con->query($sql);

//Получаем и возвращаем результат
$posts = $res->fetchAll(PDO::FETCH_ASSOC);

// require MODELS.'/Post.php';

// $posts = Post::index();

include_once VIEWS.'/index.php';
