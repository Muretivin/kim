<?php
session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
         
      </header>

    <div class="container" id="signup">
        <h1 class="form-title">Register</h1>
        
        <?php
        if (isset($errors['user_exist'])) {
            echo '<div class="error-main">
                    <p>' . $errors['user_exist'] . '</p>
                  </div>';
            unset($errors['user_exist']);
        }
        ?>
        
        <form method="POST" action="user-account.php">
            <div class="input-group">
                <input type="text" name="name" id="name" placeholder="Name" required>
                <?php
                if (isset($errors['name'])) {
                    echo ' <div class="error">
                            <p>' . $errors['name'] . '</p>
                           </div>';
                }
                ?>
            </div>

            <div class="input-group">
                <input type="email" name="email" id="email" placeholder="Email" required>
                <?php
                if (isset($errors['email'])) {
                    echo '<div class="error">
                            <p>' . $errors['email'] . '</p>
                          </div>';
                    unset($errors['email']);
                }
                ?>
            </div>

            <div class="input-group password">
                <input type="password" name="password" id="password" placeholder="Password" required>
                
                <?php
                if (isset($errors['password'])) {
                    echo '<div class="error">
                            <p>' . $errors['password'] . '</p>
                          </div>';
                    unset($errors['password']);
                }
                ?>
            </div>

            <div class="input-group">
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <?php
                if (isset($errors['confirm_password'])) {
                    echo '<div class="error">
                            <p>' . $errors['confirm_password'] . '</p>
                          </div>';
                    unset($errors['confirm_password']);
                }
                ?>
            </div>

            <input type="submit" class="btn" value="Sign Up" name="signup">
        </form>

        
        <div class="links">
            <p>Already Have Account?</p>
            <a href="login.php">Log In</a>
        </div>
    </div>

    <!--=============== ATROPOS JS ===============-->
    <script src="assets/js/atropos.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="assets/js/main2.js"></script>

</body>

</html>

<?php
unset($_SESSION['errors']);
?>