<?php require 'components/header.php'; ?>

<section id="hero-section">
    <img src="assets/gifs/down-arrow-gif.gif" alt="" class="down-arrow-gif">
    <div class="container-fluid">
        <div class="hero-container">
            <div class="left">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/HERO-BANNER1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/HERO-BANNER2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/HERO-BANNER3.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/HERO-BANNER4.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/HERO-BANNER5.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <!-- <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button> -->
                </div>
            </div>
            <div class="right">
                <?php require 'components/cunsult-form.php'; ?>
            </div>
        </div>
    </div>
</section>


<section id="popular-des-section">
    <img src="assets/extra/cross-line1.svg" alt="" class="cross-line1 img-fluid">
    <div class="container">
        <div class="section-title">
            <h2>OUR <span>POPULAR</span> DESTINATIONS</h2>
        </div>
        <div class="filp-card-main">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="popular-tag-box">
                                    <div class="popular-tag">
                                        Popular
                                    </div>
                                    <div class="swap-icon">
                                        <img src="assets/svg-icons/swap.svg" alt="">
                                    </div>
                                </div>
                                <img src="assets/svg-icons/canada-flag.svg" alt="" class="flip-card-flag">
                                <img src="assets/svg-icons/canada-text.svg" alt="" class="flip-card-text">
                            </div>
                            <div class="flip-card-back">
                                <h4>Canada</h4>
                                <ul class="sevices-list">
                                    <li><a href="travel-visa-imigration.php?opt=tourist_visa#accordionFlushExample">Tourist
                                            Visa</a></li>
                                    <li>Business Visa</li>
                                    <li>Student Visa</li>
                                    <li>Work Visa</li>
                                    <li>Express Entry Program (PR)</li>
                                    <li>Provincial Nominee Program (PR)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="popular-tag-box">
                                    <div class="popular-tag">
                                        Popular
                                    </div>
                                    <div class="swap-icon">
                                        <img src="assets/svg-icons/swap.svg" alt="">
                                    </div>
                                </div>
                                <img src="assets/svg-icons/usa-flag.svg" alt="" class="flip-card-flag">
                                <img src="assets/svg-icons/usa-text.svg" alt="" class="flip-card-text">
                            </div>
                            <div class="flip-card-back">
                                <h4>USA</h4>
                                <ul class="sevices-list">
                                    <li>Tourist Visa (B2)</li>
                                    <li>Business Visa (B1)</li>
                                    <li>Work Visa (H1B)</li>
                                    <li>Intracompany Transferee (L)</li>
                                    <li>Student Visa (F)</li>
                                    <li>Exchange Visitor Visa (J)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="popular-tag-box">
                                    <div class="popular-tag">
                                        Popular
                                    </div>
                                    <div class="swap-icon">
                                        <img src="assets/svg-icons/swap.svg" alt="">
                                    </div>
                                </div>
                                <img src="assets/svg-icons/uk-flag.svg" alt="" class="flip-card-flag">
                                <img src="assets/svg-icons/uk-text.svg" alt="" class="flip-card-text">
                            </div>
                            <div class="flip-card-back">
                                <h4>UK</h4>
                                <ul class="sevices-list">
                                    <li>Visitor Visa</li>
                                    <li>Skilled Worker Visa</li>
                                    <li>Student Visa</li>
                                    <li>Spouse Visa</li>
                                    <li>Dependent Visa</li>
                                    <li>Innovator Founder Visa</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="popular-tag-box">
                                    <div class="popular-tag">
                                        Popular
                                    </div>
                                    <div class="swap-icon">
                                        <img src="assets/svg-icons/swap.svg" alt="">
                                    </div>
                                </div>
                                <img src="assets/svg-icons/germany-flag.svg" alt="" class="flip-card-flag">
                                <img src="assets/svg-icons/germany-text.svg" alt="" class="flip-card-text">
                            </div>
                            <div class="flip-card-back">
                                <h4>Germany</h4>
                                <ul class="sevices-list">
                                    <li>Schengen Visa (Tourist & Business)</li>
                                    <li>Work Visa</li>
                                    <li>Student Visa</li>
                                    <li>Job Seeker Visa</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="popular-tag-box">
                                    <div class="popular-tag">
                                        Popular
                                    </div>
                                    <div class="swap-icon">
                                        <img src="assets/svg-icons/swap.svg" alt="">
                                    </div>
                                </div>
                                <img src="assets/svg-icons/singapore-flag.svg" alt="" class="flip-card-flag">
                                <img src="assets/svg-icons/singapore-text.svg" alt="" class="flip-card-text">
                            </div>
                            <div class="flip-card-back">
                                <h4>Singapore</h4>
                                <ul class="sevices-list">
                                    <li>Tourist Visa</li>
                                    <li>Business Visa</li>
                                    <li>Friends/Family Visit</li>
                                    <li>Student Visa</li>
                                    <li>Work Visa</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="popular-tag-box">
                                    <div class="popular-tag">
                                        Popular
                                    </div>
                                    <div class="swap-icon">
                                        <img src="assets/svg-icons/swap.svg" alt="">
                                    </div>
                                </div>
                                <img src="assets/svg-icons/australia-flag.svg" alt="" class="flip-card-flag">
                                <img src="assets/svg-icons/australia-text.svg" alt="" class="flip-card-text">
                            </div>
                            <div class="flip-card-back">
                                <h4>Australia</h4>
                                <ul class="sevices-list">
                                    <li>Visitor Visa (Subclass 600)</li>
                                    <li>Student Visa (Subclass 500)</li>
                                    <li>Worker Visa (Subclass 482)</li>
                                    <li>Partner Visa (Subclass 820/821)</li>
                                    <li>PR Visa (Subclass 189)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="our-ser-section">
    <!-- <img src="assets/extra/cross-line2.svg" alt="" class="cross-line2 img-fluid"> -->
    <div class="container">
        <div class="section-title">
            <h2>OUR <span>SERVICES</span></h2>
        </div>
        <div class="row gy-sm-4">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-card service-card red">
                    <div class="card-header ">
                        <img src="assets/svg-icons/travel-visa.svg" alt="">
                        <h5>Travel Visas & Immigration</h5>
                    </div>
                    <div class="card-body">
                        <p>Discover Samyama, your partner for seamless
                            Travel Visas and Immigration. Our services include
                            assistance for Tourist, Schengen, Business,
                            Student, Work, PR, Investment, Entrepreneur,
                            Dependant, and Family/Spouse Visa applications.</p>
                        <a href="travel-visa-imigration.php">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-card green">
                    <div class="card-header">
                        <img src="assets/svg-icons/study-abroad.svg" alt="">
                        <h5>Study Abroad</h5>
                    </div>
                    <div class="card-body">
                        <p>Unlock your global education journey with Samyama. Get a complimentary initial
                            consultation for studying abroad. From admissions to student visas, we offer
                            comprehensive
                            support for your international university ambitions.</p>
                        <a href="study-abrod.php">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-card yellow">
                    <div class="card-header">
                        <img src="assets/svg-icons/coaching.svg" alt="">
                        <h5>Coaching</h5>
                    </div>
                    <div class="card-body">
                        <p>Elevate your exam success with our coaching services: IELTS, TOEFL, PTE, SAT, GRE,
                            GMAT,
                            Duolingo English, and German Language (A1). Choose between online or in-person
                            coaching
                            for tailored support. Achieve your goals with expert
                            guidance.</p>
                        <a href="coaching.php">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-card blue">
                    <div class="card-header">
                        <img src="assets/svg-icons/passport-OCI.svg" alt="">
                        <h5>Passport & OCI</h5>
                    </div>
                    <div class="card-body">
                        <p>Experience hassle-free Indian Passport and OCI
                            application processes with Samyama. Benefit
                            from a complimentary initial consultation. Trust our
                            expertise to navigate the complexities and ensure
                            a smooth experience.
                        </p>
                        <a href="passport-oci.php">Learn more</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section id="end-to-end-section">
    <div class="container">
        <div class="section-title">
            <h2>END-TO-END <span>SOLUTIONS</span></h2>
            <p class="mb-2">No matter the service you seek, rest assured, we’ve got
                your back with our end-to-end solutions.</p>
        </div>

        <div class="end-to-end-svg-box">
            <div class="svg-man-box">
                <div class="position-relative">
                    <img src="assets/gifs/end-to-end-bulb.gif" alt="" class="end-to-end-bulb">
                    <img src="assets/images/end-to-end-man.png" alt="" class="img-fluid">
                </div>
            </div>
            <img src="assets/extra/end-to-en-services.svg" alt="" class="img-fluid">
        </div>
    </div>
</section>

<section id="five-star-service">
    <img src="assets/extra/cross-line3.svg" alt="" class="cross-line3 img-fluid">
    <div class="container">
        <div class="section-title">
            <h2><span>FIVE STAR</span> SERVICE</h2>
        </div>
        <div class="five-star-container">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="five-star-service super-fast">
                        <div class="five-star-service-image">
                            <img src="assets/images/super-fast.svg" alt="" class="img-fluid ">
                        </div>
                        <h5>Super-Fast</h5>
                        <p>We use a perfect balance of tech coupled with highly experienced consultants to
                            streamline and deliver your required services asap.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="five-star-service fair-pricing">
                        <div class="five-star-service-image">
                            <img src="assets/images/Fair-Pricing.svg" alt="" class="img-fluid ">
                        </div>
                        <h5>Fair Pricing</h5>
                        <p>No hidden charges and complete pricing transparency. Our free initial consultation
                            will include the pricing in detail.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="five-star-service convenient">
                        <div class="five-star-service-image">
                            <img src="assets/images/Convenient.svg" alt="" class="img-fluid ">
                        </div>
                        <h5>Convenient</h5>
                        <p>You don’t have to look anywhere else as we provide full end-to-end solutions, and we
                            take care of the entire process. We have got your back.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="five-star-service precise">
                        <div class="five-star-service-image">
                            <img src="assets/images/Precise.svg" alt="" class="img-fluid ">
                        </div>
                        <h5>Precise</h5>
                        <p>Our consultants go through vetting process and possess many years of expertise. This
                            allows us to avoid any errors or delays.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="five-star-service reliable">
                        <div class="five-star-service-image">
                            <img src="assets/images/Reliable.svg" alt="" class="img-fluid ">
                        </div>
                        <h5>Reliable</h5>
                        <p>Your data is highly secured with us and is confidential. We will never sell or reveal
                            it to any third party.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="five-star-service feedback">
                        <div class="five-star-service-image">
                            <img src="assets/images/Feedback.svg" alt="" class="img-fluid ">
                        </div>
                        <h5>Feedback</h5>
                        <p>At Samyama, we take our work seriously and are always looking for ways to improve
                            ourselves. We value our clients' feedback.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="arrow_container">
    <div class="w-100">
        <div class="section-title">
            <h2>SIMPLE <span>STEPS</span></h2>
        </div>

        <div class="main-time-line ">
            <span class="line">
                <span class="line_inner">
                    <img src="assets/images/Airplane-01.png" alt="" />
                </span>
                
            </span>

            <div class="gray-bg">
                <div class="container">
                    <div class="row section-point">
                        <div class="col-lg-6">
                            <div class="simple-step-image">
                                <img src="assets/images/consultation.png" alt="" class="h-100">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="simple-image-content">
                                <div class="simple-step-lable">
                                    <img src="assets/svg-icons/consultation.svg" alt="">
                                    <p>Consultation</p>
                                </div>
                                <h5>Contact us for a free initial consultation.</h5>
                                <p>You can reach us through our website, phone, chat, or email. We will advise you about
                                    the
                                    necessary documents for your application filing and our pricing.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="white-bg">
                <div class="container">
                    <div class="row section-point">
                        <div class="col-lg-6">
                            <div class="simple-image-content">
                                <div class="simple-step-lable">
                                    <img src="assets/svg-icons/processing.svg" alt="">
                                    <p>Processing</p>
                                </div>
                                <h5>Share relevant documents.</h5>
                                <p>We start checking and processing your documents after we receive all the necessary
                                    information and our service fee. We accept all major cards and UPI transactions.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="simple-step-image">
                                <img src="assets/images/procecing.png" alt="" class="h-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gray-bg">
                <div class="container">
                    <div class="row section-point">
                        <div class="col-lg-6">
                            <div class="simple-step-image">
                                <img src="assets/images/submission.png" alt="" class="h-100">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="simple-image-content">
                                <div class="simple-step-lable">
                                    <img src="assets/svg-icons/submission.svg" alt="">
                                    <p>Submission</p>
                                </div>
                                <h5>Submit your application pack</h5>
                                <p>After preparing your application pack, your application will be submitted as per the
                                    circumstances to the respective authorities: embassy, Passport Seva Kendra, FRRO or
                                    university. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="white-bg">
                <div class="container">
                    <div class="row section-point">
                        <div class="col-lg-6">
                            <div class="simple-image-content">
                                <div class="simple-step-lable">
                                    <img src="assets/svg-icons/delivery.svg" alt="">
                                    <p>Delivery</p>
                                </div>
                                <h5>Get your documents delivered to your doorstep.</h5>
                                <p>Your processed documents will be delivered to your residence after approval by the
                                    authorities. If returned to our office, we will deliver it to you and confirm your
                                    schedule
                                    beforehand.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="simple-step-image">
                                <img src="assets/images/delivery.png" alt="" class="h-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gray-bg">
                <div class="container">
                    <div class="row section-point">
                        <div class="col-lg-6">
                            <div class="simple-step-image">
                                <img src="assets/images/End -To-End-Solution.png" alt="" class="h-100">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="simple-image-content">
                                <div class="simple-step-lable">
                                    <img src="assets/svg-icons/End-To-End-Solution.svg" alt="">
                                    <p>End -To-End Solution</p>
                                </div>
                                <h5>We have got you covered.</h5>
                                <p>We offer comprehensive end-to-end solutions tailored to meet the diverse needs of
                                    students,
                                    tourists, business travelers, or immigrants to foreign countries. You can relax
                                    knowing
                                    that
                                    every aspect of your journey or application process is taken care of with precision
                                    and
                                    professionalism.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="success-stories">

    <!-- Modal -->
    <div class="modal fade" id="youtube-video-modal" tabindex="-1" aria-labelledby="youtube-video-modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="youtube-video-modalLabel">Success stories</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 bg-black">
                    <iframe class="youtube-video" src="" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </div>
    <img src="assets/extra/cross-line4.svg" alt="" class="cross-line4 img-fluid">
    <div class="container">
        <div class="section-title">
            <h2><span>Success</span> STORIES</h2>
        </div>


        <div class="success-card-main">
            <div class="row">
                <div class="col-md-12">
                    <div id="news-slider" class="owl-carousel">
                        <div class="post-slide">
                            <div class="post-img">
                                <img src="assets/images/parul-thumb.png" alt="" />

                                <a class="over-layer" onclick="playVideo(this);"
                                    data-video-link="https://www.youtube.com/embed/lon4Rq8b8kI?autoplay=1"><i
                                        class="fa fa-play"></i>Watch their story</a>
                            </div>
                            <div class="post-content">
                                <img src="assets/images/parul-user.png" alt="">
                                <h5>Parul Singh</h5>
                            </div>
                        </div>
                        <div class="post-slide">
                            <div class="post-img">
                                <img src="assets/images/karanveer-thumb.png" alt="" />

                            </div>
                            <div class="post-content">
                                <img src="assets/images/Karanveer-user.png" alt="">
                                <h5>Karanveer Sandhu</h5>
                            </div>
                        </div>
                        <div class="post-slide">
                            <div class="post-img">
                                <img src="assets/images/peeyush-thumb.png" alt="">
                                <a class="over-layer" onclick="playVideo(this);"
                                    data-video-link="https://www.youtube.com/embed/qMjIUcZv3hw?autoplay=1"><i
                                        class="fa fa-play"></i>Watch their story</a>
                            </div>
                            <div class="post-content">
                                <img src="assets/images/peeyush-user.png" alt="">
                                <h5>Peeyush Singh</h5>
                            </div>
                        </div>
                        <div class="post-slide">
                            <div class="post-img">
                                <img src="assets/images/ani-thumb.png" alt="">
                                <!-- <a href="#" class="over-layer"><i class="fa fa-play"></i></a> -->
                            </div>
                            <div class="post-content">
                                <img src="assets/images/ani-user.png" alt="">
                                <h5>Ani Londhe</h5>
                            </div>
                        </div>
                        <div class="post-slide">
                            <div class="post-img">
                                <img src="assets/images/amar-thumb.png" alt="">
                                <a class="over-layer" onclick="playVideo(this);"
                                    data-video-link="https://www.youtube.com/embed/cfnzwCmM7RE?autoplay=1"><i
                                        class="fa fa-play"></i>Watch their story</a>
                            </div>
                            <div class="post-content">
                                <img src="assets/images/amar-user.png" alt="">
                                <h5>Amar Lakha</h5>
                            </div>
                        </div>
                        <div class="post-slide">
                            <div class="post-img">
                                <img src="assets/images/amin-thumb.png" alt="">
                                <!-- <a href="#" class="over-layer"><i class="fa fa-play"></i></a> -->
                            </div>
                            <div class="post-content">
                                <img src="assets/images/amin-user.png" alt="">
                                <h5>Amin Shaikh</h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<section id="social-media-review">
    <div class="container">
        <div class="section-title">
            <h2><span>Social Media</span> REVIEWS</h2>
        </div>
        <div class="review-card-container">
            <div class="row gy-3 gx-3">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="review-card">
                        <div class="review-header d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2 user">
                                <img src="assets/images/RamRalepeta-user.png" alt="">
                                <h5 class="mb-0">Ram Ralepeta</h5>
                            </div>
                            <div><img src="assets/svg-icons/facebook-icon.svg" alt=""></div>
                        </div>
                        <div class="review-body">
                            <p>I had a great experience with them. They were fast and very knowledgeable. They
                                did my tourist visa before deadline. I highly recommend them. Cheers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="review-card">
                        <div class="review-header d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2 user">
                                <img src="assets/images/ijjo-user.png" alt="">
                                <h5 class="mb-0">Ijjo Shaikh</h5>
                            </div>
                            <div><img src="assets/svg-icons/facebook-icon.svg" alt=""></div>
                        </div>
                        <div class="review-body">
                            <p>Samyama team is just fantastic. They explained everything in great detail and
                                executed the entire process with precision. I recommend them.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="review-card">
                        <div class="review-header d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2 user">
                                <img src="assets/images/ajju-user.png" alt="">
                                <h5 class="mb-0">Ajju Sayyed</h5>
                            </div>
                            <div><img src="assets/svg-icons/facebook-icon.svg" alt=""></div>
                        </div>
                        <div class="review-body">
                            <p>Samyama kept me updated with the whole process and they were very sincere with
                                the entire process. I definitely recommend them.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="review-card">
                        <div class="review-header d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2 user">
                                <img src="assets/images/gous-user.png" alt="">
                                <h5 class="mb-0">Gous Shaikh</h5>
                            </div>
                            <div><img src="assets/svg-icons/facebook-icon.svg" alt=""></div>
                        </div>
                        <div class="review-body">
                            <p>They did my visa. Most appreciated 👍</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="review-card">
                        <div class="review-header d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2 user">
                                <img src="assets/images/peeyush-user1.png" alt="">
                                <h5 class="mb-0">Peeyush Singh</h5>
                            </div>
                            <div><img src="assets/svg-icons/google-icon.svg" alt=""></div>
                        </div>
                        <div class="review-body">
                            <p>I contacted Samyama for my Australian visa process. They helped me with the
                                entire process and they have a very friendly team.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="review-card">
                        <div class="review-header d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2 user">
                                <img src="assets/images/santosh-user.png" alt="">
                                <h5 class="mb-0">Santosh Randive</h5>
                            </div>
                            <div><img src="assets/svg-icons/google-icon.svg" alt=""></div>
                        </div>
                        <div class="review-body">
                            <p>Samyama team was very professional and they took care of the entire process. Do
                                check them out. 👍
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="review-card">
                        <div class="review-header d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2 user">
                                <img src="assets/images/parvez-user.png" alt="">
                                <h5 class="mb-0">Parvez Ansari</h5>
                            </div>
                            <div><img src="assets/svg-icons/google-icon.svg" alt=""></div>
                        </div>
                        <div class="review-body">
                            <p>I highly recommend them.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="review-card">
                        <div class="review-header d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2 user">
                                <img src="assets/images/rishabh-user.png" alt="">
                                <h5 class="mb-0">Rishabh Jaiswal</h5>
                            </div>
                            <div><img src="assets/svg-icons/google-icon.svg" alt=""></div>
                        </div>
                        <div class="review-body">
                            <p>Super Supportive Team and very helping people.
                                I have worked with Samyama Multiple times always pleasure. Hand Holding done
                                from application Fill up till arrival date.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="certificates-section">
    <div class="container">
        <div class="certificate-container">
            <img src="assets/images/iso-certificate.svg" alt="" class="certificate-img ">
            <img src="assets/images/google-certificate.svg" alt="" class="certificate-img ">
            <img src="assets/images/facebook-certificate.svg" alt="" class="certificate-img ">
            <img src="assets/images/sulekha-certificate.svg" alt="" class="certificate-img ">
            <img src="assets/images/trust-pilot-certificate.svg" alt="" class="certificate-img">
            <img src="assets/images/jd-certificate.svg" alt="" class="certificate-img ">

        </div>
    </div>
</section>

<?php require 'components/footer.php'; ?>