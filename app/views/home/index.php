<div class="container mt-5">
    <?php if($_SESSION['user']['role'] == "admin"){?>
    <div class="row d-flex align-items-center">
        <div class="col-lg-5">
            <img src="<?=BASE_URL?>/images/adminImage.svg" alt="homeImage" class="w-100">
        </div>
        <div class="col-lg-7">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Admin Access</h2>
                </div>
                <div class="col-lg-8">
                    <hr>
                    <p>This is for admin access page</p>    
                </div>
            </div>
        </div>
    </div>
    <?php } else{ ?>
    <div class="row d-flex align-items-center">
        <div class="col-lg-5">
            <img src="<?=BASE_URL?>/images/homeImage.svg" alt="homeImage" class="w-100">
        </div>
        <div class="col-lg-7">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Search Technology For Your Needs</h2>
                </div>
                <div class="col-lg-8">
                    <hr>
                    <p>We are serving interesting technology for your needs, lifestyle, business, and some kind of peat technology.</p>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>