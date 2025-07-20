<?php
require 'function.php';

$success = false;
$error = "";

if (isset($_POST["register"])) {
  $username = strtolower(stripslashes($_POST["username"]));
  $password1 = mysqli_real_escape_string($koneksi, $_POST["password1"]);
  $password2 = mysqli_real_escape_string($koneksi, $_POST["password2"]);

  $result = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    $error = "Username sudah terdaftar.";
  } elseif ($password1 !== $password2) {
    $error = "Konfirmasi password tidak sesuai.";
  } else {
    $passwordHash = password_hash($password1, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$passwordHash')";
    if (mysqli_query($koneksi, $query)) {
      echo "<script>
        document.addEventListener('DOMContentLoaded', function () {
          Swal.fire({
            icon: 'success',
            title: 'Berhasil Daftar!',
            text: 'Silakan login sekarang.',
            confirmButtonColor: '#ffc800'
          }).then(() => {
            window.location.href = 'login.php';
          });
        });
      </script>";
    } else {
      $error = "Gagal mendaftar. Silakan coba lagi.";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Barber - Barbers & Hair Cutting</title>
  <meta name="title" content="Barber - Barbers & Hair Cutting">
  <meta name="description" content="This is a barber html template made by codewithsadee">
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    :root {
      --main-color: #ffe600;
      --accent-color: #ffcc00;
      --bg-color: #0e0e0e;
      --text-color: #ffffff;
      --input-bg: rgba(255, 255, 255, 0.1);
      --label-color: #cccccc;
      --card-bg: rgba(255, 255, 255, 0.05);
    }

    [data-theme="light"] {
      --main-color: #ffc800;
      --accent-color: #f9aa00;
      --bg-color: #ffffff;
      --text-color: #1a1a1a;
      --input-bg: rgba(240, 240, 240, 1);
      --label-color: #666;
      --card-bg: rgba(255, 255, 255, 0.95);
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background: var(--bg-color);
      color: var(--text-color);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      transition: background 0.5s ease, color 0.5s ease;
    }

    #register-card {
      background: var(--card-bg);
      backdrop-filter: blur(14px);
      border-radius: 20px;
      padding: 40px;
      max-width: 400px;
      width: 90%;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
      transform: translateY(60px);
      opacity: 0;
      position: relative;
      z-index: 1;
    }

    h2 {
      text-align: center;
      font-weight: 700;
      color: var(--main-color);
      margin-bottom: 30px;
    }

    .input-group {
      position: relative;
      margin-bottom: 30px;
    }

    .input-group input {
      width: 100%;
      padding: 14px 14px;
      border-radius: 12px;
      background-color: var(--input-bg);
      color: var(--text-color);
      background-clip: padding-box;
      border: none;
      font-size: 1rem;
      outline: none;
    }

    .input-group label {
      position: absolute;
      left: 14px;
      top: 14px;
      font-size: 1rem;
      color: var(--label-color);
      pointer-events: none;
      background: transparent;
      transition: all 0.3s ease;
    }

    .input-group input:focus+label,
    .input-group input:not(:placeholder-shown)+label {
      top: -10px;
      left: 10px;
      font-size: 0.75rem;
      transform: scale(0.95);
      color: var(--main-color);
      background: var(--card-bg);
      padding: 0 5px;
    }

    input:-webkit-autofill {
      box-shadow: 0 0 0 1000px var(--input-bg) inset !important;
      -webkit-text-fill-color: var(--text-color) !important;
      transition: background-color 5000s ease-in-out 0s;
    }

    .btn-register {
      width: 100%;
      padding: 14px;
      border: none;
      border-radius: 15px;
      font-weight: bold;
      font-size: 1rem;
      background: linear-gradient(to right, var(--main-color), var(--accent-color));
      color: #000;
      box-shadow: 0 6px 0 #bfa500, 0 10px 30px rgba(0, 0, 0, 0.4);
      transition: all 0.3s ease;
    }

    .btn-register:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 0 #a08d00, 0 14px 40px rgba(0, 0, 0, 0.6);
    }

    .btn-register:active {
      transform: scale(0.97);
    }

    .form-footer {
      text-align: center;
      margin-top: 20px;
      font-size: 0.9rem;
    }

    .form-footer a {
      color: var(--main-color);
      font-weight: 600;
      text-decoration: none;
    }

    .form-footer a:hover {
      color: var(--text-color);
      text-decoration: underline;
    }

    .mode-toggle {
      position: absolute;
      top: 16px;
      right: 16px;
      background: rgba(0, 0, 0, 0.1);
      border: 1px solid var(--main-color);
      padding: 8px 12px;
      border-radius: 30px;
      color: var(--main-color);
      cursor: pointer;
      font-size: 0.85rem;
      transition: background 0.3s ease, transform 0.3s ease;
    }

    .mode-toggle:hover {
      background: var(--main-color);
      color: #000;
      transform: scale(1.05);
    }

    .alert {
      font-size: 0.85rem;
      padding: 10px;
      border-radius: 8px;
      text-align: center;
      margin-bottom: 15px;
    }

    @media (max-width: 480px) {
      #register-card {
        padding: 30px 20px;
      }
    }
  </style>
</head>

<body data-theme="light">
  <div id="particles-js" style="position: fixed; top: 0; left: 0; z-index: -1; width: 100%; height: 100%;"></div>
  <div id="register-card">
    <button class="mode-toggle" onclick="toggleMode()" id="modeToggle">☀️ Light Mode</button>
    <h2>Register Akun</h2>

    <?php if (!empty($error)) : ?>
      <script>
        document.addEventListener('DOMContentLoaded', function () {
          Swal.fire({
            icon: 'error',
            title: 'Gagal Daftar!',
            text: '<?= $error ?>',
            confirmButtonColor: '#ffc800'
          });
        });
      </script>
    <?php endif; ?>

    <form action="" method="post" autocomplete="off">
      <div class="input-group">
        <input type="text" name="username" id="username" placeholder=" " autocomplete="off" required>
        <label for="username">Username</label>
      </div>
      <div class="input-group">
        <input type="password" name="password1" id="password1" placeholder=" " autocomplete="new-password" required>
        <label for="password1">Password</label>
      </div>
      <div class="input-group">
        <input type="password" name="password2" id="password2" placeholder=" " autocomplete="new-password" required>
        <label for="password2">Konfirmasi Password</label>
      </div>
      <button type="submit" name="register" class="btn-register">Daftar</button>
    </form>

    <div class="form-footer">
      Sudah punya akun? <a href="login.php">Login di sini</a>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script>
    window.addEventListener("load", () => {
      gsap.to("#register-card", {
        opacity: 1,
        y: 0,
        duration: 1,
        ease: "power3.out"
      });
    });

    const body = document.body;
    const toggle = document.getElementById("modeToggle");
    const savedTheme = localStorage.getItem("theme");

    if (savedTheme) {
      body.setAttribute("data-theme", savedTheme);
      toggle.innerHTML = savedTheme === "dark" ? "🌙 Dark Mode" : "☀️ Light Mode";
    }

    function toggleMode() {
      const currentTheme = body.getAttribute("data-theme");
      const newTheme = currentTheme === "dark" ? "light" : "dark";
      body.setAttribute("data-theme", newTheme);
      localStorage.setItem("theme", newTheme);
      toggle.innerHTML = newTheme === "dark" ? "🌙 Dark Mode" : "☀️ Light Mode";
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  <script>
    particlesJS("particles-js", {
      "particles": {
        "number": {
          "value": 80,
          "density": {
            "enable": true,
            "value_area": 800
          }
        },
        "color": {
          "value": "#ffffff"
        },
        "shape": {
          "type": "circle"
        },
        "opacity": {
          "value": 0.5
        },
        "size": {
          "value": 3
        },
        "line_linked": {
          "enable": true,
          "distance": 150,
          "color": "#ffffff",
          "opacity": 0.4,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 2
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": true,
            "mode": "repulse"
          },
          "onclick": {
            "enable": true,
            "mode": "push"
          },
          "resize": true
        },
        "modes": {
          "repulse": {
            "distance": 100
          },
          "push": {
            "particles_nb": 4
          }
        }
      },
      "retina_detect": true
    });
  </script>
</body>

</html>