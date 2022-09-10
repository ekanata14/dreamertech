<div class="container">
    <form action="<?=BASE_URL?>/products/tambahProduct" method="POST" class="w-50">
      <div class="form-group mb-3">
        <label for="inputProductTitle" class="mb-2">Product Title</label>
        <input type="text" class="form-control" id="inputProductTitle" aria-describedby="Product Title" placeholder="Enter Product Title" name="productTitle">
      </div>

        <input type="hidden" class="form-control" id="productUnikey" aria-describedby="Product Unikey" placeholder="Enter Product Title" name="productUnikey" value="<?= md5(time() . mt_rand(1,1000000))?>">

      <div class="form-group mb-3 d-flex flex-column">
        <label for="exampleInputEmail1" class="mb-2">Product Description</label>
        <textarea name="productDesc" id="productDesc" cols="30" rows="10"></textarea>
      </div>
      <div class="form-group mb-3">
        <label for="productImage" class="mb-2">Product Image</label>
        <input type="text" class="form-control" id="productImage" placeholder="file" name="productImg">
        
      </div>
      <div class="form-group mb-3">
        <label for="productType" class="mb-2">Product Type</label>
        <select name="productType" id="productType">
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
      <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>