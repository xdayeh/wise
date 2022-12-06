<?php

namespace Wise;

use Wise\Controller\BlockController;
use Wise\Controller\DoctorsController;
use Wise\Controller\MajorsController;
use Wise\Controller\StudentsController;
use Wise\Core\Application;
use Wise\Controller\SiteController;
use Wise\Controller\AuthController;

require_once 'init.php';
$config = [
    'userClass' => \Wise\Model\user::class
];

$app = new Application(APP_PATH, $config);
$app->router->get('/',[SiteController::class, 'Home']);
$app->router->get('/about', [SiteController::class, 'About']);
$app->router->get('/language', [SiteController::class, 'Language']);

$app->router->get('/auth', [AuthController::class, 'login']);
$app->router->post('/auth', [AuthController::class, 'login']);

$app->router->get('/logout', [AuthController::class, 'logout']);
$app->router->get('/dash', [AuthController::class, 'dash']);
$app->router->get('/profile', [AuthController::class, 'profile']);

$app->router->get('/majors', [MajorsController::class, 'home']);
$app->router->get('/doctors', [DoctorsController::class, 'home']);
$app->router->get('/students', [StudentsController::class, 'home']);
$app->router->get('/block', [BlockController::class, 'home']);
$app->run();