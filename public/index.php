<?php

use Core\Router;
use App\Controllers\HomeController;

define("BASE_VIEW_PATH", dirname(__DIR__) . DIRECTORY_SEPARATOR . 'ressources' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

require "../vendor/autoload.php";

$router = Router::getInstance();

$router->register('/', [HomeController::class, 'index']);

$router->register('/contact', function(){
    echo "Contact page";
});



echo $router->resolve($_SERVER['REQUEST_URI']);