<div class="container">
    <h1>User Datas</h1>
    <?php (new Flasher)->flash();?>
    <button class="btn btn-primary mt-2 mb-3" onclick="window.location.href='<?=BASE_URL?>/user/add'">Add New User</button>
    <table class="table table-dark table-striped">
        <thead>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Address</th>
            <th>Detail</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?php foreach($data['users'] as $user){?>
            <tr>
                <td><?=$user['id'];?></td>
                <td><?=$user['username'];?></td>
                <td><?=$user['email'];?></td>
                <td><?=$user['password'];?></td>
                <td><?=$user['address'];?></td>
                <td><a href="<?=BASE_URL?>/user/detail/<?=$user['id'];?>" class="btn btn-primary"><i class="fas fa-info"></i></a></td>
                <td><a href="<?= BASE_URL?>/user/edit/<?= $user['id'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
                <td><a href="<?=BASE_URL?>/user/deleteUser/<?= $user['id'] ?>" class="btn btn-danger" onclick="confirm('Are you sure want to delete this data?')"><i class="fas fa-trash"></i></a></td>
            </tr>
            <?php };?>
        </tbody>
    </table>
</div>