<div class="container">
    <h1>Product Datas</h1>
    <?php (new Flasher)->flash(); ?>
    <div class="row">
        <div class="col-lg-6">
            <form class="d-flex flex-row my-2 my-lg-0 w-50" action="<?= BASE_URL?>/products/searchProduct" method="POST">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
            <p class="my-3">Product Type</p>
            <form action="<?= BASE_URL ?>/products/productType" method="POST">
                <select name="type" id="region" class="mb-3 p-1 rounded">
                    <option value="All">All</option>
                    <option value="CPU">CPU</option>
                    <option value="GPU">GPU</option>
                    <option value="RAM">RAM</option>
                    <option value="Storage">Storage</option>
                    <option value="Fan">Fan</option>
                    <option value="Case">Case</option>
                </select>
                <button type="submit" class="btn btn-primary"><i class="fas fa-list"></i></button>
            </form>
            <button class="btn btn-primary mt-2 mb-3" onclick="window.location.href='<?=BASE_URL?>/products/addProduct'">Add New Products</button>
        </div>
    </div>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <th>Id</th>
            <th>Unikey</th>
            <th>Title</th>
            <th>Description</th>
            <th>Type</th>
            <th>Detail</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?php foreach($data['products'] as $product){?>
            <tr>
                <td><?= $product['id']; ?></td>
                <td><?= $product['product-unikey']; ?></td>
                <td><?= $product['product-title']; ?></td>
                <td><?= $product['product-desc']; ?></td>
                <td><?= $product['type']; ?></td>
                <td><a href="<?= BASE_URL ?>/products/detail/<?= $product['product-unikey'];?>" class="btn btn-primary"><i class="fas fa-info"></i></a></td>
                <td><a href="<?= BASE_URL ?>/products/edit/<?= $product['product-unikey'];?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
                <td><a href="<?= BASE_URL ?>/products/deleteProduct/<?= $product['id']; ?>" onclick="confirm('Are you sure want to delete this data?')" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>