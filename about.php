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

    <title>Authority UI</title>
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

        /* About Section */
        .about-section {
            background-image: url('https://outforia.com/wp-content/uploads/2021/04/Types-of-water-of-bodies-2-0421.jpg'); /* Replace with actual background image */
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 4rem 1rem;
            position: relative;
        }

        .about-section h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #fff;
        }

        .about-section-content {
            max-width: 800px;
            margin: auto;
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            padding: 2rem;
            border-radius: 8px;
        }

        .about-section-content p {
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        /* Main Container */
        .container {
            display: flex;
            flex-wrap: wrap;
            padding: 2rem;
            gap: 1rem;
            max-width: 1200px;
            margin: auto;
        }

        /* Left Section */
        .left-section {
            flex: 1;
            background-color: #0091ea;
            color: #fff;
            padding: 1.5rem;
            border-radius: 8px;
            min-width: 300px;
        }

        .left-section h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .left-section p {
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .left-section ul {
            list-style-type: decimal;
            padding-left: 1.5rem;
        }

        .left-section ul li {
            margin-bottom: 0.5rem;
        }

        /* Right Section */
        .right-section {
            flex: 1;
            padding: 1.5rem;
            min-width: 300px;
        }

        .right-section h2 {
            font-size: 1.5rem;
            color: #004680;
            margin-bottom: 1rem;
        }

        .right-section h3 {
            font-size: 1.2rem;
            color: #004680;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
        }

        .right-section p {
            font-style: italic;
            margin-bottom: 1rem;
        }

        .right-section ul {
            list-style-type: disc;
            padding-left: 1.5rem;
        }

        .right-section ul li {
            margin-bottom: 0.5rem;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .about-section h1 {
                font-size: 2rem;
            }

            .about-section-content {
                padding: 1rem;
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

    <!-- About Section -->
    <div class="about-section">
        <h1>About WRA</h1>
        <div class="about-section-content">
            <p>Water Resources Authority (WRA) is a state corporation established under Section 11 of the <a href="#" style="color: #0091ea; text-decoration: underline;">Water Act, 2016</a>. It is mandated through delegated Authority on behalf of the National government to safeguard the right to clean water by ensuring that there is proper regulation of the management and use of water resources, in order to ensure sufficient water for everyone - now and in the future. However, the Authority has been in existence for 12 years following its establishment under the Water Act, 2002 as Water Resources Management Authority (WRMA).</p>
            <p>Our approach as an organization in safeguarding the resource is entrenched in the Country’s Big 4 development agenda, Vision 2030 strategic objective on water and sanitation and the SDG 6. All these agendas and objectives aim to increase water resources availability for multipurpose use but also improve the quality and sustainability of water resources.</p>
        </div>
    </div>

    <!-- Main Content Container -->
    <div class="container">
        <!-- Left Section -->
        <div class="left-section">
            <h2>Functions of the Authority</h2>
            <p>The Authority is vested with various functions and powers as provided under Sections 12 and 13 of the Water Act, 2016. These are as follows:</p>
            <ul>
                <li>Formulate standards, procedures and regulations aimed at ensuring proper management and use of water resources.</li>
                <li>Enforce Regulations formulated by WRA so as to ensure compliance through inspection, monitoring and enforcement.</li>
                <li>Receive water permit applications for water abstraction, water use and recharge and determine, issue, vary water permits; and enforce the conditions of those permits</li>
                <li>Regulate Water use allocation</li>
                <li>Collect water permit fees and water use charges</li>
                <li>Provide information and advice the Cabinet Secretary for formulation of policy on National Water Resource Management, water storage and flood control strategies</li>
                <li>Coordinate with other regional, national and international bodies for the better regulation of the management and use of water resources</li>
                <li>Manage the National Monitoring and Information System</li>
            </ul>
        </div>

        <!-- Right Section -->
        <div class="right-section">
            <h2>Our Vision</h2>
            <p>To be an exemplary regulator of water resources management and use</p>
            <h3>Our Mission</h3>
            <p>To effectively regulate the management of water resources in partnership with stakeholders</p>
            <h3>Our Slogan</h3>
            <p><em>Accounting For Every Drop!</em></p>
            <h3>Core Values</h3>
            <ul>
                <li>Responsiveness and customer focus</li>
                <li>Fairness and Equity</li>
                <li>Gender and social inclusiveness</li>
                <li>Integrity</li>
                <li>Innovation</li>
                <li>Professionalism</li>
                <li>Transparency and Accountability</li>
                <li>Teamwork</li>
            </ul>
        </div>
    </div>
    <!--=============== ATROPOS JS ===============-->
    <script src="assets/js/atropos.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="assets/js/main2.js"></script>

</body>
</html>
