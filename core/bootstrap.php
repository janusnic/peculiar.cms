<?php
require realpath(__DIR__.'/../').'/config/app.php';
require ROOT.'/core/Connection.php';

require ROOT.'/core/Request.php';
require ROOT.'/core/Router.php';

function view($file, $data = []) 
{
    extract($data);
    
    return require VIEWS."/{$file}.php";
}


$routesFile = ROOT.'/config/routes.php';

// require Router::load($routesFile)
//     ->direct(Request::uri());


Router::load($routesFile)
    ->direct(Request::uri(), REQUEST::method());