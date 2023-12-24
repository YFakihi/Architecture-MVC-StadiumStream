
<?php


include_once'../app/views/nav.php';
include_once'../app/views/layout.php';
include_once'../app/views/adduser.php';



?>

<table class="table">
    <div class="d-flex justify-content-end p-2">
        <!-- <a href="user/adduser" class="btn btn-primary">add</a> -->
    </div>
    <h2>All Users</h2>
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
            <td><?= $user['id'] ?></td>
            <td><?= $user['mame'] ?></td>
                <td> 
                <a href="user/edit/<?=$user['id']?>" class="btn btn-warning">update</a>
                <a href="user/delete/<?=$user['id']?>" class="btn btn-danger">delete</a>
                </td>
            </tr>
          
        <?php endforeach; ?>
    </tbody>
</table>

<?php include_once'../app/views/layout.php'; ?>




