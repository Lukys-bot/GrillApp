<?php

namespace core;

use app\TestClass;


class Router
{
    public $routes = [];

    // Přidává novou trasu do routovacího systému
    public function addRoute($url, $controller, $method)
    {
        $this->routes[$url] = ['controller' => $controller, 'method' => $method];
    }

    // Zpracovává aktuální URL a volá příslušný kontroler a metodu
    public function dispatch($url)
    {
        // Ověření existence trasy pro dané URL
        if (array_key_exists($url, $this->routes)) {
            $route = $this->routes[$url];

            // Získání názvu kontroleru a metody
            $controllerName = $route['controller'];
            $methodName = $route['method'];

            
            // Vytvoření instance kontroleru
            $controller = new $controllerName();

            $controller = new TestClass();
            //$controller->index();            
            //$_POST[]
            $controller->$methodName();
        } 
        
        else {

            echo "??? 404???";
        }
    }
}