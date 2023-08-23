<?php 
require 'function.php';

if(isset($_POST["login"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // query
    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result) === 1)
    {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) )
        {
            if( isset($error))  
            {?>
<?php
            }
            header('Location: dashboard.php');                 
            exit;
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  </head>

  <body class="bg-gradient-primary">
    <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-12 col-md-9">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">
                        WELCOME TO PLTMH DASHBOARD MONITORING
                      </h1>
                    </div>
                    <form action="#" method="POST" class="user">
                      <div class="form-group">
                        <input
                          type="text"
                          name="username"
                          class="form-control form-control-user"
                          id="username"
                          aria-describedby="emailHelp"
                          autocomplete="off"
                          placeholder="Masukkan Username"
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="text"
                          name="password"
                          class="form-control form-control-user"
                          id="exampleInputPassword"
                          placeholder="Password"
                          autocomplete="off"
                        />
                      </div>

                      <button
                        type="submit"
                        name="login"
                        class="btn btn-primary btn-user btn-block"
                      >
                        Login
                      </button>

                      <hr />
                    </form>

                    <div class="text-center">
                      <a class="small" href="register.php">Buat Akun Baru</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Footer -->
              <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                    <span
                      >Copyright &copy; PT Parametrik Solusi Integrasi
                      2022</span
                    >
                  </div>
                </div>
              </footer>
              <!-- End of Footer -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>
</html>
