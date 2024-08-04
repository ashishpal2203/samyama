</main>

<footer>

    <!-- submit popup -->
    <div class="modal fade" id="cunsult-submit" tabindex="-1" aria-labelledby="cunsult-submitLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <button type="button" class="btn-close popup_custom_close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="submit_popup">
                        <img src="assets/images/cunsult-submit.svg" alt="" class="img-fluid">
                        <div class="box-content ">
                            <p>Thank you for choosing <span>Samyama!</span> <br>
                                We have received your request for a free consultation, and our team will reach out to
                                you
                                soon.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- Free cunsult Modal -->
    <div class="modal fade" id="freeCunsult" tabindex="-1" aria-labelledby="freeCunsultLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm-custom">
            <div class="modal-content">
                <div class="modal-body p-0 position-relative">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <?php require 'components/cunsult-form.php'; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Feedback Modal -->
    <div class="modal fade" id="Feedback" tabindex="-1" aria-labelledby="FeedbackLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content pt-3">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <form action="feedback-mail.php" method="post">
                        <div class="container">
                            <div class="section-title">
                                <h2>We Value Your <span>Feedback!</span></h2>
                                <p class="mb-2">Help Us Improve by Sharing Your Thoughts and Suggestions.</p>
                            </div>

                            <div class="feedback-form">
                                <div class="row gy-3">
                                    <div class="col-lg-6">
                                        <label for="" class="feFormLable w-100">Name</label>
                                        <input type="text" class="feFormEnput w-100" placeholder="Enter your name"
                                            name="name" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="feFormLable w-100">Contact Number</label>
                                        <input type="number" class="feFormEnput w-100"
                                            placeholder="Enter your contact number" name="phone" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="" class="feFormLable w-100">Email</label>
                                        <input type="email" class="feFormEnput w-100"
                                            placeholder="Enter your email address" name="email" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="" class="feFormLable w-100">Message</label>
                                        <textarea class="feFormEnput w-100" placeholder="Enter your message" rows="6"
                                            aria-label="With textarea" name="message" required></textarea>
                                    </div>
                                </div>
                                <div class="feedback-btns">
                                    <button class="feed_btn" type="submit">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    <section id="free-cunsult-section">
        <img src="assets/extra/cross-line5.svg" alt="" class="cross-line5 img-fluid">
        <div class="container">
            <div class="section-title">
                <h2>Book <span>Free</span> Consultation</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="free-cunsult-container">
                        <img src="assets/icon/free-consultation-vector.webp" alt="">
                        <button class="get-started-btn" type="button" data-bs-toggle="modal"
                            data-bs-target="#freeCunsult">GET STARTED</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer-menu-content">
        <div class="back-to-home">
            <a href="#">
                <img src="assets/extra/back-to-top.svg" alt="" class="img-fluid">
            </a>
        </div>
        <div class="container-fluid">
            <div class="footer-menu-container">
                <div class="">
                    <p class="text-center quick-links-label">Quick Links</p>
                    <div class="d-flex justify-content-center gap-4 flex-wrap">
                        <a href="travel-visa-imigration.php" class="quick-link">Travel Visas & Immigration</a>
                        <a href="study-abrod.php" class="quick-link">Study Abroad</a>
                        <a href="coaching.php" class="quick-link">Coaching</a>
                        <a href="passport-oci.php" class="quick-link">Passport & OCI</a>
                    </div>
                </div>
                <div class="">
                    <p class="text-center quick-links-label">Other Links</p>
                    <div class="d-flex justify-content-center flex-wrap gap-4">
                        <a href="term-and-condition.php?terms" class="quick-link">Terms & Conditions</a>
                        <a href="term-and-condition.php?privacy" class="quick-link">Privacy Policy</a>
                        <a href="term-and-condition.php?refund" class="quick-link">Refund & Cancellation Policy</a>
                        <!--<a href="#" class="quick-link">Passport & OCI</a>-->
                    </div>
                </div>
            </div>
            <div class="footer-menu-bottom d-flex justify-content-between">
                <div class="d-flex align-items-center gap-2 payment-options">
                    <p>Payment Options: </p>
                    <img src="assets/images/card-logo-icons.png" alt="">
                </div>
                <div class="footer-menu-bottom-right">
                    <a href="#" class="feedback" type="button" data-bs-toggle="modal"
                        data-bs-target="#Feedback">Feedback</a>
                    <a href="partner-with-us.php" class="partner-with-us"><img
                            src="assets/svg-icons/preheader-partner.svg" alt="">PARTNER WITH US</a>
                    <a href="contact-us.php" class="contact-us">CONTACT US</a>
                </div>
            </div>
        </div>
    </section>

    <section id="copyright">
        <div class="container-fluid">
            <div class="copyright-header">
                <p>Copyright Ⓒ 2024, Samyama. All rights reserved.</p>
                <div class="hr_line"></div>
                <div class="mobile-social">
                    <div class="card-c">
                        <img src="assets/images/card-logo-icons.png" alt="" class="img-fluid">
                    </div>
                    <div class="socialc d-flex align-items-center gap-0 gap-md-4">
                        <span class="follow_us">Follow us:</span>
                        <a href="https://maps.app.goo.gl/tV2Khj6Zgz5tN3WS6" target="_blank"> <img
                                src="assets/svg-icons/google-icon.svg" alt=""></a>
                        <a href="https://wa.me/918779346858" target="_blank"> <img
                                src="assets/svg-icons/whatsapp-icon.svg" alt=""></a>
                        <a href="https://www.facebook.com/samyamaindia" target="_blank"> <img
                                src="assets/svg-icons/facebook-icon.svg" alt=""></a>
                        <a href="https://www.instagram.com/samyamaindia" target="_blank"><img
                                src="assets/svg-icons/instagram-icon.svg" alt=""></a>
                        <a href="https://www.youtube.com/@samyamaindia" target="_blank"> <img
                                src="assets/svg-icons/youtube-icon.svg" alt=""></a>
                        <a href="https://x.com/samyamaindia" target="_blank"> <img src="assets/svg-icons/x-icon.svg"
                                alt=""></a>
                        <a href="https://www.linkedin.com/company/samyama-india/" target="_blank"> <img
                                src="assets/svg-icons/linkedin-icon.svg" alt=""></a>
                        <a href="https://in.pinterest.com/samyamaindia/" target="_blank"> <img
                                src="assets/svg-icons/pintrest-icon.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="lotee-animation-container"></div>
    </section>
</footer>



<script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.4/lottie.min.js"
    integrity="sha512-m0RQU4SBx0p/bLwRiI4fJBGRafVLZ4s86wRe1+OAx5EXbcWiS/X1jvYdJQRD8jOoIVl+WTyVeMawUWVCh1O8+Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/intlTelInput.min.js"></script>
<script>
    $(function () {
        var code = ""; // Assigning value from model.
        $('.phone').val(code);
        $('.phone').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            // hiddenInput: "full_number",
            initialCountry: "in",
            //  nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['in', 'gb', 'us'],
            separateDialCode: true
        });
    });

    function toggleCheckbox(button) {
        const checkbox = document.getElementById('whatsapp');
        if (checkbox) {
            checkbox.checked = !checkbox.checked;
            button.classList.toggle('active', checkbox.checked);
        }
    }

</script>

<script>
    async function populateCountryDropdown(event) {
        try {
            const response = await fetch('assets/json/all_country.json');
            const data = await response.json();

            // Assuming your JSON response is an array of country objects
            const countries = data;

            // Use jQuery to find the closest .cunsult-form-body and then the #country_dropdown within it
            const $dropdown = $(event.target).closest('.cunsult-form-body').find('#country_dropdown');

            // Clear existing options
            $dropdown.empty();
            $dropdown.append('<option value="">Select Country</option>');

            // Iterate over the array of countries and populate the dropdown
            for (const country of countries) {
                const countryName = country.name;
                const countryCode = country.code;
                $dropdown.append(`<option value="${countryName}">${countryName}</option>`);
            }
        } catch (error) {
            console.error('Error fetching country data:', error);
        }
    }



    const travel = `<div class="mb-1 d-flex gap-2" >
      <div class="w-100">
          <select name="destination" id="country_dropdown" class="form-select w-100">
              <option value="">Destination</option>
              
          </select>
      </div>
      <div class="w-100">
          <select name="types_of_visa" id="" class="form-select w-100">
              <option value="Business Visa">Types of Visa</option>
              <option value="Business Visa">Tourist Visa</option>
              <option value="Business Visa">Business Visa</option>
              <option value="Schengen Visa">Schengen Visa</option>
              <option value="Student Visa">Student Visa</option>
              <option value="Work Visa">Work Visa</option>
              <option value="PR Visa">PR Visa</option>
              <option value="Investment Visa">Investment Visa</option>
              <option value="Entrepreneur Visa">Entrepreneur Visa</option>
              <option value="Dependent Visa">Dependent Visa</option>
              <option value="Spouse Visa">Spouse Visa</option>
              <option value="Family Visa">Family Visa</option>
              <option value="Something Else">Something Else</option>
              
          </select>
      </div>
  </div>`;

    const study = `<div class="mb-1 d-flex gap-2">
<div class="w-100">
  <select name="destination" id="country_dropdown" class="form-select w-100">
              <option value="">Destination</option>
              
          </select>
</div>
<div class="w-100">
  <select name="course_types" id="" class="form-select w-100">
      <option value="">Course Types</option>
      <option value="UG">UG</option>
      <option value="PG">PG</option>
      <option value="Phd">Phd</option>
      <option value="Diploma/Certificate">Diploma/Certificate</option>
      <option value="Something Else">Something Else</option>
  </select>
</div>
</div>`;

    const coaching = `<div class="mb-1 ">
<div class="w-100">
  <select name="select_course[]" id="" class="form-select w-100 selectToMultiple" name="states[]" multiple="multiple">
      <option value="IELTS">IELTS</option>
      <option value="TOEFL">TOEFL</option>
      <option value="PTE">PTE</option>
      <option value="SAT">SAT</option>
      <option value="GRE">GRE</option>
      <option value="GMAT">GMAT</option>
      <option value="Duolingo English">Duolingo English</option>
      <option value="German Language (A1)">German Language (A1)</option>
  </select>
</div>
</div>`;

    const passport = `<div class="mb-1 ">
<div class="w-100">
  <select name="select_a_service" id="" class="form-select w-100">
      <option value="">Select a service</option>
      <option value="Fresh Passport Application">Fresh Passport Application</option>
      <option value="Passport Renewal">Passport Renewal</option>
  </select>
</div>
</div>`;

    const OCI = `<div class="mb-1 d-flex gap-2">
<div class="w-100">
  <select name="select_a_location" id="" class="form-select w-100">
      <option value="">Select a location</option>
      <option value="Application in India">Application in India</option>
      <option value="Application outside of India">Application outside of India</option>
  </select>
</div>
<div class="w-100">
  <select name="select_a_service" id="" class="form-select w-100">
      <option value="">Select a service</option>
      <option value="Fresh OCI Application">Fresh OCI Application</option>
      <option value="In Lieu of valid PIO-Card">In Lieu of valid PIO-Card</option>
      <option value="In Lieu of lost PIO-Card">In Lieu of lost PIO-Card</option>
      <option value="Change in Personal Circumstances">Change in Personal Circumstances</option>
      <option value="Special Permission">Special Permission</option>
  </select>
</div>
</div>`;
    function optionsHtml(event) {
    
        const input = event.target.value;

        // Use jQuery to find the closest `.empty_div` and update its content
        const $emptyDiv = $(event.target).closest('.cunsult-form-body').find('.empty_div');

        if (input === "Travel Visas & Immigration") {
            $emptyDiv.html(travel);
            populateCountryDropdown(event);
        } else if (input === "Study Abroad") {
            $emptyDiv.html(study);
            populateCountryDropdown(event);
        } else if (input === "Coaching") {
            $emptyDiv.html(coaching);
            $('.selectToMultiple').select2({
                placeholder: 'Select a course',
            });
        } else if (input === "Passport") {
            $emptyDiv.html(passport);
        } else if (input === "OCI") {
            $emptyDiv.html(OCI);
        } else {
            $emptyDiv.html("");
        }
    }


    function validateMyForm(event, formElement) {
        // Prevent the form from submitting by default

        const $form = $(formElement);

        const fullName = $form.find('input[name="name"]').val();
        const email = $form.find('input[name="email"]').val();
        const phone = $form.find('input[name="phone"]').val();
        const service = $form.find('select[name="service"]').val();
        const acceptTerms = $form.find('input[name="accept"]').prop('checked');

        console.log(email);

        if (!fullName || !email || !phone || !service) {
            event.preventDefault();
            alert('Please fill out all fields');
            return;
        }

        if (!acceptTerms) {
            event.preventDefault();
            alert('Please accept the Terms & Conditions');
            return;
        }

        const code = $form.find('input[name="code"]');
        const codeInput = $form.find('input[name="phone"]').intlTelInput("getSelectedCountryData").dialCode;
        code.val(codeInput);


    }


</script>


<?php
if ($current_page === $base_url . '?consultation') {
    echo "<script>
   var myModal = new bootstrap.Modal(document.getElementById('cunsult-submit'));
            myModal.show();
    </script>";
}
if ($current_page === $base_url . 'partner-with-us.php?partnership') {
    echo "<script>
   var myModal = new bootstrap.Modal(document.getElementById('partnership-submit'));
            myModal.show();
    </script>";
}
?>

<script src="js/script.js"></script>



</body>

</html>