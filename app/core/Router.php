<?php
namespace app\core;

use app\utils\Funcs;

class Router{

    private array $routes = [
        '/' => 'Home',
        '' => 'Home',
        '/home' => 'Home',
        'add-flag' => 'AddFlag',
        'search-flag' => 'SearchFlag'
        
    ];

    private array $routesByURI;

    public function __construct($URI)
    {   
        $this->routesByURI = explode('/', parse_url($URI)['path']);

        // Remove first element
        array_shift($this->routesByURI);

    }

    public function getController(){
        
        return $this->routes[$this->routesByURI[0]] ?? Code::abort(404);   
    }
}



?>