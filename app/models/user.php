<?php

function connect()
{
    return new PDO('mysql:dbname=POO_PHP;host=localhost', 'root', '');

}

function list_user()
{
    $pdo = connect();

    return $pdo->query('SELECT * FROM USER')->fetchAll(PDO::FETCH_OBJ);
}

