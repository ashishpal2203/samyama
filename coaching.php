<?php require 'components/header.php'; ?>
<style>
    *{
        scroll-padding-top: 20%;
    }
</style>
<section id="hero-section">
    <img src="assets/gifs/down-arrow-gif.gif" alt="" class="down-arrow-gif">
    <div class="container-fluid">
        <div class="hero-container">
            <div class="left">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">

                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/HERO-BANNER4.png" class="laptop-banner w-100" alt="...">
                            <img src="assets/images/mobile-banner-4.jpg" class="mobile-banner w-100" alt="...">
                        </div>
                    </div>

                </div>
            </div>
            <div class="right">
                <?php require 'components/cunsult-form.php'; ?>
            </div>
        </div>
        <div class="mobile-leadbox container">
            <button class="" type="button" data-bs-toggle="modal" data-bs-target="#freeCunsult">Get Free Consultation</button>
        </div>
    </div>
</section>

<section id="samyama-coaching">

    <div class="container">
        <ul class="nav nav-pills mb-3 coaching-nav" id="pills-tab" role="tablist">
            <!-- <li class="nav-item">
                <button class="nav-link samyamaCoachingC">Samyama Coaching Classes</button>
            </li> -->
            <li class="nav-item" role="presentation">
                <button class="nav-link <?php echo ($current_page === $base_url . 'coaching.php') ? 'active' : ''; ?>"
                    id="pills-samyama-tab" data-bs-toggle="pill" data-bs-target="#pills-samyama" type="button"
                    role="tab" aria-controls="pills-samyama" aria-selected="true">Samyama Coaching Classes
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link <?php echo ($current_page === $base_url . 'coaching.php?ielts') ? 'active' : ''; ?>"
                    id="pills-IELTS-tab" data-bs-toggle="pill" data-bs-target="#pills-IELTS" type="button" role="tab"
                    aria-controls="pills-IELTS" aria-selected="true">IELTS</button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link <?php echo ($current_page === $base_url . 'coaching.php?toefl') ? 'active' : ''; ?>"
                    id="pills-TOEFL-tab" data-bs-toggle="pill" data-bs-target="#pills-TOEFL" type="button" role="tab"
                    aria-controls="pills-TOEFL" aria-selected="false">TOEFL</button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link <?php echo ($current_page === $base_url . 'coaching.php?pte') ? 'active' : ''; ?>"
                    id="pills-PTE-tab" data-bs-toggle="pill" data-bs-target="#pills-PTE" type="button" role="tab"
                    aria-controls="pills-PTE" aria-selected="false">PTE</button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link <?php echo ($current_page === $base_url . 'coaching.php?sat') ? 'active' : ''; ?>"
                    id="pills-SAT-tab" data-bs-toggle="pill" data-bs-target="#pills-SAT" type="button" role="tab"
                    aria-controls="pills-SAT" aria-selected="false">SAT</button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link <?php echo ($current_page === $base_url . 'coaching.php?gre') ? 'active' : ''; ?>"
                    id="pills-GRE-tab" data-bs-toggle="pill" data-bs-target="#pills-GRE" type="button" role="tab"
                    aria-controls="pills-GRE" aria-selected="false">GRE</button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link <?php echo ($current_page === $base_url . 'coaching.php?gmat') ? 'active' : ''; ?>"
                    id="pills-GMAT-tab" data-bs-toggle="pill" data-bs-target="#pills-GMAT" type="button" role="tab"
                    aria-controls="pills-GMAT" aria-selected="false">GMAT</button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link <?php echo ($current_page === $base_url . 'coaching.php?DuolingoEnglish') ? 'active' : ''; ?>"
                    id="pills-DuolingoEnglish-tab" data-bs-toggle="pill" data-bs-target="#pills-DuolingoEnglish"
                    type="button" role="tab" aria-controls="pills-DuolingoEnglish" aria-selected="false">Duolingo
                    English</button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link <?php echo ($current_page === $base_url . 'coaching.php?GermanLanguage') ? 'active' : ''; ?>"
                    id="pills-GermanLanguage-tab" data-bs-toggle="pill" data-bs-target="#pills-GermanLanguage"
                    type="button" role="tab" aria-controls="pills-GermanLanguage" aria-selected="false">German Language
                    (A1)</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade <?php echo ($current_page === $base_url . 'coaching.php') ? 'show active' : ''; ?>"
                id="pills-samyama" role="tabpanel" aria-labelledby="pills-samyama-tab" tabindex="0">

            </div>
            <div class="tab-pane fade <?php echo ($current_page === $base_url . 'coaching.php?ielts') ? 'show active' : ''; ?>"
                id="pills-IELTS" role="tabpanel" aria-labelledby="pills-IELTS-tab" tabindex="0">
                <div class="section1">
                    <div class="row reverse-column">
                        <div class="col-lg-7">
                            <div class="section-content1">
                                <h4 class="section-title2">What is IELTS?</h4>
                                <p>IELTS (International English Language Testing System) is a most popular
                                    standardised test
                                    designed to assess English language proficiency for non-native English
                                    speakers for the
                                    purpose of work, study, and migration. Accordingly, you will be choosing
                                    whether you will be
                                    taking an IELTS Academic or IELTS General Training test.</p>
                                <p><span>Academic:</span> If you plan to study abroad.</p>
                                <p><span>General Training:</span> If you are migrating to an English-speaking
                                    country for work or to join your
                                    family.</p>
                                <p>Many universities around the world accept scores from the IELTS, TOEFL and
                                    PTE exams
                                    as proof of English proficiency for admission. You can discuss with your
                                    Samyama
                                    Education Consultant which ones would be accepted for your chosen
                                    course/university.</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="section-image1">
                                <img src="assets/images/IELTS-banner.png" alt="" class="img-fluid ielts">
                            </div>
                        </div>
                    </div>
                    <div class="row reverse-column">
                        <div class="col-lg-7">
                            <div class="section-content1">
                                <h4 class="section-title2">IELTS Curriculum</h4>
                                <p>The test consists of four sections: Listening, Reading, Writing, and
                                    Speaking. Each section
                                    measures different aspects of English proficiency, such as comprehension,
                                    grammar,
                                    vocabulary, and fluency.</p>
                                <p>The Writing and Reading sections of the IELTS differ between the Academic and
                                    General
                                    Training versions. In the Academic test, topics are tailored for individuals
                                    intending to pursue
                                    university education, whereas the General Training test covers topics of
                                    broader interest,
                                    relevant to everyday life and general experiences. Our classes are tailored for both
                                    Academic and General IELTS students.</p>
                                <p>The Listening, Reading, and Writing tests are conducted on the same day, with
                                    no breaks.
                                    The Speaking test, however, may occur on the same day or within a week
                                    before or after the
                                    main test date.</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="section-image1">
                                <img src="assets/images/IELTS-curriculum-banner.png" alt=""
                                    class="img-fluid curriculum">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section2">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <div class="section-image1">
                                <img src="assets/images/Scoring-banner.png" alt="" class="img-fluid scoring">
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Scoring</h4>
                                <p>The IELTS scoring system spans from 0 to 9 bands, signifying different levels
                                    of English
                                    proficiency. Scores are given in half-band increments (e.g., 6.5, 7.0). Both
                                    overall band
                                    scores and individual scores for the Listening, Reading, Writing, and
                                    Speaking sections are
                                    provided.
                                </p>
                                <p>Minimum score required for university admission varies depending on the
                                    requirements of
                                    the institution or organisation you are applying to, as well as the specific
                                    program or purpose
                                    for which you need the score. The most common minimum IELTS score required
                                    for
                                    university admission typically falls within the range of Band 6.0 to Band
                                    7.0 while more
                                    competitive programs or institutions may require scores closer to Band 7.0
                                    or higher.
                                </p>
                                <p>In immigration processes, such as Permanent Residency (PR) applications, the
                                    IELTS score
                                    often plays a significant role. Unlike university admissions, where meeting
                                    the minimum
                                    language proficiency requirement may be sufficient, in immigration
                                    processes, higher IELTS
                                    scores not only meet the minimum requirement but also enhance the overall
                                    application by
                                    contributing more points. This can ultimately improve an applicant&#39;s
                                    chances of successfully
                                    immigrating to a foreign country.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <div class="section-image1">
                                <img src="assets/images/test-tution-banner.png" alt="" class="img-fluid comman-s">
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Test Duration</h4>
                                <p>Less than 2 hours.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <div class="section-image1">
                                <img src="assets/images/pricing-banner.png" alt="" class="img-fluid comman-s">
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Pricing</h4>
                                <p>TOEFL Exam currently costs INR 17,000 payable to the TOEFL exam centre.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <div class="section-image1">
                                <img src="assets/images/validity-banner.png" alt="" class="img-fluid comman-s">
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Validity</h4>
                                <p>The TOEFL validity period is 2 years from the test date.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <div class="section-image1">
                                <img src="assets/images/map-banner.png" alt="" class="img-fluid comman-s">
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Centres to pass TOEFL Test in India</h4>
                                <p>There are numerous test centres across India where candidates can take the IELTS
                                    exam.
                                    Some of the top centres include British Council and IDP Education centres located in
                                    major
                                    cities like Delhi, Mumbai, Chennai, Bangalore, and Hyderabad.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade <?php echo ($current_page === $base_url . 'coaching.php?toefl') ? 'show active' : ''; ?>"
                id="pills-TOEFL" role="tabpanel" aria-labelledby="pills-TOEFL-tab" tabindex="0">
                <div class="section1">
                    <div class="row reverse-column">
                        <div class="col-lg-7">
                            <div class="section-content1">
                                <h4 class="section-title2">What is TOEFL?
                                </h4>
                                <p>The Test of English as a Foreign Language (TOEFL) assesses the English language
                                    proficiency of non-native speakers who aim to enrol in universities where English is
                                    the
                                    primary language of instruction. Many universities around the world accept scores
                                    from the
                                    IELTS, TOEFL and PTE exams as proof of English proficiency for admission.</p>
                                <p>You can
                                    discuss with your Samyama Education Consultant which ones would be accepted for your
                                    chosen course/university.</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="section-image1">
                                <img src="assets/images/tofel-banner-1.png" alt="" class="img-fluid tofel1">
                            </div>
                        </div>
                    </div>
                    <div class="row reverse-column">
                        <div class="col-lg-7">
                            <div class="section-content1">
                                <h4 class="section-title2">TOEFL Curriculum</h4>
                                <p>The test consists of four sections:</p>
                                <ul>
                                    <li>Listening</li>
                                    <li>Reading</li>
                                    <li>Writing</li>
                                    <li>Speaking</li>
                                </ul>
                                <p>Each section measures different aspects of English proficiency, such as
                                    comprehension, grammar, vocabulary, and fluency.</p>
                                <p>Out of the four sections, the Listening and Reading sections consist of
                                    multiple-choice questions. The Writing test requires students to provide long-form
                                    and short-form answers. The Speaking test requires students to talk about the topics
                                    mentioned in the test.</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="section-image1">
                                <img src="assets/images/tofel-banner-2.png" alt="" class="img-fluid tofel2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section2">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/Scoring-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Scoring</h4>
                                <p>The TOEFL score ranges from 0 to 120, with each section holding a specific score
                                    range of
                                    0-30. You will be provided with four scaled section scores and a total score. Most
                                    universities require a minimum overall score between 70 to 90.</p>



                                <p>Just like with the IELTS, it is important for prospective students to check the
                                    specific
                                    admission requirements of each university and program to determine the minimum TOEFL
                                    scores needed for admission. Your Samyama consultant will guide you regarding
                                    particular
                                    university requirements.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/test-tution-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Test Duration</h4>
                                <p>Less than 2 hours.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/pricing-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Pricing</h4>
                                <p>TOEFL Exam currently costs INR 17,000 payable to the TOEFL exam centre.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/validity-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Validity</h4>
                                <p>The TOEFL validity period is 2 years from the test date.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/map-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Centres to pass TOEFL Test in India</h4>
                                <p>In India, TOEFL test centres are available across all major cities such as Allahabad,
                                    Ahmedabad, Bengaluru, Amritsar, Chennai, Bhopal, Chandigarh, Coimbatore, Delhi NCR,
                                    Dehradun, Guwahati, Kochi, Indore, Jaipur, Hyderabad, Nagpur, Kolkata, Mumbai,
                                    Patna,
                                    Pune along with many other locations.</p>

                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="tab-pane fade <?php echo ($current_page === $base_url . 'coaching.php?pte') ? 'show active' : ''; ?>"
                id="pills-PTE" role="tabpanel" aria-labelledby="pills-PTE-tab" tabindex="0">

                <div class="section1">
                    <div class="row reverse-column">
                        <div class="col-lg-7">
                            <div class="section-content1">
                                <h4 class="section-title2">What is PTE?

                                </h4>
                                <p>PTE (Pearson Test of English) Academic is an English language proficiency test
                                    administered by Pearson Education. Similarly to the IELTS and TOEFL exams, PTE
                                    Academic assesses the English language skills of non-native speakers who wish to
                                    study or
                                    work in English-speaking countries. Many universities around the world accept scores
                                    from
                                    the IELTS, TOEFL and PTE exams as proof of English proficiency for admission. You
                                    can
                                    discuss with your Samyama Education Consultant which ones would be accepted for your
                                    chosen course/university.</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="section-image1">
                                <img src="assets/images/pearnson-1.png" alt="" class="img-fluid pearnson1">
                            </div>
                        </div>
                    </div>
                    <div class="row reverse-column">
                        <div class="col-lg-7">
                            <div class="section-content1">
                                <h4 class="section-title2">PTE Curriculum</h4>
                                <p>The test consists of four sections: </p>
                                <ul>
                                    <li>Listening</li>
                                    <li>Reading</li>
                                    <li>Writing</li>
                                    <li>Speaking</li>
                                </ul>
                                <p>Each section measures different aspects of English proficiency, such as
                                    comprehension, grammar, vocabulary, and fluency. The exam includes tasks such as
                                    reading aloud, repeating sentences, describing images, summarizing written text, and
                                    writing essays. It also assesses listening comprehension through tasks like
                                    summarising spoken text and multiple-choice questions based on audio clips.</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="section-image1">
                                <img src="assets/images/pearnson-2.png" alt="" class="img-fluid pearnson2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section2">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/Scoring-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Scoring</h4>
                                <p>The PTE (Pearson Test of English) Academic exam is scored on a scale from 10 to 90.
                                    Generally, universities set their own minimum score requirements for admission.
                                    These requirements can range from around 50 to 90, with more competitive programs or
                                    institutions typically requiring higher scores. </p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/test-tution-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Test Duration</h4>
                                <p>Approximately 3 hours.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/pricing-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Pricing</h4>
                                <p>PTE Exam currently costs INR 17,000 payable to the PTE exam centre.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/validity-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Validity</h4>
                                <p>The PTE validity period is 2 years from the test date.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/map-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Centres to pass TOEFL Test in India</h4>
                                <p>PTE exam is conducted across 62 major cities in India. Some of the popular PTE India
                                    test
                                    centres are in Noida, Gurugram, New Delhi, Ludhiana, Bathinda, Muktsar Sahib, Pune,
                                    Mohali, Mumbai, Bangalore, Hyderabad, Jaipur and Ahmedabad.</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade <?php echo ($current_page === $base_url . 'coaching.php?sat') ? 'show active' : ''; ?>"
                id="pills-SAT" role="tabpanel" aria-labelledby="pills-SAT-tab" tabindex="0">
                <div class="section1">
                    <div class="row reverse-column">
                        <div class="col-lg-7">
                            <div class="section-content1">
                                <h4 class="section-title2">What is SAT?
                                </h4>
                                <p>The SAT (Scholastic Assessment Test), formerly referred to as the Scholastic Aptitude
                                    Test,
                                    is designed to evaluate applicants&#39; verbal, mathematical, and written abilities.
                                    It is required
                                    for individuals seeking admission to undergraduate programs, particularly in Canada
                                    and the
                                    United States. It helps colleges assess the skills and knowledge that students have
                                    acquired in high school.
                                </p>
                                <p>Some colleges have adopted test-optional policies, meaning that students can choose
                                    whether or not to submit SAT scores as part of their application. Your Samyama
                                    Educational Consultant will advise you on which universities have the SAT as
                                    optional and which universities require the SAT.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="section-image1">
                                <img src="assets/images/sat-banner-1.png" alt="" class="img-fluid sat1">
                            </div>
                        </div>
                    </div>
                    <div class="row reverse-column">
                        <div class="col-lg-7">
                            <div class="section-content1">
                                <h4 class="section-title2">SAT Curriculum</h4>
                                <p>The syllabus of SAT exam is divided into three categories of reading, writing and
                                    mathematics.</p>
                                <p><img src="assets/svg-icons/reading-icon.svg" alt=""
                                        class="cari-icon"><b>Reading:</b><br>
                                    <span class="i-text"> Assessing English proficiency, candidates interpret passages
                                        and
                                        comprehend
                                        complex ideas. With multiple-choice questions based on various topics, the
                                        section
                                        tests
                                        factual, rhetorical, and synthetic understanding.</span>
                                </p>
                                <p><img src="assets/svg-icons/writing-icon.svg" alt=""
                                        class="cari-icon"><b>Writing:</b><span class="i-text"> Testing grammar and
                                        sentence construction, candidates rectify errors
                                        within
                                        passages. The section includes multiple-choice questions on narrative,
                                        argumentative,
                                        informative, and explanatory topics.</span></p>
                                <p><img src="assets/svg-icons/mathmatics-icon.svg" alt=""
                                        class="cari-icon"><b>Mathematics:</b><span class="i-text"> Evaluating
                                        mathematical reasoning, candidates answer 58
                                        questions. With
                                        topics covering algebra, geometry, and data analysis, the section is divided
                                        into no
                                        calculator and calculator & segments.</span></p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="section-image1">
                                <img src="assets/images/sat-banner-2.png" alt="" class="img-fluid sat2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section2">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/Scoring-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Scoring</h4>
                                <p>SAT scoring is on a scale from 400-1600.</p>

                                <p>In the United States, where the SAT is widely recognised as part of the admissions
                                    process,
                                    minimum SAT score requirements can range from around 900 to 1600. However, it is
                                    crucial
                                    to recognise that many selective institutions seek scores well above these
                                    thresholds, with
                                    competitive applicants often presenting scores exceeding 1300 or even 1400.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/test-tution-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Test Duration</h4>
                                <p>The SAT clocks in at 3 hours (3 hours and 15 minutes with breaks).</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/pricing-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Pricing</h4>
                                <p>INR 9,000.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/validity-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Validity</h4>
                                <p>SAT score is valid up to five years from the test date.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/map-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Centres to pass TOEFL Test in India</h4>
                                <p>At present, there are around 73 SAT exam centres in India located across 44 Indian
                                    cities.
                                    Some of the major Indian states where SAT centres are located are as follows: New
                                    Delhi,
                                    Mumbai, Punjab, Haryana, Gujarat, Maharashtra, Madhya Pradesh, Andhra Pradesh, Tamil
                                    Nadu, Odisha, Telangana.</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade <?php echo ($current_page === $base_url . 'coaching.php?gre') ? 'show active' : ''; ?>"
                id="pills-GRE" role="tabpanel" aria-labelledby="pills-GRE-tab" tabindex="0">

                <div class="section1">
                    <div class="row reverse-column">
                        <div class="col-lg-7">
                            <div class="section-content1">
                                <h4 class="section-title2">What is GRE?
                                </h4>
                                <p>The GRE (Graduate Record Examination) is a standardized test used for admission to
                                    various graduate programs worldwide. It assesses readiness for graduate-level
                                    academic
                                    work and measures skills in verbal reasoning, quantitative reasoning, and analytical
                                    writing.
                                    GRE is accepted by thousands of graduate and business schools globally for admission
                                    to a
                                    wide range of masters and doctoral programs.</p>
                                <p>Some countries where the GRE is commonly required or accepted for graduate admissions
                                    include:</p>
                                <ul type="docs">
                                    <li>US</li>
                                    <li>Canada</li>
                                    <li>Ireland</li>
                                    <li>Switzerland</li>
                                    <li>Australia</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="section-image1">
                                <img src="assets/images/gre-banner-1.png" alt="" class="img-fluid gre1">
                            </div>
                        </div>
                    </div>
                    <div class="row reverse-column">
                        <div class="col-lg-7">
                            <div class="section-content1">
                                <h4 class="section-title2">GRE Curriculum</h4>
                                <p>The GRE Test measures:</p>
                                <p><img src="assets/svg-icons/analytical-icon.svg" alt=""
                                        class="cari-icon"><b>Analytical Writing:</b> <span class="i-text"> This module
                                        assesses the ability to articulate complex
                                        ideas clearly and
                                        effectively through writing. Students are required to write two essays: one
                                        analysing an issue
                                        and another critiquing an argument.</span></p>
                                <p><img src="assets/svg-icons/verbal-icon.svg" alt="" class="cari-icon"><b>Verbal
                                        Reasoning: </b><span class="i-text">This module evaluates the ability to
                                        comprehend and analyse
                                        written
                                        material, as well as understanding of the relationships between words and
                                        concepts.
                                        It
                                        consists of multiple-choice questions covering reading comprehension, text
                                        completion, and
                                        sentence equivalence.</span></p>
                                <p><img src="assets/svg-icons/quantitative-icon.svg" alt=""
                                        class="cari-icon"><b>Quantitative Reasoning:</b> <span class="i-text">This
                                        module tests the ability to understand,
                                        interpret,
                                        and analyse
                                        quantitative information, as well as problem-solving skills using
                                        mathematical models. It
                                        includes multiple-choice questions covering arithmetic, algebra, geometry,
                                        and data analysis.</span></p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="section-image1">
                                <img src="assets/images/gre-banner-2.png" alt="" class="img-fluid gre2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section2">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/Scoring-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Scoring</h4>
                                <p>Overall GRE score will be between 260 – 340. Verbal and quantitative section scores
                                    range from 130 to 170, increasing by one-point
                                    increments. Analytical writing scores range from 0 to 6, increasing by half-point
                                    increments.</p>


                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/test-tution-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Test Duration</h4>
                                <p>Approximately 2 hours.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/pricing-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Pricing</h4>
                                <p>INR 22,550</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/validity-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Validity</h4>
                                <p>GRE score is valid up to five years from the test date.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/map-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Centres to pass TOEFL Test in India</h4>
                                <p><b>The following cities that accept GRE in India:</b>
                                    Ahmedabad, Allahabad, Bangalore, Chennai, Cochin, Coimbatore, Dehradun, Gandhinagar,
                                    Gurgaon, Gwalior, Hyderabad, Indore, Kolkata, Mumbai, Nashik, New Delhi, Nizamabad,
                                    Patna, Pune, Trivandrum, Vadodara, Vijayawada.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade <?php echo ($current_page === $base_url . 'coaching.php?gmat') ? 'show active' : ''; ?>"
                id="pills-GMAT" role="tabpanel" aria-labelledby="pills-GMAT-tab" tabindex="0">
                <div class="section1">
                    <div class="row reverse-column">
                        <div class="col-lg-7">
                            <div class="section-content1">
                                <h4 class="section-title2">What is GMAT?
                                </h4>
                                <p>The GMAT, or Graduate Management Admission Test, is a standardized exam specifically
                                    designed for individuals seeking admission to graduate management programs, such as
                                    MBA (Master of Business Administration) programs. Developed and administered by the
                                    Graduate Management Admission Council (GMAC), the GMAT assesses various skills
                                    considered essential for success in business school.</p>
                                <p>The GMAT is not a requirement imposed by countries, but rather by individual business
                                    schools and MBA programs globally. Many top business schools in various countries
                                    use the GMAT as part of their admissions process.</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="section-image1">
                                <img src="assets/images/gmat-banner-1.png" alt="" class="img-fluid gmat1">
                            </div>
                        </div>
                    </div>
                    <div class="row reverse-column">
                        <div class="col-lg-7">
                            <div class="section-content1">
                                <h4 class="section-title2">GMAT Curriculum </h4>
                                <p>The GMAT Test measures:</p>
                                <p><img src="assets/svg-icons/analytical-icon.svg" alt=""
                                        class="cari-icon"><b>Analytical Writing Assessment: </b><span
                                        class="i-text">This section evaluates the ability to analyse
                                        an argument and
                                        communicate ideas effectively. Student will be asked to critique an argument
                                        presented in a
                                        short passage.</span>
                                </p>
                                <p><img src="assets/svg-icons/integrated-icon.svg" alt=""
                                        class="cari-icon"><b>Integrated Reasoning:</b><span class="i-text"> This section
                                        assesses the ability to analyse and
                                        interpret data
                                        presented in various formats, such as tables, graphs, and charts. It also tests
                                        student’s
                                        ability to evaluate information from multiple sources.</span></p>
                                <p><img src="assets/svg-icons/quantitative-icon.svg" alt=""
                                        class="cari-icon"><b>Quantitative Reasoning:</b> <span class="i-text">This part
                                        measures the ability to solve quantitative
                                        problems and
                                        interpret data. It includes topics such as arithmetic, algebra, geometry, and
                                        data
                                        analysis.</span></p>
                                <p><img src="assets/svg-icons/verbal-icon.svg" alt="" class="cari-icon"><b>Verbal
                                        Reasoning: </b><span class="i-text">This section evaluates the ability to
                                        understand and analyse
                                        written
                                        material, as well as to evaluate arguments and correct written material to
                                        conform
                                        to
                                        standard written English. It includes reading comprehension, critical reasoning,
                                        and
                                        sentence correction.</span></p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="section-image1">
                                <img src="assets/images/gmat-banner-2.png" alt="" class="img-fluid gmat2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section2">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/Scoring-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Scoring</h4>
                                <ul>
                                    <li>The final score is reported on a scale of 200 to 800.</li>
                                    <li>Analytical Writing Assessment: Scored on a scale of 0 to 6, in half-point
                                        increments.</li>
                                    <li>Integrated Reasoning: Scored on a scale of 1 to 8, in one-point increments.</li>
                                    <li>Quantitative and Verbal Reasoning: Scored on a scale of 0 to 60.</li>
                                </ul>
                                <p>The GMAT is a computer-adaptive test, meaning the difficulty of the questions adjusts
                                    based on student’s performance. It is widely accepted by business schools worldwide
                                    as part of their admissions process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/test-tution-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Test Duration</h4>
                                <p>Approximately 3 hours.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/pricing-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Pricing</h4>
                                <p>INR 22,800</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/validity-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Validity</h4>
                                <p>GMAT score is valid up to five years from the test date. </p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/map-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Centres to pass TOEFL Test in India</h4>
                                <p>GMAT focus edition test centers are available in every major city nationwide,
                                    amounting to a
                                    total of 39 locations.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade <?php echo ($current_page === $base_url . 'coaching.php?DuolingoEnglish') ? 'show active' : ''; ?>"
                id="pills-DuolingoEnglish" role="tabpanel" aria-labelledby="pills-DuolingoEnglish-tab" tabindex="0">
                <div class="section1">
                    <div class="row reverse-column">
                        <div class="col-lg-7">
                            <div class="section-content1">
                                <h4 class="section-title2">What is Duolingo English?

                                </h4>
                                <p>Duolingo English Test is an English proficiency exam offered by the language-learning
                                    platform Duolingo. It’s designed to assess a persons ability in English, including
                                    reading,
                                    writing, listening, and speaking skills. The test is taken online and can be
                                    completed in about
                                    an hour. It’s accepted by various universities and institutions worldwide as proof
                                    of English
                                    language proficiency for academic and professional purposes.</p>
                                <p>It is a flexible, efficient, and affordable alternative to traditional testing
                                    methods. However, not every university accepts the Duolingo exam. Contact your
                                    Samyama Educational Consultant to discuss whether your dream university accepts
                                    Duolingo!</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="section-image1">
                                <img src="assets/images/dulingo-banner-1.png" alt="" class="img-fluid dulingo1">
                            </div>
                        </div>
                    </div>
                    <div class="row reverse-column">
                        <div class="col-lg-7">
                            <div class="section-content1">
                                <h4 class="section-title2">Duolingo Curriculum</h4>
                                <p>The test consists of few sections:
                                </p>
                                <p><img src="assets/svg-icons/speaking-icon.svg" alt=""
                                        class="cari-icon"><b>Speaking:</b><span class="i-text"> Students are presented
                                        with spoken prompts and are required to
                                        respond
                                        verbally. This section assesses pronunciation, fluency, and spoken communication
                                        skills.
                                    </span>
                                </p>
                                <p><img src="assets/svg-icons/writing-icon.svg" alt=""
                                        class="cari-icon"><b>Writing:</b><span class="i-text"> Students are given
                                        written prompts and are required to type their
                                        responses. This
                                        section assesses writing skills, including grammar, vocabulary, and
                                        coherence.</span>
                                </p>
                                <p><img src="assets/svg-icons/reading-icon.svg" alt="" class="cari-icon"><b>Reading:</b>
                                    <span class="i-text">Students read passages and answer comprehension questions based
                                        on
                                        the
                                        content. This section assesses reading comprehension skills.</span>
                                </p>
                                <p><img src="assets/svg-icons/listening-icon.svg" alt=""
                                        class="cari-icon"><b>Listening:</b> <span class="i-text">Students listen to
                                        audio recordings and answer questions based on
                                        the content.
                                        This section assesses listening comprehension skills.</span>
                                </p>
                                <p><img src="assets/svg-icons/grammar-icon.svg" alt="" class="cari-icon"><b>Grammar and
                                        Vocabulary: </b><span class="i-text">This section assesses knowledge of English
                                        grammar
                                        rules and
                                        vocabulary through multiple-choice questions.</span></p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="section-image1">
                                <img src="assets/images/dulingo-banner-2.png" alt="" class="img-fluid dulingo2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section2">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/Scoring-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Scoring</h4>
                                <p>Scores on the Duolingo English Test are reported on a scale from 10–160.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/test-tution-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Test Duration</h4>
                                <p>1 hours.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/pricing-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Pricing</h4>
                                <p>INR 5,000.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/validity-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Validity</h4>
                                <p>Results for the Duolingo English Test are valid for two years. </p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/map-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Centres to pass TOEFL Test in India</h4>
                                <p>Test is conducted online at your chosen location.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade <?php echo ($current_page === $base_url . 'coaching.php?GermanLanguage') ? 'show active' : ''; ?>"
                id="pills-GermanLanguage" role="tabpanel" aria-labelledby="pills-GermanLanguage-tab" tabindex="0">

                <div class="section1">
                    <div class="row reverse-column">
                        <div class="col-lg-7">
                            <div class="section-content1">
                                <h4 class="section-title2">What is German Language (A1)?
                                </h4>
                                <p>The German A1 level is the beginner level in the Common European Framework of
                                    Reference for Languages (CEFR), which is an internationally recognized standard for
                                    describing language ability. The German A1 level focuses on building a foundation in
                                    the
                                    language, enabling learners to communicate in simple everyday situations and
                                    understand
                                    basic written and spoken texts. It is the starting point for anyone interested in
                                    learning
                                    German.
                                </p>
                                <p>
                                    German language certificates are not always required to study in Germany. However,
                                    it can
                                    be beneficial to consider taking German language courses before or during your
                                    studies to
                                    enhance your language skills and better integrate into life in Germany.</p>
                                <p>

                                    After completing our German Language (A1) coaching classes, you will be prepared to
                                    take
                                    an exam and obtain an official language certificate of level A1.</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="section-image1">
                                <img src="assets/images/german-banner-1.png" alt="" class="img-fluid german1">
                            </div>
                        </div>
                    </div>
                    <div class="row reverse-column">
                        <div class="col-lg-7">
                            <div class="section-content1">
                                <h4 class="section-title2">German Language (A1) Curriculum</h4>
                                <p>The main skills assessed are (all at a basic level, in alignment with the CEFR A1
                                    standards): </p>
                                <p><img src="assets/svg-icons/speaking-icon.svg" alt=""
                                        class="cari-icon"><b>Speaking:</b> <span class="i-text">Participating in simple
                                        conversations, introducing oneself, asking and answering questions about
                                        personal details, and engaging in basic interactions. Speaking part of the exam
                                        is usually conducted in a group.</span>
                                </p>
                                <p><img src="assets/svg-icons/writing-icon.svg" alt=""
                                        class="cari-icon"><b>Writing:</b><span class="i-text"> Writing short, simple
                                        notes or messages, filling out forms with personal information.
                                    </span>
                                </p>
                                <p><img src="assets/svg-icons/reading-icon.svg" alt=""
                                        class="cari-icon"><b>Reading:</b><span class="i-text"> Understanding simple
                                        sentences and commonly used expressions in short texts like notices, catalogues,
                                        or menus.</span>
                                </p>
                                <p><img src="assets/svg-icons/listening-icon.svg" alt="" class="cari-icon"><b>Listening:
                                    </b><span class="i-text">understanding everyday expressions and very basic phrases
                                        when people speak slowly and clearly, concerning oneself, family, and immediate
                                        surroundings.</span>

                                </p>

                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="section-image1">
                                <img src="assets/images/german-banner-2.png" alt="" class="img-fluid german2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section2">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/Scoring-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Scoring</h4>
                                <p>It is a 60 points exam, and students must score 36 points (60%) to pass the exam.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/test-tution-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Test Duration</h4>
                                <p>1 hour and 15 minutes. </p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/pricing-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Pricing</h4>
                                <p>INR 9,400</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/validity-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Validity</h4>
                                <p>Goethe-Zertifikats A1 through C2 do not expire. Many institutions and employers,
                                    however, expect the certificate to be dated not more than two years ago.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="section-image1">
                                <img src="assets/images/map-banner.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="section-content1">
                                <h4 class="section-title2">Centres to pass German Language (A1)</h4>
                                <ul>
                                    <li>Goethe-Institute</li>
                                    <li>telc GmbH (The European Language Certificate)</li>
                                    <li>Austrian Language Diploma (ÖSD)</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="samyama-coaching-classes">
    <div class="container">
        <div class="section-title">
            <h2><span>Samyama</span> Coaching Classes</h2>
            <p class="mb-2 text-center">Samyama offers a variety of options for Coaching Classes tailored to
                individual needs. <br>Fees vary for each class type. Please contact us for more information to
                discuss the most suitable classes for your needs.</p>
        </div>
        <div class="row md-gy-5 g-2">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="s-coaching-card card1">
                    <div class="card-header">
                        <img src="assets/images/ielts-card-logo.png" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="" class="img-fluid">
                                <p>Free demo classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="" class="img-fluid">
                                <p>Online and offline classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="" class="img-fluid">
                                <p>Fresh batches starting
                                    every month</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="" class="img-fluid">
                                <p>25-30 Teaching Classes
                                    varying by class type</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="" class="img-fluid">
                                <p>2 Full Length Mock Tests</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="" class="img-fluid">
                                <p>IELTS Study Material</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>IELTS Academic & General
                                    Training</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Small group, large group, and 1-on-1 private classes available</p>
                            </div>
                        </div>
                        <div class="bottom-btn">
                            <a href="coaching.php?ielts#samyama-coaching">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="s-coaching-card card2">
                    <div class="card-header">
                        <img src="assets/images/toefl-card-logo.png" alt="" class=" img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Free demo classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Online classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Fresh batches starting every month</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>15 Teaching Classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>2 Full Length Mock Tests</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>TOEFL Study Material</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Discount on Test Fees</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Experienced and Certified
                                    Faculty</p>
                            </div>
                        </div>
                        <div class="bottom-btn">
                            <a href="coaching.php?toefl#samyama-coaching">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="s-coaching-card card3">
                    <div class="card-header">
                        <img src="assets/images/pearson-card-logo.png" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Free demo classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Online classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Fresh batches starting every month</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>20 Teaching Classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>2 Full Length Mock Tests</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>PTE Study Material</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>PTE Academic & PTE Core</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Experienced and Certified
                                    Faculty</p>
                            </div>
                        </div>
                        <div class="bottom-btn">
                            <a href="coaching.php?pte#samyama-coaching">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="s-coaching-card card4">
                    <div class="card-header">
                        <img src="assets/images/sat-card-logo.png" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Free demo classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Online classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Fresh batches starting every month</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>34 Teaching Classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>5 Full Length Mock Tests</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>SAT Study Material</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>One-on-one interaction, Doubt-Solving with the faculty</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Expert faculty members for English and Maths</p>
                            </div>
                        </div>
                        <div class="bottom-btn">
                            <a href="coaching.php?sat#samyama-coaching">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="s-coaching-card card5">
                    <div class="card-header">
                        <img src="assets/images/gre-card-logo.png" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Free demo classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Online classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Fresh batches starting every month</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>50 Teaching Classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>10 Full-Length Mock Tests</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>GRE Study Material</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>One-on-one interaction, Doubt-Solving with the faculty</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Expert faculty members for Verbal and Quants</p>
                            </div>
                        </div>
                        <div class="bottom-btn">
                            <a href="coaching.php?gre#samyama-coaching">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="s-coaching-card card6">
                    <div class="card-header">
                        <img src="assets/images/gmat-card-logo.png" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Free demo classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Online classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Fresh batch starting every month</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>65 Teaching Classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>5 Full-Length Mock Tests</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>GMAT Study Material</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Test Booking Assistance</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Expert faculty members</p>
                            </div>
                        </div>
                        <div class="bottom-btn">
                            <a href="coaching.php?gmat#samyama-coaching">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="s-coaching-card card7">
                    <div class="card-header">
                        <img src="assets/images/duolinge-card-logo.png" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Free demo classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Online classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Fresh batch starting every
                                    1-2 months</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>12 Teaching Classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>2 Mock Tests</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Duolingo English Study Material</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Test Booking Assistance</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Experienced and Certified Faculty</p>
                            </div>
                        </div>
                        <div class="bottom-btn">
                            <a href="coaching.php?DuolingoEnglish#samyama-coaching">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="s-coaching-card card8">
                    <div class="card-header">
                        <img src="assets/images/german-card-logo.png" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Free demo classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Online classes</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Fresh batch starting every
                                    month</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>65+ hours of extensive
                                    teaching</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>3 Full Length Mock Tests</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>German Language Study Material</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Test Booking Assistance</p>
                            </div>
                            <div class="advantage-row">
                                <img src="assets/svg-icons/red-checkbox.svg" alt="">
                                <p>Experienced and Certified
                                    Faculty</p>
                            </div>
                        </div>
                        <div class="bottom-btn">
                            <a href="coaching.php?GermanLanguage#samyama-coaching">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require 'components/footer.php'; ?>