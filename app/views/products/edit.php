<div class="container">
    <?php $product = $data['product']; ?>
    <form action="<?=BASE_URL?>/products/tambahProduct" method="POST" class="w-50">
    <input type="hidden" id="id" name="id" value="<?= $product['id'];?>">
      <div class="form-group mb-3">
        <label for="inputProductTitle" class="mb-2">Product Title</label>
        <input type="text" class="form-control" id="inputProductTitle" aria-describedby="Product Title" placeholder="Enter Product Title" name="productTitle" value="<?= $product['product-title'];?>">
      </div>

        <input type="hidden" class="form-control" id="productUnikey" aria-describedby="Product Unikey" placeholder="Enter Product Title" name="productUnikey" value="<?= $product['product-unikey'];?>">

      <div class="form-group mb-3 d-flex flex-column">
        <label for="exampleInputEmail1" class="mb-2">Product Description</label>
        <textarea name="productDesc" id="productDesc" cols="30" rows="10"><?= $product['product-desc'];?></textarea>
      </div>
      <div class="form-group mb-3">
        <label for="productImage" class="mb-2">Product Image</label>
        <input type="text" class="form-control" id="productImg" placeholder="file" name="productImg" value="<?= $product['product-img'];?>">
        
      </div>
      <div class="form-group mb-3">
        <label for="productType" class="mb-2">Product Type</label>
        <select name="productType" id="productType" value="<?= $product['product-type'];?>>
            <option value="cpu">CPU</option>
            <option value="gpu">GPU</option>
            <option value="ram">RAM</option>
            <option value="storage">Storage</option>
            <option value="fan">Fan</option>
            <option value="case">Case</option>
        </select>
      </div>
      <!-- <div class="form-group mb-3">
        <label for="productImage" class="mb-2">Product Price</label>
        <input type="number" class="form-control" id="productPrice" placeholder="10000" name="productPrice">
      </div> -->
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>