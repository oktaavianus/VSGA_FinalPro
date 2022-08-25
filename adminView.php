<?php require_once "./templateAdmin/header.php" ?>
<?php require_once "./templateAdmin/navbar.php" ?>
<div class="container">
  <div class="row">
    <div class="col mt-5">
      <h3 class="display-3 text-center mt-5">Table All Product <br> EatHere.</h3>
      <div class="mt-5 mb-5">
        <a class="btn btn-primary mb-3" href="adminAdd.php">Add New Menu</a>
        <table class="table table-bordered text-center" id="product-table">
          <thead>
            <tr>
              <th>Product Name</th>
              <th>Category</th>
              <th>Price</th>
              <th>Image</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            require_once './commandPHP/koneksi.php';
            $sql = "SELECT products.id, products.nama, products.category, products.price, products.imgUrl , products.description , category.categoryName FROM products JOIN category ON products.category=category.id ORDER BY products.category ASC;";
            $query = mysqli_query($conn, $sql);
            while ($result = mysqli_fetch_assoc($query)) :
            ?>
              <tr>
                <td><?= $result['nama'] ?> </td>
                <td><?= $result['categoryName'] ?> </td>
                <td>Rp <?php echo number_format($result['price'], 0, ',', '.') ?> ,-</td>
                <td><img src="<?= $result['imgUrl'] ?>" style="width: 200px; height: 100px;"></td>
                <td><?= $result['description'] ?> </td>
                <td>
                  <a href="adminEdit.php?id=<?= $result['id'] ?>" class="btn btn-warning">Edit</a>
                  <a href="adminDelete.php?id=<?= $result['id'] ?>" class="btn btn-danger" onclick="return confirm ('You sure to delete this data?')">Delete</a>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php require_once "./templateAdmin/footer.php" ?>
<script>
  $(document).ready(function() {
    $('#product-table').DataTable({
      'columns': [{
          "width": "200px"
        },
        null,
        {
          "width": "115px"
        },
        null,
        null,
        {
          'searchable': false,
          'sortable': false,
          "width": "200px"
        }
      ],
      "columnDefs": [{
        "className": "dt-center",
        "targets": "_all"
      }]
    })
  });
</script>