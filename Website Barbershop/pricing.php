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
        - #PRICING
      -->

               <section class="section pricing has-bg-image has-before" id="pricing" aria-label="pricing"
                    style="background-image: url('./assets/images/pricing-bg.jpg')">
                    <div class="container">

                         <h2 class="h2 section-title text-center">Awesome Pricing Plan</h2>

                         <p class="section-text text-center">
                              Siap untuk upgrade penampilan? Jelajahi Awesome Pricing Plan kami dan temukan berbagai
                              paket menarik yang siap memenuhi kebutuhan grooming atau kecantikan Anda. Hemat lebih
                              banyak, dapatkan gaya maksimal!
                         </p>

                         <div class="pricing-tab-container">

                              <ul class="tab-filter">

                                   <li>
                                        <button class="filter-btn active" data-filter-btn="all">
                                             <div class="btn-icon">
                                                  <i class="flaticon-beauty-salon" aria-hidden="true"></i>
                                             </div>

                                             <p class="btn-text">All Pricing</p>
                                        </button>
                                   </li>

                                   <li>
                                        <button class="filter-btn" data-filter-btn="beauty-spa">
                                             <div class="btn-icon">
                                                  <i class="flaticon-relax" aria-hidden="true"></i>
                                             </div>

                                             <p class="btn-text">Beauty & Spa</p>
                                        </button>
                                   </li>

                                   <li>
                                        <button class="filter-btn" data-filter-btn="body-treatments">
                                             <div class="btn-icon">
                                                  <i class="flaticon-massage" aria-hidden="true"></i>
                                             </div>

                                             <p class="btn-text">Body Treatments</p>
                                        </button>
                                   </li>

                                   <li>
                                        <button class="filter-btn" data-filter-btn="face-washing">
                                             <div class="btn-icon">
                                                  <i class="flaticon-spa" aria-hidden="true"></i>
                                             </div>

                                             <p class="btn-text">Face Washing</p>
                                        </button>
                                   </li>

                                   <li>
                                        <button class="filter-btn" data-filter-btn="meditations">
                                             <div class="btn-icon">
                                                  <i class="flaticon-yoga" aria-hidden="true"></i>
                                             </div>

                                             <p class="btn-text">Meditations</p>
                                        </button>
                                   </li>

                                   <li>
                                        <button class="filter-btn" data-filter-btn="shaving">
                                             <div class="btn-icon">
                                                  <i class="flaticon-razor-blade" aria-hidden="true"></i>
                                             </div>

                                             <p class="btn-text">Shaving</p>
                                        </button>
                                   </li>

                              </ul>

                              <ul class="grid-list">

                                   <li data-filter="shaving">
                                        <div class="pricing-card">

                                             <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                                                  <img src="./assets/images/pricing-1.jpg" width="90" height="90"
                                                       alt="Hair Cutting & Fitting" class="img-cover">
                                             </figure>

                                             <div class="wrapper">
                                                  <h3 class="h3 card-title">Hair Cutting & Fitting</h3>

                                                  <p class="card-text">Pemotongan Rambut 25-30 Menit</p>
                                             </div>

                                             <data class="card-price" value="89">30K</data>

                                        </div>
                                   </li>

                                   <li data-filter="shaving">
                                        <div class="pricing-card">

                                             <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                                                  <img src="./assets/images/pricing-2.jpg" width="90" height="90"
                                                       alt="Shaving & Facial" class="img-cover">
                                             </figure>

                                             <div class="wrapper">
                                                  <h3 class="h3 card-title">Shaving & Facial</h3>

                                                  <p class="card-text">Cukur & Perawatan Wajah 25-30 Menit</p>
                                             </div>

                                             <data class="card-price" value="45">35K</data>

                                        </div>
                                   </li>

                                   <li data-filter="face-washing">
                                        <div class="pricing-card">

                                             <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                                                  <img src="./assets/images/pricing-3.jpg" width="90" height="90"
                                                       alt="Hair Color & Wash" class="img-cover">
                                             </figure>

                                             <div class="wrapper">
                                                  <h3 class="h3 card-title">Hair Color & Wash</h3>

                                                  <p class="card-text">Semir & Cuci Rambut 25-30 Menit</p>
                                             </div>

                                             <data class="card-price" value="35">55K</data>

                                        </div>
                                   </li>

                                   <li data-filter="body-treatments">
                                        <div class="pricing-card">

                                             <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                                                  <img src="./assets/images/pricing-4.jpg" width="90" height="90"
                                                       alt="Body Massage" class="img-cover">
                                             </figure>

                                             <div class="wrapper">
                                                  <h3 class="h3 card-title">Body Massage</h3>

                                                  <p class="card-text">Pijat Tubuh 25-30 Menit</p>
                                             </div>

                                             <data class="card-price" value="56">50K</data>

                                        </div>
                                   </li>

                                   <li data-filter="beauty-spa">
                                        <div class="pricing-card">

                                             <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                                                  <img src="./assets/images/pricing-5.jpg" width="90" height="90"
                                                       alt="Beauty & Spa" class="img-cover">
                                             </figure>

                                             <div class="wrapper">
                                                  <h3 class="h3 card-title">Beauty & Spa</h3>

                                                  <p class="card-text">Kecantikan & Spa 25-30 Menit</p>
                                             </div>

                                             <data class="card-price" value="27">25K</data>

                                        </div>
                                   </li>

                                   <li data-filter="face-washing">
                                        <div class="pricing-card">

                                             <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                                                  <img src="./assets/images/pricing-6.jpg" width="90" height="90"
                                                       alt="Facial & Face Wash" class="img-cover">
                                             </figure>

                                             <div class="wrapper">
                                                  <h3 class="h3 card-title">Facial & Face Wash</h3>

                                                  <p class="card-text">Cuci Wajah & Wajah 25-30 Menit</p>
                                             </div>

                                             <data class="card-price" value="63">20K</data>

                                        </div>
                                   </li>

                                   <li data-filter="body-treatments">
                                        <div class="pricing-card">

                                             <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                                                  <img src="./assets/images/pricing-7.jpg" width="90" height="90"
                                                       alt="Backbone Massage" class="img-cover">
                                             </figure>

                                             <div class="wrapper">
                                                  <h3 class="h3 card-title">Backbone Massage</h3>

                                                  <p class="card-text">Pijat Tulang Punggung 25-30 Menit</p>
                                             </div>

                                             <data class="card-price" value="43">40K</data>

                                        </div>
                                   </li>

                                   <li data-filter="meditations">
                                        <div class="pricing-card">

                                             <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                                                  <img src="./assets/images/pricing-8.jpg" width="90" height="90"
                                                       alt="Meditation & Massage" class="img-cover">
                                             </figure>

                                             <div class="wrapper">
                                                  <h3 class="h3 card-title">Meditation & Massage</h3>

                                                  <p class="card-text">Meditasi & Pijat 25-30 Menit</p>
                                             </div>

                                             <data class="card-price" value="74">45K</data>

                                        </div>
                                   </li>

                              </ul>

                         </div>

                    </div>
               </section>

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