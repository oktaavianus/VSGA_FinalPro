<!DOCTYPE html>

<?php
session_start();
if (isset($_SESSION['username'])) {
  header("Location: homeView.php");
  exit;
}
?>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - EatHere.</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container-fluid banner">
    <div class="container">
      <div class="card login-form">
        <div class="card-body">
          <?php
          if (isset($_GET['msg'])) {
          ?>
            <div class="alert alert-danger text-center mb-3 mt-0" role="alert">
              <strong><?php echo $_GET['msg']; ?></strong>
            </div>
          <?php } ?>
          <div class="text-center">
            <h2 class="card-title text-dark">Welcome to <br> Eat Here.</h2>
            <h6 class="card-subtitle text-muted mb-5 fw-bolder">
              Please login first!
            </h6>
          </div>
          <form method="POST" action="commandPHP/loginProcess.php">
            <!-- Username Input -->
            <label for="username" class="form-label text-dark">Username</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg></span>
              <input type="text" class="form-control" id="username" name="username" placeholder="Input your username here" required />
            </div>
            <!-- Password Input -->
            <label for="password" class="form-label text-dark">Password</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
                  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z" />
                </svg></span>
              <input type="password" class="form-control" id="password" name="password" placeholder="Input your password" required />
            </div>
            <!-- <div class="d-flex justify-content-between">
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" />
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <div>
              <a href="#" class="forgotpassword">Forgot Password?</a>
            </div>
          </div> -->
            <div class="d-grid mt-5">
              <button type="submit" class="btn btn-success btn-login" name="Login">
                Login
              </button>
            </div>

            <div class="mt-4 text-center text-dark">
              <label>Not have account ?
                <a href="registerView.php" class="forgotpassword">Create an account</a></label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>