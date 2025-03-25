<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>First Choice Company</title>
  <meta name="title" content="Autofix - Auto Manufacturing & Repair Service">
  <meta name="description" content="This is a vehicle repair template">
  <!-- 
    - favicon
-->
    <!-- change href svg to png  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;600;700&family=Mulish&display=swap"
    rel="stylesheet">

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- comapny icon -->
   <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <!-- <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml"> -->

  <!-- 
    - material icon font
  -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;600;700&family=Mulish&display=swap">
   
  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-bg.jpg">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./style.css">
</head>

<body>

  <!-- HEADER -->
  <header class="header">
        <div class="container">
            <a href="#" class="logo">
                <img src="./assets/images/logo.png" width="128" height="63" alt="autofix home">
                <span class="company">FIRST CHOICE COMPANY</span>
            </a>

            <nav class="navbar" data-navbar>
                <ul class="navbar-list">
                    <li><a href="#home" class="navbar-link">Home</a></li>
                    <li><a href="#about" class="navbar-link">About</a></li>
                    <li><a href="#service" class="navbar-link">Services</a></li>
                    <li><a href="#review" class="navbar-link">Projects</a></li>

                    <li>
                    <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']): ?>
                        <a id="auth-button" href="logout.php" class="btn btn-primary navbar-link">
                            <span class="span">Logout</span>
                        </a>
                    <?php else: ?>
                        <a id="auth-button" href="./login/index.php" class="btn btn-primary navbar-link">
                            <span class="span">Login</span>
                        </a>
                    <?php endif; ?>
                    </li>
                </ul>
            </nav>

            <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
                <span class="nav-toggle-icon icon-1"></span>
                <span class="nav-toggle-icon icon-2"></span>
                <span class="nav-toggle-icon icon-3"></span>
            </button>
        </div>
    </header>


    <main>
        <article>
            <!-- HERO SECTION -->
            <section class="hero has-bg-image" id="home" aria-label="home"
                style="background-image: url('./assets/images/hero-bg.jpg')">
                <div class="container">
                    <div class="hero-content">
                        <p class="section-subtitle :dark">We have skilled engineers and experienced mechanics.</p>
                        <h1 class="h1 section-title">Auto Manufacturing & Maintenance</h1>
                        <p class="section-text">
                            Our car manufacturing company builds high-quality, innovative vehicles with precision engineering and
                            advanced technology.
                        </p>

                        <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']): ?>
                        <?php if ($_SESSION['userRole'] === "HR"): ?>
                            <a href="./salaryMaintenance/index.php" class="btn">
                                <span class="span">Salary Maintenance</span>
                            </a>
                            <?php elseif ($_SESSION['userRole'] === "Manager"): ?>
                            <a href="./invoiceOutvoice/index.php" class="btn">
                                <span class="span">Invoice & Outvoice</span>
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>
                    </div>

                    <figure class="hero-banner" style="--width: 1228; --height: 789;">
                        <img src="./assets/images/hero-banner.png" width="1228" height="789" alt="red motor vehicle" class="move-anim">
                    </figure>
                </div>
            </section>

        </article>
    </main>



  <!-- #ABOUT -->
  <section class="section about has-before" aria-labelledby="about-label" id="about"
        style="background-image: url('./assets/images/service-bg.jpg')">
        <div class="container">
            <!-- <img class="image-abs" src="./assets/images/about-abs-banner.avif" alt="about banner"> -->

            <figure class="about-banner">
            <img src="./assets/images/logo.png" width="540" height="540" loading="lazy"
              alt="vehicle repire equipments" class="w-100">
          </figure>

            <div class="about-content">
                <p class="section-subtitle :dark" style="color: #C1322F;">About Us</p>
                <h2 class="h2 section-title">Crafting Quality and Innovation in Car Manufacturing.</h2>
                <p class="section-text">
                    First Choice Company is dedicated to excellence in car manufacturing, producing
                    high-quality vehicles and parts with advanced technology, precision engineering, and innovation to meet
                    customer needs and industry standards.
                </p>
                <p class="section-text">
                    Ensuring reliability, sustainability, and cutting-edge designs for a superior driving experience.
                </p>

                <ul class="about-list">
                    <li class="about-item">
                        <p><strong class="display-1 strong">8K+</strong> Happy Clients</p>
                    </li>
                    <li class="about-item">
                        <p><strong class="display-1 strong">20+</strong> Countries Served</p>
                    </li>
                    <li class="about-item">
                        <p><strong class="display-1 strong">10+</strong> Years in market</p>
                    </li>
                    <li class="about-item">
                        <p><strong class="display-1 strong">5K+</strong> Vehicles Manufactured</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

     <!-- SERVICE SECTION -->
     <section class="section service has-bg-image" id="service" aria-labelledby="service-label"
                style="background-image: url('./assets/images/service-bg.jpg')">
                <div class="container">

                    <p class="section-subtitle :light" id="service-label">Our services</p>
                    <h2 class="h2 section-title">We manufacture reliable cars and quality parts for our valued customers</h2>

                    <ul class="service-list">
                        <li>
                            <div class="service-card">
                                <figure class="card-icon">
                                    <img src="./assets/images/services-1.png" width="210" height="110" loading="lazy" alt="Engine Repair">
                                </figure>
                                <h3 class="h3 card-title">Engines (Petrol, Diesel, Electric Motors)</h3>
                                <p class="card-text">Engines are manufactured with precision for petrol, diesel, and electric vehicles</p>
                                <a href="#service" class="btn-link">Read more</a>
                            </div>
                        </li>

                        <li>
                            <div class="service-card">
                                <figure class="card-icon">
                                    <img src="./assets/images/services-2.png" width="210" height="110" loading="lazy" alt="Brake Repair">
                                </figure>
                                <h3 class="h3 card-title">Braking Systems</h3>
                                <p class="card-text">We manufacture high-quality, reliable, and durable braking systems for safety.</p>
                                <a href="#service" class="btn-link">Read more</a>
                            </div>
                        </li>

                        <li>
                            <div class="service-card">
                                <figure class="card-icon">
                                    <img src="./assets/images/services-3.png" width="210" height="110" loading="lazy" alt="Tire Repair">
                                </figure>
                                <h3 class="h3 card-title">Wheels & Tires</h3>
                                <p class="card-text">Wheels and tires are designed for durability, traction, and performance</p>
                                <a href="#service" class="btn-link">Read more</a>
                            </div>
                        </li>

                        <li>
                            <div class="service-card">
                                <figure class="card-icon">
                                    <img src="./assets/images/services-4.png" width="210" height="110" loading="lazy" alt="Battery Repair">
                                </figure>
                                <h3 class="h3 card-title">Battery & Charging Systems (For EVs)</h3>
                                <p class="card-text">We manufacture high-quality EV batteries and charging systems for efficiency and reliability</p>
                                <a href="#service" class="btn-link">Read more</a>
                            </div>
                        </li>

                        <li class="service-banner">
                            <img src="./assets/images/services-5.png" width="646" height="380" loading="lazy" alt="Red Car" class="move-anim">
                        </li>

                        <li>
                            <div class="service-card">
                                <figure class="card-icon">
                                    <img src="./assets/images/services-6.png" width="210" height="110" loading="lazy" alt="Steering Repair">
                                </figure>
                                <h3 class="h3 card-title">Steerings & Airbags</h3>
                                <p class="card-text">Steerings and airbags are built for control, safety, and protection</p>
                                <a href="#service" class="btn-link">Read more</a>
                            </div>
                        </li>
                    </ul>

                    <a href="#service" class="btn">
                        <span class="span">View All Services</span>
                    </a>

                </div>
            </section>

            <!-- PROJECTS SECTION -->
            <section class="section work" id="review" aria-labelledby="work-label"
                style="background-image: url('./assets/images/service-bg.jpg')">
                <div class="container">

                    <p class="section-subtitle :light" id="work-label">Our Projects</p>
                    <h2 class="h2 section-title">Showcasing our most recent projects</h2>

                    <ul class="has-scrollbar">

                        <li class="scrollbar-item">
                            <div class="work-card">
                                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                                    <img src="./assets/images/work-1.jpg" width="350" height="406" loading="lazy" alt="Engine Repair" class="img-cover">
                                </figure>
                                <div class="card-content">
                                    <p class="card-subtitle">Auto Manufacture</p>
                                    <h3 class="h3 card-title">Automobile Production</h3>
                                    <a href="#" class="card-btn"><span class="material-symbols-rounded"><i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="work-card">
                                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                                    <img src="./assets/images/work-2.jpg" width="350" height="406" loading="lazy" alt="Car Tyre change" class="img-cover">
                                </figure>
                                <div class="card-content">
                                    <p class="card-subtitle">Auto Manufacture</p>
                                    <h3 class="h3 card-title">Braking & Safety Systems</h3>
                                    <a href="#" class="card-btn"><span class="material-symbols-rounded"><i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="work-card">
                                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                                    <img src="./assets/images/work-3.jpg" width="350" height="406" loading="lazy" alt="Battery Adjust" class="img-cover">
                                </figure>
                                <div class="card-content">
                                    <p class="card-subtitle">Auto Manufacture</p>
                                    <h3 class="h3 card-title">Engine Development</h3>
                                    <a href="#" class="card-btn"><span class="material-symbols-rounded"><i class="fa-solid fa-arrow-right"></i></span></a> <!--arrow_forward-->
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
            </section>


            <footer class="footer">
    <div class="footer-top section">
        <div class="container">

            <div class="footer-brand">
                <a href="#" class="logo">
                    <img src="./assets/images/logo.png" width="128" height="63" alt="FirstChoiceCompany home">
                </a>

                <p class="footer-text">
                    Leading innovation in automotive manufacturing with quality and precision
                </p>

                <ul class="social-list">
                    <li>
                        <a href="#" class="social-link">
                            <img src="./assets/images/facebook.svg" alt="facebook">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <img src="./assets/images/instagram.svg" alt="instagram">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <img src="./assets/images/twitter.svg" alt="twitter">
                        </a>
                    </li>
                </ul>
            </div>

            <ul class="footer-list">
                <li>
                    <p class="h3">Opening Hours</p>
                </li>
                <li>
                    <p class="p">Monday – Saturday</p>
                    <span class="span">9.00 – 10.00</span>
                </li>
                <li>
                    <p class="p">Sunday</p>
                    <span class="span">Closed</span>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <p class="h3">Contact Info</p>
                </li>
                <li>
                    <a href="tel:+09876543210" class="footer-link">
                        <span class="material-symbols-rounded"><i class="fa-solid fa-phone"></i></span>
                        <span class="span">+09 8 7654 3210</span>
                    </a>
                </li>
                <li>
                    <a href="mailto:firstchoice@gmail.com" class="footer-link">
                        <span class="material-symbols-rounded"><i class="fa-solid fa-envelope"></i></span>
                        <span class="span">firstchoice@gmail.com</span>
                    </a>
                </li>
                <li>
                    <address class="footer-link address">
                        <span class="material-symbols-rounded"><i class="fa-solid fa-phone"></i></span>
                        <span class="span">11 Abc Street, Chennai, 1846, India</span>
                    </address>
                </li>
            </ul>

        </div>

        <img src="./assets/images/footer-shape-3.png" width="637" height="173" loading="lazy" alt="Shape" class="shape shape-3 move-anim">

    </div>

    <div class="footer-bottom">
        <div class="container">
            <p class="copyright">Copyright <?php echo date("Y"); ?>, FirstChoiceCompany. All Rights Reserved.</p>

            <img src="./assets/images/footer-shape-2.png" width="778" height="335" loading="lazy" alt="Shape" class="shape shape-2">
            <img src="./assets/images/footer-shape-1.png" width="805" height="652" loading="lazy" alt="Red Car" class="shape shape-1 move-anim">
        </div>
    </div>
</footer>

<!-- Custom JS -->
<script src="./script.js" defer></script>


</body>
</html>