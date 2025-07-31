<?php

require_once('../vendor/autoload.php');

use app\utils\Funcs;
use app\core\Router;
use app\core\Code;


Funcs::displayErrors();



$router = new Router($_SERVER['REQUEST_URI']);

//Funcs::dd($router->getController());

$controllerName = $router->getController();

$namespaceController = 'app\\controllers\\';

$controller = new ($namespaceController.$controllerName.'Controller');

$controller->show();

Code::success();





