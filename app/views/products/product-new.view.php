

<?php require loadView('./layouts/header')?>
<form action="" method="post">
<div class="border col-lg-8 mx-auto mt-4 p-5 shadow">
    <h3>Add Product</h3>
    <!-- name -->
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="product-name">
</div>
<!-- product demographics -->
<div class="d-flex  ">
      <span class="input-group-text">Qty</span>
    <input name="qty" value="1" style="width:8rem; margin-right: 2rem;" type="number" class="form-control" placeholder="Quantity" aria-label="Username">
  <span class="input-group-text">Price</span>
  <input name="price" value="0.00" step=".05" style="width:8rem;" type="number" class="form-control" placeholder="Server" aria-label="Server">
</div>
<!-- barcode -->
<div class="mb-3 mt-3">
  <label for="exampleFormControlInput1" class="form-label">Barcode</label>
  <input  name="barcode" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Barcode">
</div>
<!-- description -->
<div class="mt-3">
  <label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
  <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<!-- file input -->
<div class="mb-3 mt-3">
  <label for="formFile" class="form-label">Product Image</label>
  <input name="image" class="form-control" type="file" id="formFile">
</div>
<!-- btn box -->
<div class="d-flex justify-content-between mt-3">
    <button type="button" class="btn btn-danger shadow">cancel</button>
    <button type="button" class="btn btn-success">Save</button>
</div>
</div>
</div>

</form>



<?php require loadView('./layouts/footer')?>
