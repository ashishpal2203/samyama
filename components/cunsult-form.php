<div class="cunsult-form">
    <h4 class="cunsult-form-title">GET FREE CONSULTATION</h4>
    <div class="cunsult-form-body">
        <div class="mb-1">
            <label for="basic-url" class="form-label1">Full Name</label>
            <input type="text" class="form-control w-100" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                placeholder="Enter full name">
        </div>
        <div class="mb-1">
            <label for="basic-url" class="form-label1">Email</label>
            <input type="text" class="form-control w-100" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                placeholder="Enter email">
        </div>
        <div class="mb-1">
            <label for="basic-url" class="form-label1">Contact No</label>
            <div class="input-group mb-1">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">+91</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
            </div>
        </div>
        <div class="mb-3">
            <div class="">
                <button type="button" class="btn btn-toggle" data-bs-toggle="button" aria-pressed="false"
                    autocomplete="off">
                    <div class="handle"></div>
                </button>
                <span class="whatsapp-lable">Use this as WhatsApp number</span>
            </div>
        </div>
        <div class="mb-2">
            <label for="basic-url" class="form-label1">Required Services</label>
            <select name="" id="" class="form-select w-100" onchange="optionsHtml(event);">
                <option value="">Select a Service</option>
                <option value="travel">Travel Visas & Immigration</option>
                <option value="study">Study Abroad</option>
                <option value="coaching">Coaching</option>
                <option value="passport">Passport</option>
                <option value="OCI">OCI</option>
            </select>
        </div>
        <div class="empty_div">

        </div>
        <div class="cunsult-form-footer">
            <div class="mb-3">
                <div class="d-flex accept-term gap-2 align-items-center">
                    <input type="checkbox" name="" id="">
                    <p class="mb-0">I accept the <a href="term-and-condition.php?terms" style="color: #44B24F; font-weight: 500; text-decoration: none;">Terms &
                            Conditions</a href=""></p>
                </div>
            </div>
            <div class="buttonBox">
                <button type="button" data-bs-toggle="modal" data-bs-target="#cunsult-submit">Get Started</button>
            </div>
        </div>
    </div>
</div>



<!-- submit popup -->
<div class="modal fade" id="cunsult-submit" tabindex="-1" aria-labelledby="cunsult-submitLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <button type="button" class="btn-close popup_custom_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="submit_popup">
                    <img src="assets/images/cunsult-submit.svg" alt="" class="img-fluid">
                    <div class="box-content ">
                        <p>Thank you for choosing <span>Samyama!</span> <br>
                            We have received your request for a free consultation, and our team will reach out to you
                            soon.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>