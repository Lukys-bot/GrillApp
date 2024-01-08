<?php
use core\Router;
//use app\controllers\commentController;
//use app\controllers\checkUSeInDatabase;
//use app\controllers\LoginController;

$router = new Router();

//definice cest 
$router->addRoute("/Projekty/Grill/", 'app\TestClass.php', 'index');
$router->addRoute("/Projekty/Grill/", 'App\TestClass.php', 'index');
$router->addRoute("/Projekty/Grill/", 'App\TestClass.php', 'index');



$currentUrl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

echo "<pre>";
//var_dump($router->routes);
var_dump($currentUrl);
echo "</pre>";

$router->dispatch($currentUrl);

