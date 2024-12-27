<style type="text/css">
main.body-content {
    background-image: none !important;
}

a {
    text-decoration: none !important;
}

.form-check-input[type=checkbox]+label:before {
    position: inherit;
    /* top: 0; */
    left: 0;
    z-index: 0;
    width: 18px;
    height: 18px;
    margin-top: 3px;
    content: "";
    border: none !important;
    border-radius: 1px;
    -webkit-transition: .2s;
    transition: .2s;

}

.form-check-input[type=checkbox]:checked+label:before,
    {
    top: -4px;
    left: -5px;
    width: 12px;
    height: 1.375rem;
    border-top: none !important;
    border-right: none !important;
    border-bottom: none !important;
    border-left: none !important;
    -webkit-transform: rotate(40deg);
    transform: rotate(40deg);
    -webkit-transform-origin: 100% 100%;
    transform-origin: 100% 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}

.form-check-input[type=checkbox]+label {
    padding-left: 0px !important
}

.form-select {
    font-size: 0.875rem !important;
    font-weight: 400 !important;
    line-height: 1.5 !important;
    color: #212529 !important;
    font-family: 'Poppins' !important;
    background-color: #fff !important;
}

.form-check-input:disabled {
    opacity: 1 !important;
}

.form-check-input:disabled~.form-check-label,
.form-check-input[disabled]~.form-check-label {
    opacity: 1 !important;
}

.form-check-inline .form-check-input {
    margin-top: 5px !important;
}
</style>
</style>
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel box">
                <div class="ms-panel-header py-2"
                    style="display: flex; justify-content: space-between; border-bottom: 2px solid rgba(227 149 38) !important;">
                    <label class="invoiceInfo text-center d-block" style="margin: 0 auto;">
                        <span class="common_heading" style="width: auto!important; margin: 0 auto;">
                            <span class="text-white">Employee</span>
                        </span>
                    </label>
                </div>
                <div class="ms-panel-body">
                    <form class="needs-validation" id="Form" method="post" autocomplete="off">
                        <input name="Id" id="Id" value="<?php echo $studentregistration_master['Id']; ?>" type="hidden">

                        <div class="form-row">
                            <div class="col-md-4 col-lg-4 col-12">
                                <label for="name">Student Name <span class="required"
                                        style="color: red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" name="studentName"
                                        id="studentName" placeholder="Your business Name" readonly
                                        value="<?php echo $studentregistration_master['studentName']; ?>">
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-2 col-12">
                                <label for="name">Mobile Number <span class="required"
                                        style="color: red">*</span></label>
                                <div class="input-group">
                                    <input type="number" class="form-control form-control-sm" name="mobileNo"
                                        id="mobileNo" onkeypress="if(this.value.length==10) return false;" readonly
                                        placeholder="Your mobile Name"
                                        value="<?php echo $studentregistration_master['mobileNo']; ?>">
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-3 col-12">
                                <label for="name">Email <span class="required" style="color: red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" name="email" id="email"
                                        readonly placeholder="Your Email"
                                        value="<?php echo $studentregistration_master['email']; ?>">
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-3 col-12 d-flex align-items-center mt-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="genderM" value="1"
                                        <?php echo ($studentregistration_master['gender'] == 1) ? 'checked' : ''; ?>
                                        disabled>
                                    <label class="form-check-label" for="genderM">Male</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="genderF" value="2"
                                        <?php echo ($studentregistration_master['gender'] == 2) ? 'checked' : ''; ?>
                                        disabled>
                                    <label class="form-check-label" for="genderF">Female</label>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-2 col-12">
    <label for="name">Blood Group <span class="required" style="color: red">*</span></label>
    <div class="input-group">
        <select class="form-select bg-white" name="bloodgroup" id="bloodgroup" disabled>
            <option value="" disabled style="height: 50px;">Select Blood Group</option>
            <option value="1" <?php echo ($studentregistration_master['bloodgroup'] == 1) ? 'selected' : ''; ?>>A+</option>
            <option value="2" <?php echo ($studentregistration_master['bloodgroup'] == 2) ? 'selected' : ''; ?>>A-</option>
            <option value="3" <?php echo ($studentregistration_master['bloodgroup'] == 3) ? 'selected' : ''; ?>>B+</option>
            <option value="4" <?php echo ($studentregistration_master['bloodgroup'] == 4) ? 'selected' : ''; ?>>B-</option>
            <option value="5" <?php echo ($studentregistration_master['bloodgroup'] == 5) ? 'selected' : ''; ?>>AB+</option>
            <option value="6" <?php echo ($studentregistration_master['bloodgroup'] == 6) ? 'selected' : ''; ?>>AB-</option>
            <option value="7" <?php echo ($studentregistration_master['bloodgroup'] == 7) ? 'selected' : ''; ?>>O+</option>
            <option value="8" <?php echo ($studentregistration_master['bloodgroup'] == 8) ? 'selected' : ''; ?>>O-</option>
        </select>
    </div>
</div>

                            <div class="col-md-3 col-lg-2 col-12">
                                <label for="name">Job Category <span class="required"
                                        style="color: red">*</span></label>
                                <div class="input-group">
                                    <input class="form-control" readonly id="jobProfile" name="jobProfile"
                                        value="<?php echo $studentregistration_master['jobProfile']; ?>">
                                </div>
                            </div>

                            <div class="col-md-3 col-lg-4 col-12">
                                <label for="name">Address <span class="required" style="color: red">*</span></label>
                                <div>
                                    <textarea class="form-control" readonly style="height:120px!important;" id="address"
                                        name="address"><?php echo $studentregistration_master['address']; ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-3 col-lg-4 col-12">
                                <label for="name">Job Description <span class="required"
                                        style="color: red">*</span></label>
                                <div class="input-group">
                                    <textarea class="form-control" readonly style="height:120px!important;"
                                        id="jobdescription"
                                        name="jobdescription"><?php echo $studentregistration_master['jobdescription']; ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-2 col-12">
                                <label for="name">Aadhaar Card <span class="text-danger">*</span></label>
                                <p class="form-control form-control-sm">
                                    <a href="<?php echo base_url('upload/' . $studentregistration_master['aadhaarCard']); ?>"
                                        target="_blank"
                                        style="font-size: 15px; color: #23376c; font-weight: 600;"><?php echo $studentregistration_master['aadhaarCard']; ?></a>
                                </p>
                            </div>

                            <div class="col-md-4 col-lg-2 col-12">
                                <label for="name">Pan Card <span class="text-danger">*</span></label>
                                <p class="form-control form-control-sm">
                                    <a href="<?php echo base_url('upload/' . $studentregistration_master['panCard']); ?>"
                                        target="_blank"
                                        style="font-size: 15px; color: #23376c; font-weight: 600;"><?php echo $studentregistration_master['panCard']; ?></a>
                                </p>
                            </div>

                            <div class="col-md-4 col-lg-2 col-12">
                                <label for="name">Resume <span class="text-danger">*</span></label>
                                <p class="form-control form-control-sm">
                                    <a href="<?php echo base_url('upload/' . $studentregistration_master['resume']); ?>"
                                        target="_blank"
                                        style="font-size: 15px; color: #23376c; font-weight: 600;"><?php echo $studentregistration_master['resume']; ?></a>
                                </p>
                            </div>

                            <div
                                class="col-md-4 col-12 col-lg-2 d-flex justify-content-center align-items-center mt-lg-3">
                                <div class="">
                                    <button class="btn btn-primary"
                                        style="background:#23366d;    font-family: 'Poppins';font-size:13px"
                                        type="button" id="btn_gen" onclick="autoGenerate()">Generate Password</button>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-2 col-12">
                                <label for="name">Password <span class="required" style="color: red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" name="password"
                                        id="password" readonly placeholder="Your Password"
                                        value="<?php echo $studentregistration_master['password']; ?>">
                                </div>
                            </div>

                            <div
                                class="col-md-4 col-12 col-lg-1 d-flex justify-content-start align-items-center mt-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="status" name="status"
                                        <?php echo ($studentregistration_master['status'] == 1) ? 'checked': ''; ?>>
                                    <label class="form-check-label">Verified</label>
                                </div>

                            </div>
                            <div class="col-md-4 col-lg-1 px-2 d-flex justify-content-start align-items-center mt-lg-3 ">
              
              <div id="whatsapp"><img src="<?=base_url()?>Assets/images/JBFwhatsapp.webp" style="height: 36px;
    cursor: pointer;" style="height: 36px;
cursor: pointer;
margin-right: 10px;" onclick="sendMessageToWhatsApp();" ></div>
           </div>



                                 </div>
                                 <div style="text-align: center;">
           <button type="button" id="btn_savee" style="    font-family: 'Poppins';
color: white;" class="btn samplebtn waves-effect waves-light" ><i class="fa fa-check-circle" style="color: #FFF;"></i>Save</button>

         
         </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<script src="<?=base_url()?>Assets/js/AdminJS/jquery-3.3.1.min.js"></script>
<script>
a = false;
$(document).ready(function() {
    $("#btn_savee").click(function() {
        if (a == false) {
            // alert("hi");
            saveperform();
        }
    });
});

function saveperform() {
    var studentName = $('#studentName').val();
    var mobileNo = $('#mobileNo').val();
    var emails = $('#email').val();
    var location = $('#location').val();
    var Id = $('#Id').val();
    var password = $('#password').val();
    var status = $('#status').val();
    if (password == "") {
        swal({
            title: "",
            text: "Please Enter/Generate password",
            type: "error",
        });
    } else if (!document.getElementById('status').checked) {
        swal({
            title: "",
            text: "Please Verify",
            type: "error",
        });
        return false;
    } else {
        if (Id > 0) {
            a = true;

            var form = $("#Form").closest("form");
            var formData = new FormData(form[0]);

            $.ajax({
                url: base_path + "Admin/Update_Emp/updateProfile",
                type: "POST",

                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('#btn_savee').prop('disabled', true);
                    $('#btn_savee').html(
                    '<i class="fa fa-spinner " style="padding-right:2%;"></i> Loading');
                },
                success: function(data) {
                    $("#Form").trigger("reset");
                    $('#btn_savee').html(
                        '<i class="fa fa-check-circle" style="font-size: 20px;color: #FFF;"></i>Save');
                    $('#btn_savee').prop('disabled', false);



                    swal({
                        title: "",
                        text: "Data Update Successfully",
                        type: "success",
                        showCancelButton: false,
                        showConfirmButton: false,
                        width: '1000px',
                        timer: 1000
                    });
                    window.location.href = base_path + "Admin/modifyEmployee/modifyEmployee";


                }
            });

        }

    }

}
</script>


<script>
$('#Form').bind('keydown', function(event) {
    if (event.ctrlKey || event.metaKey) {
        switch (String.fromCharCode(event.which).toLowerCase()) {
            case 's':
                event.preventDefault();
                // alert('ctrl-s');
                saveperform();
                break;

        }
        $(function() {
            $("#businessName").focus();
        });

    }
});


var id = document.getElementById('Id').value;


if (id > 0) {

    // alert(id);

    var gender = "1";
    // alert(gender);
    if (gender == 1) {
        // alert("hello");
        document.getElementById("genderM").checked = true;
    } else {
        document.getElementById("genderF").checked = true;

    }
}
document.getElementById("status").addEventListener('change', function() {
    var isChecked = this.checked; // Determine if the checkbox is checked
    var whatsappIcon = document.getElementById('whatsapp'); // Get the WhatsApp icon element

    // Show or hide WhatsApp icon based on checkbox state
    if (isChecked) {
        whatsappIcon.style.display = 'block'; // Show WhatsApp icon if checkbox is checked
        moveToVerified(this.closest('tr').id); // Pass the row ID to move to verified
    } else {
        whatsappIcon.style.display = 'none'; // Hide WhatsApp icon if checkbox is not checked
        // Optionally, move back to the unverified table if needed
    }
});



function moveToVerified(rowId) {
    // Get the row element from the unverified table
    var row = document.getElementById(rowId);

    if (row) {
        // Remove the row from the unverified table
        row.parentNode.removeChild(row);

        // Add the row to the verified table body
        document.getElementById('verified-table-body').appendChild(row);


    }
}

function autoGenerate() {
    // alert("clicked auto generate");
    let fname = document.getElementById('studentName').value;
    let mob = document.getElementById('mobileNo').value;
    let upass;

    for (let x = 0; x < 5; x++) {
        upass = fname.charAt(0) + fname.charAt(1) + fname.charAt(2) + mob.charAt(0) + mob.charAt(1) + mob.charAt(8) +
            mob.charAt(9);
    }
    document.getElementById('password').value = upass;
}
</script>
<script>
// function sendMessageToWhatsApp() {
//     // var phoneNumber = document.getElementById('mobileNo').value;
//     var mobileno = document.getElementById('mobileNo').value;
//     var passwrord = document.getElementById('password').value;
//     var name = document.getElementById('studentName').value;

//     // Construct the message with line breaks
//     var message = 'Welcome To JBF !! \n Hello, ' + name + '\nYour Verification Successfully.' +
//         '\nLogin with Below details' +
//         '\nMobile No: ' + mobileno +
//         '\nPassword: ' + passwrord;
//     var whatsappUrl = `https://api.whatsapp.com/send?phone=${mobileno}&text=${encodeURIComponent(message)}`;

//     // Open the WhatsApp URL in a new tab or window
//     window.open(whatsappUrl, '_blank');
// }
function sendMessageToWhatsApp() {
    var mobileno = '+91' + document.getElementById('mobileNo').value.trim();
    var password = document.getElementById('password').value.trim();
    var name = document.getElementById('studentName').value.trim();

    // Validate input fields
    if (!mobileno || !password || !name) {
        alert('Please fill in all the required fields.');
        return;
    }

    // Construct the message
    var message = `Welcome To JBF !!%0AHello, ${name}%0AYour Verification was Successful.%0ALogin with the following details:%0AMobile No: ${mobileno}%0APassword: ${password}`;

    // Construct WhatsApp URL
    var whatsappUrl = `https://api.whatsapp.com/send?phone=${mobileno}&text=${message}`;
    
    // Debugging: log the generated URL
    console.log(whatsappUrl);

    // Open the WhatsApp URL in a new tab or window
    window.open(whatsappUrl, '_blank');
}

</script>