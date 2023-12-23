<?php
require '../app/models/User.php';

function listusers() {
    $userList = new UserList();
    $users = $userList->listUsers(); 

    
    require_once '../views/list_user.php';
}
