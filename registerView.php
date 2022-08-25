<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register - LOGO COMPANY</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container-fluid bannerRegister">
    <div class="container">
      <div class="card register-form">
        <div class="card-body">
          <div class="text-center">
            <h2 class="card-title text-dark">Register to <br> Eat Here.</h2>
            <h6 class="card-subtitle text-muted mb-5 fw-bolder">
              Please register here
            </h6>
          </div>
          <form method="POST" action="commandPHP/registerProcess.php">
            <!-- Email -->
            <label for="email" class="form-label text-dark">Email</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                  <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z" />
                  <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z" />
                </svg></span>
              <input type="email" class="form-control" id="email" name="email" placeholder="Input your email here" />
            </div>
            <!-- /Email -->
            <!-- Username -->
            <label for="username" class="form-label text-dark">Username</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg></span>
              <input type="text" class="form-control" id="username" name="username" placeholder="Input your username here" required />
            </div>
            <!-- /Username -->
            <!-- Password -->
            <label for="password" class="form-label text-dark">Password</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
                  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z" />
                </svg></span>
              <input type="password" class="form-control" id="password" name="password" placeholder="Input your password" required />
            </div>
            <!-- /Password -->
            <div class="d-grid mt-3">
              <button type="submit" class="btn btn-success btn-login" name="Register">
                Register
              </button>
            </div>
          </form>
          <div class="mt-4 text-center text-dark">
            <label>Aleready have account ?
              <a href="index.php" class="forgotpassword">Login here</a></label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!-- SCRIPT PHP -->

</body>

</html>