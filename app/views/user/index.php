<div class="container d-flex align-items-center login-regis-container" style="height: 100%;">
    <div class="row d-flex">
        <div class="login-container bg-white rounded py-5 ">
            <div class="row d-flex align-items-center">
                <div class="col-lg-5">
                    <img src="<?=BASE_URL?>/images/homeImage.svg" alt="homeImage" class="w-100">
                </div>
                <div class="col-lg-6">
                    <?php (new Flasher)->flash();?>
                    <h1>Welcome to DreamerTech</h1>
                    <h3 class="text-white">Make a Good Tech With Us</h3>
                    <form action="<?=BASE_URL?>/login" method="POST" class="mb-3">
                        <div class="form-group mb-3">    
                            <p>Username or Email</p>
                            <input type="email" name="email" class="w-100 py-2 px-3">
                        </div>
                        <div class="form-group">
                            <p>Password</p>
                            <input type="password" name="password" class="w-100 py-2 px-3">
                        </div>
                        <button class="btn btn-primary mt-3">LOGIN</button>
                    </form>
                    <a href="<?=BASE_URL?>/user/regis" class="text-primary">Doesn't have an Account? Register Now!</a>
                </div>
            </div>
        </div>
    </div>
</div>