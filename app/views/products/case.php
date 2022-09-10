<div class="container-fluid">
    <div class="row">
        <?= $this->view('templates/sidebar');?>
        <div class="col-lg-10 bg-dark-blue p-4">
            <h1>Case</h1>
            <h4 class="text-white mb-3">Black Case</h4>
            <div class="card-container d-flex flex-row align-items-center">
                <?php foreach($data['products'] as $product){ ?>
                <div class="card p-4 mx-4 mh-products overflow-auto scrollbar-none" style="width: 18rem;">
                <img src="<?=BASE_URL?>/images/<?= $product['product-img']; ?>" class="card-img-top" alt="cpu-logo">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['product-title']; ?></h5>
                        <p class="card-text product-desc overflow-auto scrollbar-none"><?= $product['product-desc'];?></p>
                        <a href="<?= BASE_URL ?>/products/detail/<?=$product['product-unikey']?>" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-success">Buy</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>