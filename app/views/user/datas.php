<div class="container">
    <h1>User Datas</h1>
    <button class="btn btn-primary mt-2 mb-3" onclick="window.location.href='<?=BASE_URL?>/user/add'">Add New User</button>
    <table class="table table-dark table-striped">
        <thead>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Address</th>
            <th>Detail</th>
        </thead>
        <tbody>
            <?php foreach($data['users'] as $user){?>
            <tr>
                <td><?=$user['id'];?></td>
                <td><?=$user['username'];?></td>
                <td><?=$user['email'];?></td>
                <td><?=$user['password'];?></td>
                <td><?=$user['address'];?></td>
                <td><button class="btn btn-primary" onclick="window.location.href='<?=BASE_URL?>/user/detail/<?=$user['id'];?>'">Detail</button></td>
            </tr>
            <?php };?>
        </tbody>
    </table>
</div>