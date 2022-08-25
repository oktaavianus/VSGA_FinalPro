<?php
//* memakai koneksi
include 'koneksi.php';

//* membuat variabel untuk menyimpan data yang dikirimkan dari form
$username = $_POST['username'];
$password = $_POST['password'];

$fetchUser = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
$dataUser = mysqli_fetch_array($fetchUser);
$dbPassword = $dataUser['password'];
//* menjalankan query
if(mysqli_num_rows($fetchUser) == 1) {
  if ($dataUser['whois'] == 'admin') {
    session_start();
    echo "<script>window.location.href= '../adminView.php'</script>";
    $_SESSION['whois'] = $dataUser['whois'];
  } else if(password_verify($password, $dbPassword) && $dataUser['whois'] == 'user') {
    session_start();
    $_SESSION['username'] = $dataUser['username'];
    echo "<script>window.location.href= '../homeView.php'</script>";
  } else {
    echo "<script>window.location.href= '../index.php?msg=Wrong Username or Password'</script>";
  }
} else {
  echo "<script>window.location.href= '../index.php?msg=Wrong Username or Password'</script>";
}
?> 