<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/images/Favicon.png">
    <title>SAMYAMA</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/css/intlTelInput.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <header>
        <div class="preheader">
            <div class="container">
                <div class="d-flex justify-content-between flex-wrap">

                    <ul class="d-flex align-items-center left gap-4">
                        <li class="icon-text  h-email">
                            <a href="mailto:info@samyama.in" class="icon-text">
                                <img src="assets/svg-icons/preheader-email.svg">info@samyama.in
                            </a>
                        </li>
                        <li class="icon-text">
                            <a href="tel:+918779346858" class="icon-text">
                                <img src="assets/svg-icons/preheader-phone.svg">+91 877 934 6858
                            </a>
                        </li>
                        <!--<li class="icon-text whatsapp"><img src="assets/svg-icons/preheader-watsapp.svg">WhatsApp</li>-->
                        <li class="icon-text whatsapp">
                            <a href="https://wa.me/918779346858" class="icon-text" target="_blank">
                                <img src="assets/svg-icons/preheader-watsapp.svg">WhatsApp
                            </a>
                        </li>

                    </ul>
                    <ul class="right d-flex align-items-center gap-5">
                        <li class="icon-text"><img src="assets/svg-icons/preheader-partner.svg"><a
                                href="partner-with-us.php">PARTNER WITH US</a></li>
                        <li class="icon-text "><a href="contact-us.php" class="contactUs">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container">
                <div class="header">
                    <div class="header-logo">
                        <a href="index.php"><img src="assets/images/samyama-logo.png" alt=""></a>
                    </div>
                    <?php
                    $base_url = '/samyama/';
                    $current_page = $_SERVER['REQUEST_URI'];
                    ?>
                    <ul class="dekstop-menu">
                        <li class="<?php echo ($current_page === $base_url . 'index.php') ? 'active' : ''; ?>"><a
                                href="index.php">Home</a></li>
                        <li
                            class="<?php echo ($current_page === $base_url . 'travel-visa-imigration.php') ? 'active' : ''; ?>">
                            <a href="travel-visa-imigration.php">Travel Visas & Immigration</a>
                        </li>
                        <li class="<?php echo ($current_page === $base_url . 'study-abrod.php') ? 'active' : ''; ?>"><a
                                href="study-abrod.php">Study Abroad</a></li>
                        <li class="<?php echo ($current_page === $base_url . 'coaching.php') ? 'active' : ''; ?>"><a
                                href="coaching.php">Coaching</a></li>
                        <li class="<?php echo ($current_page === $base_url . 'passport-oci.php') ? 'active' : ''; ?>"><a
                                href="passport-oci.php">Passport & OCI</a></li>
                        <li class="<?php echo ($current_page === $base_url . 'about-us.php') ? 'active' : ''; ?>"><a
                                href="about-us.php">About Us</a></li>
                    </ul>
                    <a class="mobile-menu-btn" data-bs-toggle="offcanvas" href="#offcanvasMenuBtn" role="button"
                        aria-controls="offcanvasMenuBtn">
                        <img src="assets/svg-icons/mobile-menu-btn.svg" alt="">
                    </a>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenuBtn"
                        aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header p-0">
                            <div class="preheader w-100">
                                <div class="container">
                                    <div class="d-flex justify-content-between flex-wrap">

                                        <ul class="d-flex align-items-center left gap-4">
                                            <li class="icon-text">
                                                <a href="tel:+918779346858" class="icon-text">
                                                    <img src="assets/svg-icons/preheader-phone.svg">+91 877 934 6858
                                                </a>
                                            </li>
                                            <li class="icon-text whatsapp">
                                                <a href="https://wa.me/918779346858" class="icon-text" target="_blank">
                                                    <img src="assets/svg-icons/preheader-watsapp.svg">WhatsApp
                                                </a>
                                            </li>

                                        </ul>
                                        <ul class="right d-flex align-items-center gap-5">
                                            <li class="icon-text"><img src="assets/svg-icons/preheader-partner.svg"><a
                                                    href="partner-with-us.php">PARTNER WITH US</a></li>
                                            <li class="icon-text "><a href="contact-us.php" class="contactUs">CONTACT
                                                    US</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="mobile-menu">
                                <li
                                    class="d-flex justify-content-between align-items-center <?php echo ($current_page === $base_url . 'index.php') ? 'active' : ''; ?>">
                                    <a href="index.php">Home</a>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </li>
                                <li
                                    class="<?php echo ($current_page === $base_url . 'travel-visa-imigration.php') ? 'active' : ''; ?>">
                                    <a href="travel-visa-imigration.php">Travel Visas & Immigration</a>
                                </li>
                                <li
                                    class="<?php echo ($current_page === $base_url . 'study-abrod.php') ? 'active' : ''; ?>">
                                    <a href="study-abrod.php">Study Abroad</a></li>
                                <li
                                    class="<?php echo ($current_page === $base_url . 'coaching.php') ? 'active' : ''; ?>">
                                    <a href="coaching.php">Coaching</a></li>
                                <li
                                    class="<?php echo ($current_page === $base_url . 'passport-oci.php') ? 'active' : ''; ?>">
                                    <a href="passport-oci.php">Passport & OCI</a></li>
                                <li
                                    class="<?php echo ($current_page === $base_url . 'about-us.php') ? 'active' : ''; ?>">
                                    <a href="about-us.php">About Us</a></li>
                                    <li
                                    class="<?php echo ($current_page === $base_url . 'partner-with-us.php') ? 'active' : ''; ?>">
                                    <a href="partner-with-us.php">Partner With US</a></li>
                                    <li
                                    class="<?php echo ($current_page === $base_url . 'contact-us.php') ? 'active' : ''; ?>">
                                    <a href="contact-us.php">Contact Us</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>