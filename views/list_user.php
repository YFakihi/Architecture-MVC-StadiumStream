<?php
include_once'../views/layout.php';
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
                <td> 
                <a href="product/edit?id=<?= $user->id ?>" class="btn btn-warning">update</a>
                <a href="deleteUser.php?id=<?= $user->id ?>" class="btn btn-danger">delete</a>
                </td>
            </tr>
          
        <?php endforeach; ?>
    </tbody>
</table>

<?php include_once'../views/layout.php'; ?>