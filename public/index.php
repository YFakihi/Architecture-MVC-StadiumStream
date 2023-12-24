<?php
    session_start();
    require_once __DIR__ . '/../vendor/autoload.php';

    use App\Controllers\UserController;
   

    $userController = new UserController();
   

    $route = isset($_GET['route']) ? $_GET['route'] : 'home';
    // var_dump($route);
    switch ($route) {


        case 'home':
            $userController->index();
            break;
        }