<?php
    
    require_once  '../vendor/autoload.php';

//     use App\Controllers\UserController;
    
// use App\Config\Router;



//     $userController = new UserController();
   

//     $route = isset($_GET['route']) ? $_GET['route'] : 'home';
//     // var_dump($route);
//     switch ($route) {


//         case 'home':
//             $userController->index();
//             break;
//         }

require '../app/config/Router.php';
$a = new Router();