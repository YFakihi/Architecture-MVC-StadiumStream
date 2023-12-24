<?php
include_once'../views/layout.php';
include_once'../views/adduser.php';

?>

<table class="table">
    <!-- <div class="d-flex justify-content-end p-2">
        <a href="user/adduser" class="btn btn-primary">add</a>
    </div> -->



    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Add User</button>

<!-- Modal -->
<form  method="post" action= "./insert">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="f_name">Name:</label>
                        <input type="text" name="f_name" class="form-control">
                    </div>    
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" name="add_f" value="Add">
                </div>
            </div>
        </div>
    </div>
</form>



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
                <a href="product/edit" class="btn btn-warning">update</a>
                <a href="deleteUser.php>" class="btn btn-danger">delete</a>
                </td>
            </tr>
          
        <?php endforeach; ?>
    </tbody>
</table>

<?php include_once'../views/layout.php'; ?>