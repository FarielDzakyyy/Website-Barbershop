<?php
require 'function.php'; // koneksi ke database

$success = false;
$error = "";

if (isset($_POST["register"])) {
    $username = strtolower(stripslashes($_POST["username"]));
    $password1 = mysqli_real_escape_string($koneksi, $_POST["password1"]);
    $password2 = mysqli_real_escape_string($koneksi, $_POST["password2"]);

    // Cek username sudah ada atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        $error = "Username already registered";
    } elseif ($password1 !== $password2) {
        $error = "Password confirmation doesn't match";
    } else {
        // Enkripsi password
        $passwordHash = password_hash($password1, PASSWORD_DEFAULT);
        // Simpan user baru
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$passwordHash')";
        if (mysqli_query($koneksi, $query)) {
            header("Location: login.php?success=1");
            exit;
        } else {
            $error = "Registration failed. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Premium Access</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --gold: #D4AF37;
      --gold-light: #FFD700;
      --gold-dark: #996515;
      --black: #121212;
      --black-light: #1E1E1E;
      --white: #FFFFFF;
      --gray: #E0E0E0;
    }
    
    body {
      background-color: var(--black);
      font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      color: var(--white);
    }

    .register-container {
      max-width: 600px;
      width: 100%;
    }

    .register-card {
      background-color: var(--black-light);
      border: 2px solid var(--gold);
      border-radius: 16px;
      box-shadow: 0 15px 40px rgba(212, 175, 55, 0.15);
      overflow: hidden;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
    }

    .register-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 50px rgba(212, 175, 55, 0.25);
    }

    .card-header {
      background: linear-gradient(135deg, var(--black-light), var(--black));
      color: var(--gold);
      padding: 2.5rem;
      text-align: center;
      border-bottom: 2px solid var(--gold);
    }

    .card-header h2 {
      font-weight: 700;
      margin: 0;
      font-size: 2.2rem;
      letter-spacing: 1px;
    }

    .card-body {
      padding: 3rem;
    }

    .form-label {
      color: var(--gold);
      font-weight: 600;
      font-size: 1.1rem;
      margin-bottom: 0.8rem;
    }

    .form-control {
      background-color: rgba(255, 255, 255, 0.05);
      border: 1px solid var(--gold);
      border-radius: 10px;
      padding: 15px 20px;
      transition: all 0.3s;
      color: var(--white);
      font-size: 1.1rem;
      height: auto;
    }

    .form-control:focus {
      background-color: rgba(255, 255, 255, 0.1);
      border-color: var(--gold-light);
      box-shadow: 0 0 0 4px rgba(212, 175, 55, 0.15);
      color: var(--white);
    }

    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.4);
    }

    .input-group-text {
      background-color: transparent;
      border-right: none;
      color: var(--gold);
      font-size: 1.1rem;
      padding-right: 0;
    }

    .input-group .form-control {
      border-left: none;
      padding-left: 10px;
    }

    .btn-register {
      background: linear-gradient(135deg, var(--gold), var(--gold-dark));
      border: none;
      border-radius: 10px;
      padding: 16px;
      font-weight: 700;
      font-size: 1.1rem;
      letter-spacing: 1px;
      transition: all 0.4s;
      position: relative;
      overflow: hidden;
      margin-top: 1rem;
    }

    .btn-register:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 25px rgba(212, 175, 55, 0.4);
    }

    .btn-register:active {
      transform: translateY(0);
    }

    .btn-register::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: 0.5s;
    }

    .btn-register:hover::before {
      left: 100%;
    }

    .link {
      color: var(--gold-light);
      font-weight: 600;
      text-decoration: none;
      transition: all 0.2s;
      position: relative;
      font-size: 1rem;
    }

    .link:hover {
      color: var(--white);
    }

    .link::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--gold-light);
      transition: width 0.3s;
    }

    .link:hover::after {
      width: 100%;
    }

    .password-toggle {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: var(--gold);
      font-size: 1.1rem;
      z-index: 5;
    }

    .alert-notification {
      position: fixed;
      top: 30px;
      right: 30px;
      z-index: 1000;
      border-radius: 10px;
      padding: 1.2rem 1.5rem;
      font-weight: 600;
      box-shadow: 0 5px 20px rgba(0,0,0,0.2);
      animation: slideIn 0.6s forwards, fadeOut 0.6s 4s forwards;
    }

    @keyframes slideIn {
      from { transform: translateX(100%); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }

    @keyframes fadeOut {
      from { opacity: 1; }
      to { opacity: 0; }
    }

    .spinner-border {
      width: 1.3rem;
      height: 1.3rem;
      border-width: 0.2em;
    }

    .password-strength {
      height: 5px;
      background-color: var(--black-light);
      border-radius: 5px;
      margin-top: 5px;
      overflow: hidden;
    }

    .strength-meter {
      height: 100%;
      width: 0;
      transition: width 0.3s, background-color 0.3s;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="register-container">
        <?php if (!empty($error)) : ?>
          <div class="alert alert-danger alert-notification">
            <i class="fas fa-exclamation-circle me-2"></i> <?= $error ?>
          </div>
        <?php endif; ?>

        <div class="register-card">
          <div class="card-header">
            <h2><i class="fas fa-user-plus me-2"></i>REGISTER</h2>
          </div>
          <div class="card-body">
            <form action="" method="post">
              <div class="mb-4">
                <label for="username" class="form-label">USERNAME</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                  <input type="text" class="form-control" id="username" name="username" required placeholder="Enter your username">
                </div>
              </div>
              
              <div class="mb-4 position-relative">
                <label for="password1" class="form-label">PASSWORD</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  <input type="password" class="form-control" id="password1" name="password1" required placeholder="Enter your password">
                  <span class="password-toggle" id="togglePassword1">
                    <i class="far fa-eye"></i>
                  </span>
                </div>
                <div class="password-strength">
                  <div class="strength-meter" id="passwordStrength"></div>
                </div>
              </div>

              <div class="mb-4 position-relative">
                <label for="password2" class="form-label">CONFIRM PASSWORD</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  <input type="password" class="form-control" id="password2" name="password2" required placeholder="Confirm your password">
                  <span class="password-toggle" id="togglePassword2">
                    <i class="far fa-eye"></i>
                  </span>
                </div>
              </div>

              <div class="d-grid gap-2 mb-4">
                <button type="submit" name="register" class="btn btn-register">
                  <span class="register-text">REGISTER</span>
                  <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                </button>
              </div>

              <div class="text-center mt-4 pt-3" style="border-top: 1px solid rgba(212, 175, 55, 0.3);">
                <p class="mb-0" style="font-size: 1.1rem;">Already have an account? <a href="login.php" class="link">LOGIN HERE</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Password toggle
      const togglePassword1 = document.querySelector('#togglePassword1');
      const password1 = document.querySelector('#password1');
      const togglePassword2 = document.querySelector('#togglePassword2');
      const password2 = document.querySelector('#password2');
      
      togglePassword1.addEventListener('click', function() {
        const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
        password1.setAttribute('type', type);
        this.innerHTML = type === 'password' ? '<i class="far fa-eye"></i>' : '<i class="far fa-eye-slash"></i>';
      });

      togglePassword2.addEventListener('click', function() {
        const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
        password2.setAttribute('type', type);
        this.innerHTML = type === 'password' ? '<i class="far fa-eye"></i>' : '<i class="far fa-eye-slash"></i>';
      });

      // Password strength meter
      password1.addEventListener('input', function() {
        const strengthMeter = document.getElementById('passwordStrength');
        const strength = calculatePasswordStrength(this.value);
        
        strengthMeter.style.width = strength.percentage + '%';
        strengthMeter.style.backgroundColor = strength.color;
      });

      function calculatePasswordStrength(password) {
        let strength = 0;
        
        // Length check
        if (password.length > 0) strength += 10;
        if (password.length >= 8) strength += 20;
        if (password.length >= 12) strength += 20;
        
        // Character diversity
        if (/[A-Z]/.test(password)) strength += 15;
        if (/[0-9]/.test(password)) strength += 15;
        if (/[^A-Za-z0-9]/.test(password)) strength += 20;
        
        // Cap at 100
        strength = Math.min(strength, 100);
        
        // Determine color
        let color;
        if (strength < 40) color = '#f72585'; // red
        else if (strength < 70) color = '#f8961e'; // orange
        else color = '#4cc9f0'; // blue/green
        
        return { percentage: strength, color: color };
      }

      // Form submission loading state
      const registerForm = document.querySelector('form');
      if (registerForm) {
        registerForm.addEventListener('submit', function() {
          const submitBtn = this.querySelector('button[type="submit"]');
          const spinner = submitBtn.querySelector('.spinner-border');
          const btnText = submitBtn.querySelector('.register-text');
          
          if (this.checkValidity()) {
            spinner.classList.remove('d-none');
            btnText.textContent = 'REGISTERING...';
            submitBtn.disabled = true;
          }
        });
      }

      // Input focus effects
      const inputs = document.querySelectorAll('.form-control');
      inputs.forEach(input => {
        input.addEventListener('focus', function() {
          this.style.borderColor = 'var(--gold-light)';
          this.parentElement.parentElement.querySelector('.form-label').style.color = 'var(--gold-light)';
        });
        
        input.addEventListener('blur', function() {
          this.style.borderColor = 'var(--gold)';
          this.parentElement.parentElement.querySelector('.form-label').style.color = 'var(--gold)';
        });
      });
    });
  </script>
</body>
</html>