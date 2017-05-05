<?php

// $router->define([
// 	'' => CONTROLLERS.'/index.php',
//     'about' => CONTROLLERS.'/about.php',
//     'contact' => CONTROLLERS.'/contact.php'
// ]);

$router->get('', 'IndexController@index');
$router->get('posts', 'PostsController@index');
$router->get('post/{id}', 'PostsController@view');