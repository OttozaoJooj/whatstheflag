<?php

require_once('../vendor/autoload.php');

use app\utils\Funcs;
use app\core\Router;
use app\core\Code;

Funcs::displayErrors();

$REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];

$REQUEST_URI = $_SERVER['REQUEST_URI'];

$REQUEST_PARAM = $_POST;

$REQUEST_FILES = $_FILES;


$router = new Router($REQUEST_URI);

$controllerName = $router->getController();

$namespaceController = 'app\\controllers\\';

$controller = new ($namespaceController.$controllerName.'Controller');

if($REQUEST_METHOD == 'POST'){
    //Funcs::dd($REQUEST_FILES);
    $controller->create($REQUEST_PARAM, $REQUEST_FILES);
    
} else{
    
    $controller->show();
}


Code::success();





