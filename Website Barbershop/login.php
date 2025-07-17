<?php
session_start();
require 'function.php';

// Tampilkan alert sukses jika redirect dari register
$successMessage = "";
if (isset($_GET['success']) && $_GET['success'] == 1) {
    $successMessage = "Pendaftaran berhasil! Silakan login.";
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");


    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            $_SESSION["username"] = $username;
            
            echo "<script>
                    alert('Login berhasil!');
                    document.location.href = 'home.html';
                  </script>";
            exit;
        }
    }
    
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Akun</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: goldenrod;
    }

    .card-custom {
      background-color: black;
      color: #ffffff;
    }

    .form-label {
      color: #ffffff;
    }

    .form-control {
      background-color: #f8f9fa;
      color: #000000;
    }

    h2 {
      color: #ffffff;
    }

    a {
      color: #ffe600;
      font-weight: bold;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
      color: #ffffff;
    }

    .g-recaptcha {
      transform: scale(1);
      transform-origin: center;
    }
  </style>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card card-custom shadow-lg" style="width: 400px;">
      <div class="card-body">
        <h2 class="text-center mb-4">LOGIN</h2>

        <?php if (!empty($successMessage)) : ?>
          <div class="alert alert-success text-center"><?= $successMessage ?></div>
        <?php endif; ?>

        <?php if (isset($error)) : ?>
          <div class="alert alert-danger text-center">Username, Password, atau reCAPTCHA salah!</div>
        <?php endif; ?>

        <form action="" method="post">
          <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>

          <div class="mb-3 d-flex justify-content-center">
            <div class="g-recaptcha" data-sitekey="6LcV-YQrAAAAABw7skLUJUnWzLUmJ5_0EsRONieB"></div>
          </div>

          <button type="submit" name="login" class="btn btn-light w-100 text-dark fw-bold mb-2">Login</button>
        </form>

        <p class="text-center mt-3">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
      </div>
    </div>
  </div>
</body>
</html>
