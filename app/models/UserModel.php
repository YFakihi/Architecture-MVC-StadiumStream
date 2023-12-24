<?php

namespace App\Models;

use App\Config\Connection;


use PDO;

class UserModel extends Connection

{
    // public function register($name, $email, $password, $confpassword, $role)
    // {
    //     $conn = Connection::getConn();

    //     if ($password !== $confpassword) {
    //         return false;
    //     }

    //     $passhash = password_hash($password, PASSWORD_DEFAULT);

    //     $role = 'condidate';

    //     $stmt = $conn->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)");

    //     if ($password === $confpassword) {
    //         $stmt->bindValue(1, $name);
    //         $stmt->bindValue(2, $email);
    //         $stmt->bindValue(3, $passhash);
    //         $stmt->bindValue(4, $role);

    //         $result = $stmt->execute();
    //         if ($result) {
    //             return true;
    //         }
    //     }


    //     return false;
    // }


    // public function login($email, $password)
    // {
    //     $conn = Connection::getConn();
    //     $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");

    //     $stmt->bindValue(1, $email);

    //     $stmt->execute();
    //     $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //     if ($user && password_verify($password, $user['password'])) {
    //         return $user;
    //     }

    //     return false;
    // }
    public function getUsers()
    {
        $conn = Connection::getConn();
        $stmt = $conn->prepare("SELECT * FROM user");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}