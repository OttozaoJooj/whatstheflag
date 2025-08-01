<?php
namespace app\core;

class Router{

    private array $routes = [
        '/' => 'Home',
        '' => 'Home',
        'add-flag' => 'AddFlag',
        'search-flag' => 'SearchFlag'
        
    ];

    private array $routesByURI;

    public function __construct($URI)
    {   
        $this->routesByURI = explode('/', $URI);

        // Remove first element
        array_shift($this->routesByURI);

    }

    public function getController(){
        
        return $this->routes[$this->routesByURI[0]] ?? Code::abort(404);   
    }
}



?>