<form action="lead-mail.php" method="post" onsubmit="validateMyForm(event, this);" class="h-100">
    <div class="cunsult-form">
        <h4 class="cunsult-form-title">GET FREE CONSULTATION</h4>
        <div class="cunsult-form-body">
            <div class="mb-1">
                <label for="basic-url" class="form-label1">Full Name</label>
                <input type="text" class="form-control w-100" id="basic-url"
                    aria-describedby="basic-addon3 basic-addon4" placeholder="Enter full name" name="name">
            </div>
            <div class="mb-1">
                <label for="basic-url" class="form-label1">Email</label>
                <input type="email" class="form-control w-100" id="basic-url"
                    aria-describedby="basic-addon3 basic-addon4" placeholder="Enter email" name="email">
            </div>
            <div class="mb-1">
                <label for="basic-url" class="form-label1">Contact No</label>
                <div class="form-group">
                    <div class="input-group input-group-sm">
                        <input id="phone" type="tel" name="phone" class="phone form-control w-100" autofocus>
                        <input type="hidden" name="code">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="">
                    <input type="checkbox" class="d-none" name="whatsapp_status" value="1" id="whatsapp">
                    <button type="button" class="btn btn-toggle" data-bs-toggle="button" aria-pressed="false"
                        autocomplete="off" onclick="toggleCheckbox(this)">
                        <div class="handle"></div>
                    </button>
                    <span class="whatsapp-lable">Use this as WhatsApp number</span>
                </div>
            </div>
            <div class="mb-2">
                <label for="basic-url" class="form-label1">Required Services</label>
                <select name="service" id="" class="form-select w-100" onchange="optionsHtml(event);">
                    <option value="">Select a Service</option>
                    <option value="Travel Visas & Immigration">Travel Visas & Immigration</option>
                    <option value="Study Abroad">Study Abroad</option>
                    <option value="Coaching">Coaching</option>
                    <option value="Passport">Passport</option>
                    <option value="OCI">OCI</option>
                </select>
            </div>
            <div class="empty_div">

            </div>
            <div class="cunsult-form-footer">
                <div class="mb-3">
                    <div class="d-flex accept-term gap-2 align-items-center">
                        <input type="checkbox" name="accept">
                        <p class="mb-0">I accept the <a href="term-and-condition.php?terms"
                                style="color: #44B24F; font-weight: 500; text-decoration: none;">Terms &
                                Conditions</a href=""></p>
                    </div>
                </div>
                <div class="buttonBox">
                    <button type="submit" name="submit">Get Started</button>
                </div>
            </div>
        </div>
    </div>
</form>



