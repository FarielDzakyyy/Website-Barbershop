<?php
session_start();
if (!isset($_SESSION['username'])) {
     header("Location: login.php");
     exit;
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

     <style>
          .back-top-btn {
               right: auto;
               left: 20px;
               bottom: 20px;
          }

          /* Neumorphic Input Fields */
          .input-field {
               transition: all 0.2s ease;
               transform: translateY(0);
               box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
          }

          .input-field:focus {
               transform: translateY(-3px);
               box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
               outline: none;
          }

          /* Enhanced Select Input */
          select.input-field {
               appearance: none;
               background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23333' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
               background-repeat: no-repeat;
               background-position: right 15px center;
               background-size: 12px;
          }

          /* Enhanced Button */
          .form-btn {
               background-color: #ffffff;
               color: var(--indian-yellow);
               border: 2px solid var(--indian-yellow);
               font-family: var(--ff-oswald);
               font-size: var(--fs-14);
               font-weight: var(--fw-600);
               text-transform: uppercase;
               width: 100%;
               display: flex;
               justify-content: center;
               align-items: center;
               gap: 10px;
               padding: 15px;
               border-radius: var(--radius-5);
               position: relative;
               overflow: hidden;
               cursor: pointer;
               transition: all 0.4s ease;
               box-shadow: 0 4px 8px rgba(194, 161, 93, 0.2);
          }

          .form-btn:active {
               transform: translateY(2px);
               box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1) !important;
          }

          /* Efek timbul saat tombol hover */
          .form-btn:hover {
               transform: translateY(-2px);
               box-shadow: 0 7px 14px rgba(0, 0, 0, 0.2);
          }

          .form-btn::before {
               content: '';
               position: absolute;
               top: 0;
               left: 0;
               width: 100%;
               height: 100%;
               background: purple;
               z-index: -1;
               opacity: 0;
               transition: opacity 0.3s ease;
          }

          .form-btn:hover::before {
               opacity: 1;
          }
     </style>

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

                         <a href="services.php" class="btn has-before">
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

                                   <form id="appointmentForm" action="appointments.php" method="POST" class="appoin-form">

                                        <div class="input-wrapper">
                                             <input type="text" name="name" placeholder="Your Full Name" required
                                                  class="input-field">

                                             <input type="email" name="email_address" placeholder="Email Address"
                                                  required class="input-field">
                                        </div>

                                        <div class="input-wrapper">
                                             <input type="text" name="phone" placeholder="Phone Number" required
                                                  class="input-field">

                                             <select name="category" class="input-field">

                                                  <option value="Select category">Select category</option>
                                                  <option value="Hair Cutting">Hair Cutting</option>
                                                  <option value="Hair Washing">Hair Washing</option>
                                                  <option value="Body Treatments">Body Treatments</option>
                                                  <option value="Beauty & Spa">Beauty & Spa</option>
                                                  <option value="Stylist Shaving">Stylist Shaving</option>
                                                  <option value="Hair Color">Hair Color</option>

                                             </select>
                                        </div>

                                        <input type="date" name="date" required class="input-field date">

                                        <input type="time" name="time" required class="input-field">

                                        <textarea name="message" placeholder="Write Message" required
                                             class="input-field"></textarea>

                                        <button type="submit" class="form-btn">
                                             <span class="span">Appointment Now</span>
                                             <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                        </button>

                                        <hr style="margin: 2rem 0; border: 1px solid #ccc;">

                                        <div style="text-align: center; margin-top: 40px;">

                                             <hr style="margin: 2rem auto; border: 1px solid #ccc; width: 60%;">

                                             <h3 style="margin-bottom: 25px;">Metode Pembayaran via Bank</h3>

                                             <div style="display: flex; justify-content: center; gap: 30px; flex-wrap: wrap;">

                                                  <!-- BCA -->
                                                  <div style="width: 220px; background-color: #f9f9f9; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; text-align: center;">
                                                       <div style="width: 100%; height: 120px; display: flex; align-items: center; justify-content: center; background-color: white;">
                                                            <img src="assets/images/bca.jpeg" alt="Bank BCA" style="background-color: white; padding: 10px; max-width: 100%; max-height: 100%;">
                                                       </div>
                                                       <div style="padding: 15px;">
                                                            <p style="color: #000;"><strong>Bank BCA</strong><br>4040189705<br>Fariel Dzaky</p>
                                                       </div>
                                                  </div>

                                                  <!-- BNI -->
                                                  <div style="width: 220px; background-color: #f9f9f9; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; text-align: center;">
                                                       <div style="width: 100%; height: 120px; display: flex; align-items: center; justify-content: center; background-color: white;">
                                                            <img src="assets/images/bni.jpeg" alt="Bank BNI" style="max-width: 100%; max-height: 100%;">
                                                       </div>
                                                       <div style="padding: 15px;">
                                                            <p style="color: #000;"><strong>Bank BNI</strong><br>1791137152<br>Fariel Dzaky</p>
                                                       </div>
                                                  </div>

                                             </div>

                                             <small style="display: block; margin-top: 15px; color: cyan;">
                                                  * Silakan transfer ke salah satu rekening di atas dan tunjukkan bukti pembayaran saat datang ke barbershop.
                                             </small>

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

     <script>
          (function() {
               if (!window.chatbase || window.chatbase("getState") !== "initialized") {
                    window.chatbase = (...arguments) => {
                         if (!window.chatbase.q) {
                              window.chatbase.q = []
                         }
                         window.chatbase.q.push(arguments)
                    };
                    window.chatbase = new Proxy(window.chatbase, {
                         get(target, prop) {
                              if (prop === "q") {
                                   return target.q
                              }
                              return (...args) => target(prop, ...args)
                         }
                    })
               }
               const onLoad = function() {
                    const script = document.createElement("script");
                    script.src = "https://www.chatbase.co/embed.min.js";
                    script.id = "Zpw1BAFcD--FIB0BTZ5gq";
                    script.domain = "www.chatbase.co";
                    document.body.appendChild(script)
               };
               if (document.readyState === "complete") {
                    onLoad()
               } else {
                    window.addEventListener("load", onLoad)
               }
          })();
     </script>

</body>

</html>