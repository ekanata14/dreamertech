<div class="container">
    <h1>Edit User</h1>
    <?php $user = $data['user'];?>
    <form action="<?=BASE_URL?>/user/editUser" method="POST" class="w-50">
        <input type="hidden" id="id" name="id" value="<?= $user['id'];?>">
      <div class="form-group mb-3">
        <label for="inputUsername" class="mb-2">Username</label>
        <input type="text" class="form-control" id="inputUsername" aria-describedby="username" placeholder="Enter Username" name="username" value="<?= $user['username'];?>">
      </div>
      <div class="form-group mb-3">
        <label for="exampleInputEmail1" class="mb-2">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?= $user['email'];?>">
      </div>
      <div class="form-group mb-3">
        <label for="exampleInputPassword1" class="mb-2">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" value="<?= $user['password'];?>">
      </div>
      <div class="form-group mb-3">
        <label for="inputAddress" class="mb-2">Address</label>
        <input type="text" class="form-control" id="inputAddress" aria-describedby="Address" placeholder="Enter Address" name="address" value="<?= $user['address'];?>">
      </div>
      <input type="hidden" id="role" name="role" value="<?=$user['role'];?>">
      
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>