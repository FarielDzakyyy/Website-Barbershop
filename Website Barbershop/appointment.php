<?php

session_start();
if (!isset($_SESSION['username'])) {
     header("Location: login.php");
     exit;
}

require 'function.php'; // koneksi harus ada di file ini

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'] ?? '';
    $email = $_POST['email_address'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $category = $_POST['category'] ?? '';
    $date = $_POST['date'] ?? '';
    $time = $_POST['time'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validasi dasar
    if (empty($name) || empty($email) || empty($phone) || empty($date) || empty($time)) {
        echo "<script>alert('Semua field wajib diisi!'); window.location.href='appointment.php';</script>";
        exit;
    }

    try {

        $cekSql = "SELECT * FROM appointments WHERE date = ? AND time = ?";
        $cekStmt = $koneksi->prepare($cekSql);
        $cekStmt->bind_param("ss", $date, $time);
        $cekStmt->execute();
        $result = $cekStmt->get_result();

        if ($result->num_rows > 0) {
            echo "<script>alert('Maaf, waktu tersebut sudah dipesan. Silakan pilih waktu lain.'); window.location.href='appointment.php';</script>";
            exit;
        } else {

            $sql = "INSERT INTO appointments (name, email_address, phone, category, date, time, message) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $koneksi->prepare($sql);
            $stmt->bind_param("sssssss", $name, $email, $phone, $category, $date, $time, $message);

            if ($stmt->execute()) {
                echo "<script>alert('Appointment berhasil dibuat!'); window.location.href='booking.php';</script>";
            } else {
                echo "<script>alert('Gagal insert: " . $stmt->error . "'); window.location.href='gagal.php';</script>";
            }

            $stmt->close();
        }

        $cekStmt->close();
    } catch (Exception $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- 
    - primary meta tags
  -->
     <title>Barber - Barbers & Hair Cutting</title>
     <meta name="title" content="Barber - Barbers & Hair Cutting">
     <meta name="description" content="This is a barber html template made by codewithsadee">

     <!-- 
    - favicon
  -->
     <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

     <!-- 
    - custom css link
  -->
     <link rel="stylesheet" href="./assets/css/style.css">

     <!-- 
    - google font link
  -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik:wght@300,400;700&display=swap"
          rel="stylesheet">

     <!-- 
    - flaticon
  -->
     <link rel="stylesheet" href="assets/css/flaticon.min.css">

     <!-- 
    - preload images
  -->
     <link rel="preload" as="image" href="./assets/images/hero-banner.jpg">

</head>

<body id="top">

     <!-- 
    - #HEADER
  -->

     <header class="header">

          <div class="header-top">
               <div class="container">

                    <ul class="header-top-list">

                         <li class="header-top-item">
                              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

                              <p class="item-title">Call Us :</p>

                              <a href="tel:08816564510" class="item-link">08816564510</a>
                         </li>

                         <li class="header-top-item">
                              <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                              <p class="item-title">Opening Hour :</p>

                              <p class="item-text">Monday - Saturday, 09 am - 09 pm</p>
                         </li>

                         <li>
                              <ul class="social-list">

                                   <li>
                                        <a href="https://www.facebook.com/share/169VN1R3TT/" class="social-link">
                                             <ion-icon name="logo-facebook"></ion-icon>
                                        </a>
                                   </li>

                                   <li>
                                        <a href="https://www.instagram.com/farieldzaky?igsh=dWwzeTV5ZGRsMHUx" class="social-link">
                                             <ion-icon name="logo-instagram"></ion-icon>
                                        </a>
                                   </li>

                                   <li>
                                        <a href="https://www.tiktok.com/@farieldzakyyy?_t=ZS-8xgNs3UW0u4&_r=1" class="social-link">
                                             <ion-icon name="logo-tiktok"></ion-icon>
                                        </a>
                                   </li>

                                   <li>
                                        <a href="contact.php" class="social-link">
                                             <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                        </a>
                                   </li>

                              </ul>
                         </li>

                    </ul>

               </div>
          </div>

          <div class="header-bottom" data-header>
               <div class="container">

                    <a href="#" class="logo">
                         Haircut
                         <span class="span">Hair Salon</span>
                    </a>

                    <nav class="navbar container" data-navbar>
                         <ul class="navbar-list">

                              <li class="navbar-item">
                                   <a href="home.php" class="navbar-link" data-nav-link>Home</a>
                              </li>

                              <li class="navbar-item">
                                   <a href="services.php" class="navbar-link" data-nav-link>Services</a>
                              </li>

                              <li class="navbar-item">
                                   <a href="pricing.php" class="navbar-link" data-nav-link>Pricing</a>
                              </li>

                              <li class="navbar-item">
                                   <a href="gallery.php" class="navbar-link" data-nav-link>Gallery</a>
                              </li>

                              <li class="navbar-item">
                                   <a href="appointment.php" class="navbar-link" data-nav-link>Appointment</a>
                              </li>

                              <li class="navbar-item">
                                   <a href="contact.php" class="navbar-link" data-nav-link>Contact</a>
                              </li>

                         </ul>
                    </nav>

                    <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
                         <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <a href="appointment.php" class="btn has-before">
                         <span class="span">Appointment</span>

                         <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </a>

               </div>
          </div>

     </header>

     <main>
          <article>

               <!-- 
        - #HERO
      -->

               <section class="section hero has-before has-bg-image" id="home" aria-label="home"
                    style="background-image: url('./assets/images/hero-banner.jpg')">
                    <div class="container">

                         <h1 class="h1 hero-title">Barbers & Hair Cutting</h1>

                         <p class="hero-text">
                              Selamat datang di Haircut. Dapatkan potongan rambut terbaik dan pengalaman grooming yang
                              tak terlupakan.
                              Kami menggabungkan tradisi dengan gaya modern untuk penampilan yang sempurna.
                         </p>

                         <a href="#" class="btn has-before">
                              <span class="span">Explore Our Services</span>

                              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                         </a>

                    </div>
               </section>

               <!-- 
        - #APPOINTMENT
      -->

               <section class="section appoin" id="appointment" aria-label="appointment">
                    <div class="container">

                         <div class="appoin-card">

                              <figure class="card-banner img-holder" style="--width: 250; --height: 774;">
                                   <img src="./assets/images/appoin-banner-1.jpg" width="250" height="774"
                                        loading="lazy" alt="" class="img-cover">
                              </figure>

                              <div class="card-content">

                                   <h2 class="h2 section-title">Make Appointment</h2>

                                   <p class="section-text">
                                        Jadwalkan janji temu Anda sekarang dan dapatkan pengalaman layanan terbaik dari
                                        kami. Cepat, mudah, dan pastikan tempat Anda!
                                   </p>

                                   <form id="appointmentForm" action="appointment.php" method="POST" class="appoin-form">

                                        <div class="input-wrapper">
                                             <div class="input-group">
                                                  <input type="text" name="name" placeholder="Your Full Name" required
                                                       class="input-field" id="nameInput">
                                                  <div class="input-icon">
                                                       <ion-icon name="person-outline"></ion-icon>
                                                  </div>
                                             </div>

                                             <div class="input-group">
                                                  <input type="email" name="email_address" placeholder="Email Address"
                                                       required class="input-field" id="emailInput">
                                                  <div class="input-icon">
                                                       <ion-icon name="mail-outline"></ion-icon>
                                                  </div>
                                             </div>
                                        </div>

                                        <div class="input-wrapper">
                                             <div class="input-group">
                                                  <input type="text" name="phone" placeholder="Phone Number" required
                                                       class="input-field" id="phoneInput">
                                                  <div class="input-icon">
                                                       <ion-icon name="call-outline"></ion-icon>
                                                  </div>
                                             </div>

                                             <div class="input-group">
                                                  <select name="category" class="input-field" id="serviceSelect" required>
                                                       <option value="" disabled selected>Select service</option>

                                                       <!-- Hair Services -->
                                                       <optgroup label="Hair Services">
                                                            <option value="Hair Cutting Style">💇 Hair Cutting Style</option>
                                                            <option value="Hair Cutting & Fitting">💈 Hair Cutting & Fitting</option>
                                                            <option value="Hair Washing">🧴 Hair Washing</option>
                                                            <option value="Hair Color & Wash">🎨 Hair Color & Wash</option>
                                                            <option value="Multi Hair Colors">🌈 Multi Hair Colors</option>
                                                       </optgroup>

                                                       <!-- Facial Treatments -->
                                                       <optgroup label="Facial Treatments">
                                                            <option value="Facial & Face Wash">🧖 Facial & Face Wash</option>
                                                            <option value="Shaving & Facial">✂️ Shaving & Facial</option>
                                                            <option value="Stylist Shaving">🪒 Stylist Shaving</option>
                                                       </optgroup>

                                                       <!-- Body Treatments -->
                                                       <optgroup label="Body Treatments">
                                                            <option value="Body Massage">💪 Body Massage</option>
                                                            <option value="Backbone Massage">🦴 Backbone Massage</option>
                                                       </optgroup>

                                                       <!-- Wellness -->
                                                       <optgroup label="Wellness">
                                                            <option value="Beauty & Spa">💆 Beauty & Spa</option>
                                                            <option value="Meditation & Massage">🧘 Meditation & Massage</option>
                                                       </optgroup>
                                                  </select>
                                                  <div class="input-icon">
                                                       <ion-icon name="cut-outline"></ion-icon>
                                                  </div>
                                             </div>
                                        </div>

                                        <div class="input-wrapper">
                                             <div class="input-group">
                                                  <input type="date" name="date" required class="input-field date" id="dateInput">
                                                  <div class="input-icon">
                                                       <ion-icon name="calendar-outline"></ion-icon>
                                                  </div>
                                             </div>

                                             <div class="input-group">
                                                  <input type="time" name="time" required class="input-field" id="timeInput">
                                                  <div class="input-icon">
                                                       <ion-icon name="time-outline"></ion-icon>
                                                  </div>
                                             </div>
                                        </div>

                                        <div class="input-group">
                                             <textarea name="message" placeholder="Write Message (Optional)"
                                                  class="input-field" id="messageInput"></textarea>
                                             <div class="input-icon">
                                                  <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                             </div>
                                        </div>

                                        <button type="submit" class="form-btn" id="submitBtn">
                                             <span class="span">Book Appointment</span>
                                             <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                        </button>

                                        <div id="formSuccess" class="form-success-message">
                                             <ion-icon name="checkmark-circle" class="success-icon"></ion-icon>
                                             <p>Your appointment has been booked successfully!</p>
                                        </div>

                                        <div id="formError" class="form-error-message">
                                             <ion-icon name="alert-circle" class="error-icon"></ion-icon>
                                             <p>Please fill in all required fields correctly.</p>
                                        </div>

                                   </form>

                              </div>

                              <figure class="card-banner img-holder" style="--width: 250; --height: 774;">
                                   <img src="./assets/images/appoin-banner-2.jpg" width="250" height="774"
                                        loading="lazy" alt="" class="img-cover">
                              </figure>

                         </div>

                    </div>
               </section>

          </article>
     </main>

     <div class="footer-bottom">
          <p class="copyright">
               &copy; 2025 <a href="#" class="copyright-link">Haircut</a>. All Rights Reserved.
          </p>
     </div>

     <!-- 
    - #BACK TO TOP
  -->

     <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
          <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
     </a>

     <!-- 
    - custom js link
  -->
     <script src="./assets/js/script.js" defer></script>

     <!--- ionicon link
  -->
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>