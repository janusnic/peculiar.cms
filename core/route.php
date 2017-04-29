<?php

define('ROUTES', [
	'' => 'controllers/index.php',
	'about' => 'controllers/about.php',
	'contact' => 'controllers/contact.php'
]);

function uri()
    {
      if (isset($_SERVER['REQUEST_URI']) and !empty($_SERVER['REQUEST_URI']))
        return trim($_SERVER['REQUEST_URI'], '/');
    }

function direct($uri)
    {
        if (array_key_exists($uri, ROUTES)) {
            return ROUTES[$uri];
        }

        echo('No route defined for this URI.');
    }

$uri = uri();

$direct = direct($uri);

$controllerFile = realpath(__DIR__.'/../').'/app/'.$direct;

if(file_exists($controllerFile)){
   include_once($controllerFile);
    $result = true;
  }
else echo 'No controller defined for this path';
