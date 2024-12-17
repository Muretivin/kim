<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

      <!--=============== ATROPOS CSS ===============-->
      <link rel="stylesheet" href="assets/css/atropos.min.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css">

      <title></title>
   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav__logo">
                Appointment
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="index.php" class="nav__link">Home</a>
                    </li>
                    <li>
                        <a href="about.php" class="nav__link"> About Us</a>
                    </li>
                    <li>
                        <a href="contact.php" class="nav__link">Contact Us</a>
                    </li>
                    <li>
                        <a href="register.php" class="nav__link">Get Started Or Login</a>
                    </li>
                </ul>
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-large-line"></i>
                </div>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-apps-2-fill"></i>
            </div>
        </nav>
         
      </header>

      <!--==================== MAIN ====================-->
      <main class="main">
         <!--==================== HOME ====================-->
         <section class="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__title">
                        Welcome to Awaters <br> Book An Appointment
                    </h1>

                    <p class="home__description">
                        we solve your problems promptly,
                        don't be stranded with water issues, Book
                        an appointment through our new website

                    </p>
                    <a href="register.html" class="home__button"> Book Now Create Account & Log In</a>
                </div>
                <div class="home__images atropos">
                    <div class="atropos-scale">
                        <div class="atropos-rotate">
                            <div class="atropos-inner">
                                <img src="assets/img/kim one.jpeg" alt="image" data-atropos-offset="10" class="home__img-1">
                                <img src="assets/img/kim two.jpeg" alt="image" data-atropos-offset="10" class="home__img-2">
            
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>
            
         </section>
      </main>
      
      <!--=============== ATROPOS JS ===============-->
      <script src="assets/js/atropos.min.js"></script>

      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main2.js"></script>
   </body>
</html>