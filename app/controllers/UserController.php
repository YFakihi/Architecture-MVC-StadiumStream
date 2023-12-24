<?php


namespace App\controllers;
use App\models\UserModel;
class UserController{

    private $userModel;

    public function __construct()
    {
        $this->userModel = new  userModel;
    }

public function userintrface(){

    require_once __DIR__.'/../../views/layout.php=';
    
}



    public function indesx() {
        // $userList = new UserModel();

        $users = $this->userModel->listUsers(); 
        require_once __DIR__ . '/../../views/list_user.php';
       
    }
     

}
