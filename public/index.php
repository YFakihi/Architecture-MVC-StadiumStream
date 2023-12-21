<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<?php
$pdo = new PDO('mysql:dbname=POO_PHP;host=localhost', 'root', '');

$users = $pdo->query('SELECT * FROM USER')->fetchAll(PDO::FETCH_OBJ);

?>

<table class="table">
    <div class="d-flex justify-content-end p-2">
        <a href="#" class="btn btn-primary">add</a>
    </div>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->mame ?></td> 
                <td> <a href="product/delete" class="btn btn-danger" >delete</a>
                 <a href="product/edit" class="btn btn-warning" >update</a>
            </td>
            </tr>
          
        <?php endforeach; ?>
    </tbody>
</table>


</body>
</html>