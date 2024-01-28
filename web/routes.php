<?php

use core\Router;
use app\controllers\HomeController;
use app\controllers\LoginController;
use app\controllers\ApiCommentController;

$router = new Router();

$router->get('/Projekty/Grill/', HomeController::class, 'index');
$router->get('/Projekty/Grill/login', LoginController::class, 'showLogin');
$router->post('/Projekty/Grill/login', LoginController::class, 'loginUser');

$router->post("/Projekty/Grill/register", LoginController::class, 'registerUser');
$router->get("/Projekty/Grill/register", LoginController::class, 'ShowRegisterForm');
$router->get("/Projekty/Grill/logout", LoginController::class, 'logout');






//zjištění na jaké adrese 
$currentUrl = $_SERVER['REQUEST_METHOD'] . $_SERVER['REQUEST_URI'];
$currentUrl = parse_url($currentUrl)['path'];


$router->najdi_adresu($currentUrl);

