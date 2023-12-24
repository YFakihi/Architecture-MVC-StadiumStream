<?php

namespace App\Models;

use App\Config\Connection;


use PDO;

class UserModel extends Connection

{

    public function getUsers()
    {
        $conn = Connection::getConn();
        $stmt = $conn->prepare("SELECT * FROM user");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}