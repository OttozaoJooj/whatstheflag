<?php

require_once('../vendor/autoload.php');

use app\utils\Funcs;
use app\core\Router;
use app\core\Code;

Funcs::displayErrors();

$REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];

$REQUEST_URI = $_SERVER['REQUEST_URI'];

$REQUEST_POST_PARAM = $_POST;

$REQUEST_GET_PARAM = $_GET;

$REQUEST_FILES = $_FILES;

//Funcs::dd($REQUEST_GET_PARAM);


$router = new Router($REQUEST_URI);

$controllerName = $router->getController();

$namespaceController = 'app\\controllers\\';

$controller = new ($namespaceController.$controllerName.'Controller');

if($REQUEST_METHOD == 'POST' && $REQUEST_POST_PARAM){
    $controller->create($REQUEST_POST_PARAM, $REQUEST_FILES);
    
} else if($REQUEST_METHOD == 'GET' && $REQUEST_GET_PARAM){
    $controller->search($REQUEST_GET_PARAM);

} else{
    $controller->show();

}



Code::success();





