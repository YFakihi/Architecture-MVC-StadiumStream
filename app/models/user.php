<?php
class UserList {
     private $pdo;

    public function __construct() {
        $this->pdo = new PDO('mysql:dbname=POO_PHP;host=localhost', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function listUsers() {
        return $this->pdo->query('SELECT * FROM user')->fetchAll(PDO::FETCH_OBJ); 
        
    }

    public function updateUser($userId, $newName) {
        $stmt = $this->pdo->prepare('UPDATE user SET mame = :mame WHERE id = :id');
        $stmt->execute(['mame' => $newName, 'id' => $userId]);
    }
}