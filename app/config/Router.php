<?php

class Router
{
    private $controller = 'App\Controllers\UserController';
    private $method = 'index';
    private $param = array();

    public function __construct()
    {
        $this->route();
    }



    public function route()
    {
        $uri = $_SERVER['REQUEST_URI'];
        
       
        $uri = explode('/', trim(strtolower($uri), '/'));
        $a = array_splice($uri, 0, 1);
        if (isset($uri[0])) {
            $controllerName = ucwords($uri[0]) . 'Controller';
            $controller = 'App\Controllers\\' . $controllerName;
            unset($uri[0]);
            if (class_exists($controller)) {
                $this->controller = $controller;
            } else {
                // require '../views/404/404.php';
                echo'invalid';
            }
        }

        $class = new $this->controller;

        if (isset($uri[1]) && method_exists($class, $uri[1])) {
            $this->method = $uri[1];
            unset($uri[1]);
        }

        if (isset($uri[2])) {
            $this->param = $uri;
        }

        call_user_func_array([$class, $this->method], $this->param);
    }
}