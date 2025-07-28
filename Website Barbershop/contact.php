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
                         Barber
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
    - #FOOTER
  -->

               <footer class="footer has-bg-image" style="background-image: url('./assets/images/footer-bg.png')">
                    <div class="container">

                         <div class="footer-top">

                              <div class="footer-brand">

                                   <a href="#" class="logo">
                                        Haircut
                                        <span class="span">Hair Salon</span>
                                   </a>

                                   <!-- Google Maps Lokasi Semarang -->
                                   <div style="margin-top: 20px;">
                                        <iframe
                                             src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63325.838465298905!2d110.37737503065904!3d-7.005145905021973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4db2e05d27%3A0x3027a76e352b6e0!2sKota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1721360100015!5m2!1sid!2sid"
                                             width="900px" height="500px" style="border:0; border-radius: 8px;" allowfullscreen="" loading="lazy"
                                             referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                   </div>

                              </div>

                              <div class="footer-link-box">

                                   <ul class="footer-list">

                                        <li>
                                             <p class="footer-list-title">Quick Links</p>
                                        </li>

                                        <li>
                                             <a href="services.php" class="footer-link has-before">Our Services</a>
                                        </li>

                                        <li>
                                             <a href="team.php" class="footer-link has-before">Meet Our Team</a>
                                        </li>

                                        <li>
                                             <a href="http://localhost/Fariel%20Dzaky%20Portofolio/index.html" class="footer-link has-before">Our Portfolio</a>
                                        </li>

                                        <li>
                                             <a href="https://www.linkedin.com/in/fariel-dzaky?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="footer-link has-before">Need A Career?</a>
                                        </li>

                                        <li>
                                             <a href="blog.php" class="footer-link has-before">News & Blog</a>
                                        </li>

                                   </ul>

                                   <ul class="footer-list">

                                        <li>
                                             <p class="footer-list-title">Services</p>
                                        </li>

                                        <li>
                                             <a href="services.php" class="footer-link has-before">Hair Cutting</a>
                                        </li>

                                        <li>
                                             <a href="services.php" class="footer-link has-before">Hair Washing</a>
                                        </li>

                                        <li>
                                             <a href="services.php" class="footer-link has-before">Body Treatment</a>
                                        </li>

                                        <li>
                                             <a href="services.php" class="footer-link has-before">Beauty & Spa</a>
                                        </li>

                                        <li>
                                             <a href="services.php" class="footer-link has-before">Hair Color</a>
                                        </li>

                                   </ul>

                                   <ul class="footer-list">

                                        <li>
                                             <p class="footer-list-title">Recent News</p>
                                        </li>

                                        <li>
                                             <div class="blog-card">

                                                  <figure class="card-banner img-holder"
                                                       style="--width: 70; --height: 75;">
                                                       <img src="./assets/images/footer-blog-1.jpg" width="70"
                                                            height="75" loading="lazy"
                                                            alt="The beginners guide to Henna Brows in Brisbane"
                                                            class="img-cover">
                                                  </figure>

                                                  <div class="card-content">
                                                       <h3>
                                                            <a href="#" class="card-title">The beginners guide to Henna
                                                                 Brows in
                                                                 Brisbane</a>
                                                       </h3>

                                                       <div class="card-date">
                                                            <ion-icon name="calendar-outline"
                                                                 aria-hidden="true"></ion-icon>

                                                            <time datetime="2022-08-25">20 Mei 2025</time>
                                                       </div>
                                                  </div>

                                             </div>
                                        </li>

                                        <li>
                                             <div class="blog-card">

                                                  <figure class="card-banner img-holder"
                                                       style="--width: 70; --height: 75;">
                                                       <img src="./assets/images/footer-blog-2.jpg" width="70"
                                                            height="75" loading="lazy"
                                                            alt="How do I get rid of unwanted hair on my face?"
                                                            class="img-cover">
                                                  </figure>

                                                  <div class="card-content">
                                                       <h3>
                                                            <a href="#" class="card-title">How do I get rid of unwanted
                                                                 hair on my
                                                                 face?</a>
                                                       </h3>

                                                       <div class="card-date">
                                                            <ion-icon name="calendar-outline"
                                                                 aria-hidden="true"></ion-icon>

                                                            <time datetime="2022-08-25">25 Mei 2025</time>
                                                       </div>
                                                  </div>

                                             </div>
                                        </li>

                                   </ul>

                                   <ul class="footer-list">

                                        <li>
                                             <p class="footer-list-title">Contact Us</p>
                                        </li>

                                        <li class="footer-list-item">
                                             <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                                             <address class="contact-link">
                                                  Semarang, Jawa Tengah, Indonesia
                                             </address>
                                        </li>

                                        <li class="footer-list-item">
                                             <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

                                             <a href="tel:+0123456789" class="contact-link">08816564510</a>
                                        </li>

                                        <li class="footer-list-item">
                                             <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                             <span class="contact-link">Monday - Saturday, 09 am - 09 pm</span>
                                        </li>

                                        <li class="footer-list-item">
                                             <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

                                             <a href="mailto:support@gmail.com"
                                                  class="contact-link">haircut@gmail.com</a>
                                        </li>

                                   </ul>

                              </div>

                         </div>

                    </div>
               </footer>

               <div class="footer-bottom">
                    <p class="copyright">
                         &copy; 2025 <a href="#" class="copyright-link">Haircut</a>. All Rights
                         Reserved.
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

               <!-- 
    - ionicon link
  -->
               <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
               <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

     <script>
      (function(){if(!window.chatbase||window.chatbase("getState")!=="initialized"){window.chatbase=(...arguments)=>{if(!window.chatbase.q){window.chatbase.q=[]}window.chatbase.q.push(arguments)};window.chatbase=new Proxy(window.chatbase,{get(target,prop){if(prop==="q"){return target.q}return(...args)=>target(prop,...args)}})}const onLoad=function(){const script=document.createElement("script");script.src="https://www.chatbase.co/embed.min.js";script.id="Zpw1BAFcD--FIB0BTZ5gq";script.domain="www.chatbase.co";document.body.appendChild(script)};if(document.readyState==="complete"){onLoad()}else{window.addEventListener("load",onLoad)}})();
     </script>

</body>

</html>