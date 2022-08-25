<?php
  include 'koneksi.php';
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $sqlRegister = "INSERT INTO users (email, username, whois, password) VALUES ('$email', '$username', 'user', '$password')";

    $query = mysqli_query($conn, $sqlRegister);

    if($query) {
      echo "
      <script>
        alert('Register Success!');
        window.location.href = '../index.php';
      </script>";
    }
  ?>