
<?php
   
   require_once __DIR__ . '/../vendor/autoload.php';
use App\controllers\UserController;
    $userController = new UserController();

    $route = isset($_GET['route']) ? $_GET['route'] : 'getuser';
    //var_dump($route);
    switch ($route) {


        case 'layout':
            $UserController->userintrface();
            break;
            case 'getuser':
                $UserController->index();
                break;


        }