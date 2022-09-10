<div class="container">
    <h1>User Datas</h1>
    <?php (new Flasher)->flash();?>
    <div class="row">
        <div class="col-lg-6">
            <form class="d-flex flex-row my-2 my-lg-0 w-50" action="<?= BASE_URL?>/user/searchUser" method="POST">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
            <p class="my-3">Region</p>
            <form action="<?= BASE_URL ?>/user/userRegion" method="POST">
                <select name="region" id="region" class="mb-3 p-1 rounded">
                    <option value="All">All</option>
                    <option value="Denpasar">Denpasar</option>
                    <option value="Badung">Badung</option>
                    <option value="Tabanan">Tabanan</option>
                    <option value="Gianyar">Gianyar</option>
                </select>
                <button type="submit" class="btn btn-primary"><i class="fas fa-list"></i></button>
            </form>
            <button class="btn btn-primary mt-2 mb-3" onclick="window.location.href='<?=BASE_URL?>/user/add'">Add New User</button>
        </div>
    </div>
    
    <table class="table table-dark table-striped">
        <thead>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Region</th>
            <th>Role</th>
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
                <td><?=$user['region'];?></td>
                <td><?=$user['role'];?></td>
                <td><a href="<?=BASE_URL?>/user/detail/<?=$user['id'];?>" class="btn btn-primary"><i class="fas fa-info"></i></a></td>
                <td><a href="<?= BASE_URL?>/user/edit/<?= $user['id'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
                <td><a href="<?=BASE_URL?>/user/deleteUser/<?= $user['id'] ?>" class="btn btn-danger" onclick="confirm('Are you sure want to delete this data?')"><i class="fas fa-trash"></i></a></td>
            </tr>
            <?php };?>
        </tbody>
    </table>
</div>