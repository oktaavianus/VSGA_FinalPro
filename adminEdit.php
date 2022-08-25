<?php require_once "./templateAdmin/header.php" ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-6">
      <div class="card" style="margin-top: 25px;">
        <div class="card-header text-center">
          <h3 class="display-6">Edit Products</h3>
        </div>
        <div class="card-body">
            <?php
              require_once "./commandPHP/koneksi.php";
              $id = $_GET['id'];
              $sql = "SELECT * FROM products WHERE id = $id";
              $query = mysqli_query($conn, $sql);
              $result = mysqli_fetch_array($query);
            ?>
          <form method="POST" id="form-add-new-product">
            <div class="mb-4">
              <label for="productName" class="form-label">Product Name :</label>
              <input type="text" name="productName" id="productName" class="form-control" value="<?= $result['nama']?>">
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
                  <option value="<?= $category['id'] ?>" <?php if ($result['category'] == $category['id']) {echo 'selected';}?>><?= $category['categoryName'] ?></option>
                <?php endwhile; ?>
              </select>
            </div>
            <div class="mb-4">
              <label for="productPrice" class="form-label">Product Price :</label>
              <input type="number" name="productPrice" id="productPrice" class="form-control" value="<?= $result['price'] ?>">
            </div>
            <div class="mb-4">
              <label for="productImg" class="form-label">Image Link:</label>
              <input type="text" name="productImg" id="productImg" class="form-control" value="<?= $result['imgUrl']?>">
            </div>
            <div class="mb-4">
              <label for="productDescription" class="form-label">Description :</label>
              <textarea class="form-control" id="productDescription" name="productDescription" rows="3"><?= $result['description'] ?></textarea>
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
  $id = $_GET['id'];
  $productName = $_POST['productName'];
  $productCategory = $_POST['productCategory'];
  $productPrice = $_POST['productPrice'];
  $productImg = $_POST['productImg'];
  $productDescription = $_POST['productDescription'];
  $sqlInsert = "UPDATE products SET category=$productCategory, nama='$productName', price=$productPrice, imgUrl='$productImg', description='$productDescription' WHERE id=$id";
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