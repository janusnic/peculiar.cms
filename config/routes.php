<?php

$router->define([
	'' => CONTROLLERS.'/index.php',
    'about' => CONTROLLERS.'/about.php',
    'contact' => CONTROLLERS.'/contact.php'
]);

// $router->define([
//     '' => 'IndexController',
//     'about' => 'AboutController',
//     'contact' => 'ContactController'
// ]);