<div class="container">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$data['user']['username'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?=$data['user']['email'];?></h6>
    <p class="card-text"><?=$data['user']['password'];?></p>
    <p class="card-text"><?=$data['user']['region'];?></p>
    <a href="<?=BASE_URL?>/user/userData" class="card-link">Back</a>
  </div>
</div>
    <h1></h1>
    <p></p>
    <p></p>
</div>