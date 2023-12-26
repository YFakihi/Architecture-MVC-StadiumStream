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
        require('../app/views/list_user.php');
    }
    function adduser()
    {
        require('../app/views/adduser.php');
    }
    function insert()
    {
        if ($_SERVER['REQUEST_METHOD']) {
            $name = $_POST["name"];
            $res = $this->userModel->insertUser(array($name));
            if ($res) {
                header("Location:..");
                exit;
            } else
                echo "something is wrong";
        }
    }

    function edituser($id)
    {   $userId=$id;
        $user = $this->userModel->getUserById($id);
        require('../app/views/edituser.php');
    }

    public function updateuser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          
            $updatedData = [
                'name' => $_POST['name'],
                
              
            ];
            $userId= $_POST["id"];
            $success = $this->userModel->updateUser($userId, $updatedData);

            if ($success) {
           
                header("Location:..");
                exit();
            } else {
                echo "Update failed.";
            }
        }
    }


    function delete($id)
    {
       $id+=0; //for change from string to int
        
        $res = $this->userModel->deleteUser($id);
        if ($res) {
            header("Location:../../");
            exit;
        } else
            echo "something is wrong";
    }
}