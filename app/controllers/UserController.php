<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {
        $users = $this->userModel->getUsers();
        require(__DIR__.'/../../views/list_user.php');
    }
    function adduser(){
        require(__DIR__.'/../../views/adduser.php');
    }
    function insert(){
        
    }
}