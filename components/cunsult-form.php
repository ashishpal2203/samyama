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
        <div class="mb-1">
            <div class="">
                <button type="button" class="btn btn-toggle" data-bs-toggle="button" aria-pressed="false"
                    autocomplete="off">
                    <div class="handle"></div>
                </button>
                <span class="whatsapp-lable">Use this as whatsapp number</span>
            </div>
        </div>
        <div class="mb-2">
            <label for="basic-url" class="form-label1">Required Services</label>
            <select name="" id="" class="form-control w-100" onchange="optionsHtml(event);">
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
                    <p class="mb-0">I accept the <span style="color: #44B24F; font-weight: 500;">Terms &
                            Conditions</span></p>
                </div>
            </div>
            <div class="buttonBox">
                <button>Get Started</button>
            </div>
        </div>
    </div>
</div>


<script>
    const travel = `<div class="mb-1 d-flex gap-2">
            <div class="w-100">
                <select name="" id="" class="form-control w-100">
                    <option value="">Destination</option>
                    <option value="">USA</option>
                    <option value="">UK</option>
                    <option value="">France</option>
                    <option value="">Germany</option>
                    <option value="">Dubai</option>
                </select>
            </div>
            <div class="w-100">
                <select name="" id="" class="form-control w-100">
                    <option value="Business Visa">Types of Visa</option>
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
        <select name="" id="" class="form-control w-100">
            <option value="">Destination</option>
            <option value="">USA</option>
            <option value="">UK</option>
            <option value="">France</option>
            <option value="">Germany</option>
            <option value="">Dubai</option>
        </select>
    </div>
    <div class="w-100">
        <select name="" id="" class="form-control w-100">
            <option value="">Course Types</option>
            <option value="UG">UG</option>
            <option value="PG">PG</option>
            <option value="Phd">Phd</option>
            <option value="Student Visa">Student Visa</option>
            <option value="Diploma/Certificate">Diploma/Certificate</option>
            <option value="Something Else">Something Else</option>
        </select>
    </div>
</div>`;

    const coaching = `<div class="mb-1 ">
    <div class="w-100">
        <select name="" id="" class="form-control w-100">
            <option value="">Select a coaching</option>
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
        <select name="" id="" class="form-control w-100">
            <option value="">Select a Passport</option>
            <option value="Fresh Passport Application">Fresh Passport Application</option>
            <option value="Passport Renewal">Passport Renewal</option>
        </select>
    </div>
</div>`;
   
    const OCI = `<div class="mb-1 d-flex gap-2">
    <div class="w-100">
        <select name="" id="" class="form-control w-100">
            <option value="Application in India">Application in India</option>
            <option value="Application outside of India">Application outside of India</option>
        </select>
    </div>
    <div class="w-100">
        <select name="" id="" class="form-control w-100">
            <option value="Fresh OCI Application">Fresh OCI Application</option>
            <option value="In Lieu of valid PIO-Card">In Lieu of valid PIO-Card</option>
            <option value="In Lieu of lost PIO-Card">In Lieu of lost PIO-Card</option>
            <option value="Change in Personal Circumstances of existing OCI Holder">Change in Personal Circumstances of existing OCI Holder</option>
            <option value="Special Permission for existing OCI Holder">Special Permission for existing OCI Holder</option>
        </select>
    </div>
</div>`;
function optionsHtml(event) {
        const input = event.target.value;
        if (input === "travel") {
            $(".empty_div").html(travel);
        }
        else if (input === "study") {
            $(".empty_div").html(study);
        }
        else if (input === "coaching") {
            $(".empty_div").html(coaching);
        }
        else if (input === "passport") {
            $(".empty_div").html(passport);
        }
        else if (input === "OCI") {
            $(".empty_div").html(OCI);
        }
        else{
            $(".empty_div").html("");
        }
    }
</script>