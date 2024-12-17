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

    <title>Contact Us</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        /* Header Section */
        .header-section {
            background-image: url('https://outforia.com/wp-content/uploads/2021/04/Types-of-water-of-bodies-2-0421.jpg'); /* Replace with actual background image */
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 4rem 1rem;
            position: relative;
        }

        .header-section h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #fff;
        }

        .header-section p {
            font-size: 1.2rem;
        }

        /* Main Content Container */
        .container {
            display: flex;
            flex-wrap: wrap;
            padding: 2rem;
            gap: 1rem;
            max-width: 1200px;
            margin: auto;
        }

        /* Contact Information Section */
        .contact-info {
            flex: 1;
            background-color: #0091ea;
            color: #fff;
            padding: 1.5rem;
            border-radius: 8px;
            min-width: 300px;
        }

        .contact-info h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .contact-info p, .contact-info a {
            font-size: 1rem;
            margin-bottom: 1rem;
            color: #fff;
            text-decoration: none;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        /* Contact Form Section */
        .contact-form {
            flex: 1;
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            min-width: 300px;
        }

        .contact-form h2 {
            font-size: 1.5rem;
            color: #004680;
            margin-bottom: 1rem;
        }

        .contact-form label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .contact-form button {
            background-color: #0091ea;
            color: #fff;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #006bb5;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .header-section h1 {
                font-size: 2rem;
            }

            .header-section p {
                font-size: 1rem;
            }
        }
    </style>
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

    <!-- Header Section -->
    <div class="header-section">
        <h1>Contact Us</h1>
        <p>We’d love to hear from you! Feel free to reach out to us with any questions or inquiries.</p>
    </div>

    <!-- Main Content Container -->
    <div class="container">
        <!-- Contact Information Section -->
        <div class="contact-info">
            <h2>Contact Information</h2>
            <p><strong>Address:</strong> NHIF Building, Wing B, 9th Floor P.O. Box 45250 00100, Ngong Road, Nairobi – Kenya</p>
            <p><strong>Phone:</strong> <a href="">0202732291
2729048
Emergency Hotline: 0700 056472</a></p>
            <p><strong>Email:</strong> <a href="mailto:info@wra.go.ke">info@wra.go.ke</a></p>
            <p><strong>Working Hours:</strong> Monday - Friday: 9:00 AM - 5:00 PM</p>
        </div>

        <!-- Contact Form Section -->
        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="#" method="POST">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter your full name">

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email address">

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required placeholder="Write your message here"></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
       <!--=============== ATROPOS JS ===============-->
       <script src="assets/js/atropos.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="assets/js/main2.js"></script>

</body>
</html>
