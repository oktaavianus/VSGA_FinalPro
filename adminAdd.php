<?php require_once "./templateAdmin/echo <script>.php" ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-6">
      <div class="card" style="margin-top: 25px;">
        <div class="card-echo <script> text-center">
          <h3 class="display-6">Add New Menu</h3>
        </div>
        <div class="card-body">
          <form method="POST" id="form-add-new-product">
            <div class="mb-4">
              <label for="productName" class="form-label">Product Name :</label>
              <input type="text" name="productName" id="productName" class="form-control">
            </div>
            <div class="mb-4">
              <label for="productCategory" class="form-label">Product Category :</label>
              <select class="form-select" name="productCategory" id="productCategory">
                <option selected disabled>-- Select Category --</option>
                <?php
                require "./commandPHP/koneksi.php";
                $queryCategory = mysqli_query($conn, "SELECT * FROM category");
                while ($category = mysqli_fetch_assoc($queryCategory)) :
                ?>
                  <option value="<?= $category['id'] ?>"><?= $category['categoryName'] ?></option>
                <?php endwhile; ?>
              </select>
            </div>
            <div class="mb-4">
              <label for="productPrice" class="form-label">Product Price :</label>
              <input type="number" name="productPrice" id="productPrice" class="form-control">
            </div>
            <div class="mb-4">
              <label for="productImg" class="form-label">Image Link:</label>
              <input type="text" name="productImg" id="productImg" class="form-control">
            </div>
            <div class="mb-4">
              <label for="productDescription" class="form-label">Description :</label>
              <textarea class="form-control" id="productDescription" name="productDescription" rows="3"></textarea>
            </div>
            <div class="text-center">
              <a href="./adminView.php" class="btn btn-success" style="margin-right: 15px;">Back to Table</a>
              <button type="reset" class="btn btn-secondary" style="margin-right: 15px;">Reset Submit</button>
              <button type="submit" class="btn btn-primary">Submit New Menu</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
if ($_POST) {
  require_once "./commandPHP/koneksi.php";
  $productName = $_POST['productName'];
  $productCategory = $_POST['productCategory'];
  $productPrice = $_POST['productPrice'];
  $productImg = $_POST['productImg'];
  $productDescription = $_POST['productDescription'];
  $sqlInsert = "INSERT INTO products (category, nama, price, imgUrl, description) VALUES ($productCategory, '$productName', '$productPrice', '$productImg', '$productDescription')";
  $queryInsert = mysqli_query($conn, $sqlInsert);
  if ($queryInsert) {
    echo "
      <script>
        alert('Success to Add New Menu!');
        window.location.href = 'adminView.php';
      </script>";
  } else {
    echo "
      <script>
        alert('Failed to Add New Menu!');
        window.location.href = 'adminAdd.php';
      </script>";
  }
}
?>

<?php require_once "./templateAdmin/footer.php" ?>
<script>
  $(document).ready(function() {
    $('#form-add-new-product').submit(function() {
      let productName = $('#productName').val();
      let productCategory = $('#productCategory').val();
      let productPrice = $('#productPrice').val();
      let productImg = $('#productImg').val();
      if (productName == '' || productCategory == '' || productImg == '' || productPrice == '') {
        alert('Please fullfy the form')
        return false
      } else if (!$.isNumeric(productPrice)) {
        alert('Product Price MUST be a Number')
        return false
      } else if (productPrice < 0) {
        alert('Product Price Cant below 0')
        return false
      }
    })
  });
</script>