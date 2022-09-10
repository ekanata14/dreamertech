<nav class="navbar navbar-expand-lg navbar bg-transparent">
  <div class="container">
    <div class="row d-flex justify-content-between align-items-center w-100">
        <div class="col-lg-2">
            <h1 class="fw-bold"><a class="navbar-brand" href="#"><?=$data['title'];?></a></h1>
        </div>
        <div class="col-lg-4">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active text-uppercase fw-semibold" aria-current="page" href="<?= BASE_URL;?>/home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-uppercase fw-semibold" aria-current="page" href="<?= BASE_URL; ?>/products">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-uppercase fw-semibold" aria-current="page" href="<?= BASE_URL?>/services">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-uppercase fw-semibold" aria-current="page" href="#">About Us</a>
                </li>
                <?php if($_SESSION['user']['role'] == 'admin'){ ?>
                <li class="nav-item">
                  <a class="nav-link active text-uppercase fw-semibold" aria-current="page" href="<?= BASE_URL?>/user/userData">USER</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-uppercase fw-semibold" aria-current="page" href="<?= BASE_URL?>/products/productData">PRODUCTS</a>
                </li>
                <?php } else {?>
                  
                <?php } ?>
              </ul>
            </div>
        </div>
        <div class="col-lg-2">
          <?php if(!isset($_SESSION['user'])){?>  
          <button class="btn btn-primary" onclick="window.location.href='<?=BASE_URL?>/user'">LOGIN</button>
          <?php } else{?>  
            <button class="btn btn-primary" onclick="window.location.href='<?=BASE_URL?>/user/detail/<?= $_SESSION['user']['id']?>'"><?=$_SESSION['user']['username'];?></button>
            <button class="btn btn-primary" onclick="window.location.href='<?=BASE_URL?>/logout'">LOGOUT</button>
          <?php } ?>
        </div>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>