<?php
require'../app/models/User.php';
function listusers(){
    $users = list_user();
    require_once'../views/list_user.php';
}
