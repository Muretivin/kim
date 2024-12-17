<?php
session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!--=============== FAVICON ===============-->
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

<!--=============== REMIXICONS ===============-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

<!--=============== ATROPOS CSS ===============-->
<link rel="stylesheet" href="assets/css/atropos.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="stylesheet" href="assets/css/styles.css">
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
         
      </header><br><br><br>


  <div class="container" id="signIn">
    <h1 class="form-title">Log In</h1>

    <?php
    if (isset($errors['login'])) {
        echo '<div class="error-main"><p>' . $errors['login'] . '</p></div>';
        unset($errors['login']);
    }
    ?>

  <form method="POST" action="user-account.php">
      <div class="input-group">
       
        <input type="email" name="email" id="email" placeholder="Email" required>
        <?php
        if (isset($errors['email'])) {
            echo '<div class="error"><p>' . $errors['email'] . '</p></div>';
        }
        ?>
      </div>

      <div class="input-group password">
        
        <input type="password" name="password" id="password" placeholder="Password" required>
        
        <?php
        if (isset($errors['password'])) {
            echo '<div class="error"><p>' . $errors['password'] . '</p></div>';
        }
        ?>
      </div>

      <input type="submit" class="btn" value="Sign In" name="signin">
    </form>

    <div class="links">
      <p>Don't have an account yet?</p>
      <a href="register.php">Create Account</a>
    </div>
  </div>

   <!--=============== ATROPOS JS ===============-->
   <script src="assets/js/atropos.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="assets/js/main2.js"></script>

</body>
</html>

<?php

if (isset($_SESSION['errors'])) {
    unset($_SESSION['errors']);
}
?>