<div class="container">
    <form action="<?=BASE_URL?>/user/tambahUser" method="POST" class="w-50">
      <div class="form-group mb-3">
        <label for="inputUsername" class="mb-2">Username</label>
        <input type="text" class="form-control" id="inputUsername" aria-describedby="username" placeholder="Enter Username" name="username">
      </div>
      <div class="form-group mb-3">
        <label for="exampleInputEmail1" class="mb-2">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
      </div>
      <div class="form-group mb-3">
        <label for="exampleInputPassword1" class="mb-2">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
      </div>
      <div class="form-group mb-3">
        <label for="inputAddress" class="mb-2">Address</label>
        <input type="text" class="form-control" id="inputAddress" aria-describedby="Address" placeholder="Enter Address" name="address">
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>