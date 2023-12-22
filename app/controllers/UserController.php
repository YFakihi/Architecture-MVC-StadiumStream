<?php
require '../app/models/User.php';

 // Assuming the file is named UserList.php and contains the UserList class

function listusers() {
    $userList = new UserList(); // Correct class name instantiation
    $users = $userList->listUsers(); // Correct method name

    
    require_once '../views/list_user.php';
}
