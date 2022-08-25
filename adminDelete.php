<?php
require_once "./commandPHP/koneksi.php";
$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id=$id";
$query = mysqli_query($conn, $sql);
if ($query) {
  echo "
    <script>
      alert('Success to Delete Product!');
      window.location.href = 'adminView.php';
    </script>";
} else {
  echo "
    <script>
      alert('Failed to Delete Product!');
      window.location.href = 'adminView.php';
    </script>";
}
