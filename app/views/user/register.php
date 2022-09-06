<div class="container d-flex align-items-center login-regis-container">
    <div class="row d-flex">
        <div class="login-container bg-white rounded p-5">
            <div class="row d-flex align-items-center">
                <div class="col-lg-5">
                    <img src="<?=BASE_URL?>/images/userRegisImage.png" alt="homeImage" class="w-100">
                </div>
                <div class="col-lg-6">
                    <h1>Create an Account</h1>
                    <form action="<?=BASE_URL?>/user/regisUser" method="POST" class="mb-3">
                        <div class="form-group mb-3">
                            <p>Username</p>
                            <input type="text" name="username" class="w-100 py-2 px-3">
                        </div>
                        <div class="form-group mb-3">
                            <p>Email</p>
                            <input type="email" name="email" class="w-100 py-2 px-3">
                        </div>
                        <div class="form-group mb-3">
                            <p>Password</p>
                            <input type="password" name="pass" class="w-100 py-2 px-3">
                        </div>
                        <div class="form-group mb-3">
                            <p>Address</p>
                            <input type="text" name="address" class="w-100 py-2 px-3">
                        </div>
                        <button class="btn btn-primary mt-3">Register</button>
                    </form>
                    <a href="<?=BASE_URL?>/user" class="text-primary">Doesn't have an Account? Register Now!</a>
                </div>
            </div>
        </div>
    </div>
</div>