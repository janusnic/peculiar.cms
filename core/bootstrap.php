<?php
require realpath(__DIR__.'/../').'/config/app.php';

// подключаем файлы ядра
function autoloadsystem($class) {
    $filename = ROOT . "/core/" . $class . ".php";
    if(file_exists($filename)){
       require $filename;
    }
    $filename = ROOT . "/app/models/" . $class . ".php";
    if(file_exists($filename)){
       require $filename;
    }
 }

spl_autoload_register("autoloadsystem");


function view($file, $data = []) 
{
    extract($data);
    
    return require VIEWS."/{$file}.php";
}


$routesFile = ROOT.'/config/routes.php';

Router::load($routesFile)
    ->direct(Request::uri(), REQUEST::method());
