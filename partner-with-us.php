<?php require 'components/header.php'; ?>
<!--Partnership submit popup -->
<div class="modal fade" id="partnership-submit" tabindex="-1" aria-labelledby="partnership-submitLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <button type="button" class="btn-close popup_custom_close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="submit_popup">
                    <img src="assets/images/partnership-submit.svg" alt="" class="img-fluid mt-4">
                    <div class="box-content ">
                        <p>Thank you for choosing <span>Samyama!</span> <br>
                        Thank you for choosing Samyama!
                        We have received your request to partner with us, and our team will reach out to you soon.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<section id="contact-us" class="partner-w-us">
    <div class="container">
        <div class="contact-us-container">
            <div class="section-title">
                <h2><span>Partner</span> With Us</h2>
                <p class="mb-2 text-center">Welcome to the Partner With Us page at Samyama! <br>
                    We are thrilled
                    to explore collaboration opportunities with companies and
                    universities that share our commitment to making a positive
                    impact.</p>
            </div>

            <div class="contact-us-card">
                <div class="row">
                    <div class="col-lg-5">
                        <form id="partnershipForm" action="partnership-mail.php" method="post" onsubmit="validateMyForm2(event, this);">
                            <div class="cunsult-form">
                                <h4 class="cunsult-form-title partner-form">You can also fill in this partnership form
                                    and
                                    we will get in touch
                                    with you.</h4>
                                <div class="cunsult-form-body">
                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label1">Company/University</label>
                                        <input type="text" class="form-control w-100"
                                            aria-describedby="basic-addon3 basic-addon4"
                                            placeholder="Enter company/university name" name="company_name" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label1">Contact Person</label>
                                        <input type="text" class="form-control w-100"
                                            aria-describedby="basic-addon3 basic-addon4"
                                            placeholder="Enter contact person name" name="contact_person_name" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label1">Email</label>
                                        <input type="email" class="form-control w-100"
                                            aria-describedby="basic-addon3 basic-addon4" placeholder="Enter email"
                                            name="email" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label1">Contact No</label>
                                        <div class="form-group">
                                            <div class="input-group input-group-sm">
                                                <input id="phone" type="tel" name="phone" class="phone form-control w-100"
                                                    autofocus  >
                                                    <input type="hidden" name="code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="">
                                            <input type="checkbox" class="d-none" name="whatsapp_status" value="1"
                                                id="whatsapp">
                                            <button type="button" class="btn btn-toggle" data-bs-toggle="button"
                                                aria-pressed="false" autocomplete="off" onclick="toggleCheckbox(this)">
                                                <div class="handle"></div>
                                            </button>
                                            <span class="whatsapp-lable">Use this as WhatsApp number</span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label1">Message</label>
                                        <input type="text" class="form-control w-100"
                                            aria-describedby="basic-addon3 basic-addon4"
                                            placeholder="Enter your message" name="message" >
                                    </div>
                                    <div class="cunsult-form-footer">
                                        <div class="mb-3">
                                            <div class="d-flex accept-term gap-2 align-items-center">
                                                <input type="checkbox" name="accept" id="">
                                                <p class="mb-0">I accept the <span
                                                        style="color: #44B24F; font-weight: 500;">Terms &amp;
                                                        Conditions</span></p>
                                            </div>
                                        </div>
                                        <div class="buttonBox">
                                            <button type="submit" name="submit" id="submitBtn">Get Started</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-right">
                            <div class="contact-row">
                                <div class="icon-box">
                                    <img src="assets/svg-icons/contact-phone-icon.svg" alt="">
                                </div>
                                <div class="content-p">
                                    <h6>Phone</h6>
                                    <p><a href="tel:+918779346858">+91 877 934 6858</a></p>
                                </div>
                            </div>
                            <div class="contact-row">
                                <div class="icon-box">
                                    <img src="assets\images\contact-email.png" alt="">
                                </div>
                                <div class="content-p">
                                    <h6>Email</h6>
                                    <p><a href="mailto:partners@samyama.in">partners@samyama.in</a></p>
                                </div>
                            </div>
                            <div class="contact-row">
                                <div class="icon-box">
                                    <img src="assets\images\contact-location.png" alt="">
                                </div>
                                <div class="content-p">
                                    <h6>Corporate Address</h6>
                                    <p>503, Nahar Business Centre, Nahar Amrit Shakti, LOK Milan Colony, Chandivali,
                                        Powai, Mumbai, Maharashtra 400072</p>
                                </div>
                            </div>
                        </div>
                        <div class="note-p mt-5">
                            <p><span>Note: </span><br> Please note, that we kindly request you to call and book an
                                appointment before visiting our office to ensure that we can provide you with our
                                undivided attention and assistance.</p>
                            <p><span>Grievance:</span> <br> In case of any Grievance, please email to&nbsp;<a
                                    href="mailto:feedback@samyama.in">feedback@samyama.in</a></p>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact-map">
    <div class="container">
        <div class="contact-us-container">
            <div class="section-title">
                <h2>Locate Us On <span>Map</span></h2>
            </div>
            <div class="mapView">
                <iframe class="w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.8780836077403!2d72.89526977373765!3d19.113003650812693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c901d0b3fb3f%3A0x7bd456fcef270762!2sSamyama%20%7C%20Visa%20%7C%20Immigration%20%7C%20Study%20Abroad%20%7C%20Coaching%20%7C%20Passport%20%26%20OCI%20%7C%20Consultants!5e0!3m2!1sen!2sin!4v1719314634042!5m2!1sen!2sin"
                    height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>


<script>
    function toggleCheckbox(button) {
        const checkbox = document.getElementById('whatsapp');
        if (checkbox) {
            checkbox.checked = !checkbox.checked;
            button.classList.toggle('active', checkbox.checked);
        }
    }

    //     function enableToggleBtn(event) {
    //     const checkbox = event.target; // Get the checkbox that triggered the event
    //     const submitBtn = document.getElementById('submitBtn');

    //     if (submitBtn) {
    //         submitBtn.disabled = !checkbox.checked; // Enable or disable the submit button based on checkbox state
    //     }
    // }


    function validateMyForm2(event, formElement) {
        const $form = $(formElement);

        const phone = $form.find('input[name="phone"]').val();
        const companyName = $form.find('input[name="company_name"]').val();
        const contactPersonName = $form.find('input[name="contact_person_name"]').val();
        const email = $form.find('input[name="email"]').val();
        const message = $form.find('input[name="message"]').val();
        const acceptTerms = $form.find('input[name="accept"]').prop('checked');

        if (!companyName || !contactPersonName || !email || !message || !phone) {
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



<?php require 'components/footer.php'; ?>

