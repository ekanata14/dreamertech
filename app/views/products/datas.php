<div class="container">
    <h1>Product Datas</h1>
    <?php (new Flasher)->flash(); ?>
    <button class="btn btn-primary mt-2 mb-3" onclick="window.location.href='<?=BASE_URL?>/products/addProduct'">Add New Products</button>
    <table class="table table-dark table-striped">
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
                <td><?= $product['product-type']; ?></td>
                <td><a href="<?= BASE_URL ?>/products/detail/<?= $product['product-unikey'];?>" class="btn btn-primary"><i class="fas fa-info"></i></a></td>
                <td><a href="<?= BASE_URL ?>/products/edit/<?= $product['product-unikey'];?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
                <td><a href="<?= BASE_URL ?>/products/deleteProduct/<?= $product['id']; ?>" onclick="confirm('Are you sure want to delete this data?')" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>