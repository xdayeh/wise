<?php

use MVC\controller\HomeController;
use MVC\core\Router;

Router::group([], function (){
    Router::get('/', [HomeController::class, 'index']);
    Router::get('about', [HomeController::class, 'about']);
});

Router::get('team', [HomeController::class, 'team']);