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
</style>



<link rel="stylesheet" type="text/css" href="https://www.adminjainbusiness.padmamanisilver.com/assets2/form.css">
<link rel="stylesheet" type="text/css" href="https://www.adminjainbusiness.padmamanisilver.com/assets2/select2.min.css">
<link href="https://www.adminjainbusiness.padmamanisilver.com/assets/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel box">


                <div class="ms-panel-header py-2" style="display: flex;
            justify-content: space-between; border-bottom: 2px solid rgba(227 149 38) !important;">
                    <label class="invoiceInfo  text-center d-block" style="margin: 0 auto;">
                        <span class="common_heading " style="width: auto!important;margin:0 auto;">
                            <span class="text-white">Business</span></span>
                    </label>



                </div>


                <div class="ms-panel-body">

                    <form class="needs-validation"
                        action="<?php echo base_url('update/'.(isset($businessregistration_master -> Id)?'updaedata':'insertdata')) ?>"
                        id="Form" method="post" autocomplete="off">
                        <input name="Id" id="Id" value="<?php echo $businessregistration_master['Id']; ?>"
                            type="hidden">

                        <div class="form-row">

                            <div class="col-md-4 col-12 col-sm-6 col-lg-4 ">
                                <label for="name">Business Name <span class="required"
                                        style="color: red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" name="firmName"
                                        id="firmName" placeholder="Your business Name"
                                        value="<?php echo $businessregistration_master['firmName']; ?>">

                                </div>
                            </div>

                            <div class="col-md-4 col-12 col-sm-6  col-lg-2 ">
                                <label for="name">Mobile Number <span class="required"
                                        style="color: red">*</span></label>
                                <div class="input-group">
                                    <input type="number" readonly="" class="form-control form-control-sm"
                                        name="mobileNo" id="mobileNo"
                                        onkeypress="if(this.value.length==10) return false;" placeholder="mobile Name"
                                        value="<?php echo $businessregistration_master['mobileNo']; ?>">
                                </div>
                            </div>

                            <div class="col-md-4 col-12 col-sm-6  col-lg-2 ">
                                <label for="name">Email Id <span class="required" style="color: red">*</span></label>
                                <div class="input-group">
                                    <input type="text" readonly="" class="form-control form-control-sm" name="email"
                                        id="email" placeholder="Your Email"
                                        value="<?php echo $businessregistration_master['email']; ?>">
                                </div>
                            </div>


                            <div class="col-md-4 col-12 col-sm-6 col-lg-2 ">
                                <label for="name">State <span class="required" style="color: red">*</span></label>
                                <div class="input-group">
                                    <input type="text" readonly="" class="form-control form-control-sm" name="state"
                                        id="state" placeholder="Your state"
                                        value="<?php echo $businessregistration_master['state']; ?>">
                                </div>
                            </div>

                            <div class="col-md-4 col-12 col-sm-4 col-lg-2 ">
                                <label for="name">District <span class="required" style="color: red">*</span></label>
                                <div class="input-group">
                                    <input type="text" readonly="" class="form-control form-control-sm" name="district"
                                        id="district" placeholder="Your district"
                                        value="<?php echo $businessregistration_master['district']; ?>">
                                </div>
                            </div>

                            <div class="col-md-4 col-12 col-sm-4 col-lg-2 ">
                                <label for="name">Taluka<span class="required" style="color: red">*</span></label>
                                <div class="input-group">
                                    <input type="text" readonly="" class="form-control form-control-sm" name="taluka"
                                        id="taluka" value="<?php echo $businessregistration_master['taluka']; ?>">
                                </div>
                            </div>

                            <div class="col-md-4 col-12 col-sm-4 col-lg-2 ">
                                <label for="name">Village <span class="required" style="color: red">*</span></label>
                                <div class="input-group">
                                    <input type="text" readonly="" class="form-control form-control-sm" name="village"
                                        id="village" placeholder="Your village"
                                        value="<?php echo $businessregistration_master['village']; ?>">
                                </div>
                            </div>
                            <div class="col-md-4 col-12 col-sm-4 col-lg-2 ">
                                <label for="name">Office Mobile Number</label>
                                <div class="input-group">
                                    <input type="number" readonly="" class="form-control form-control-sm"
                                        name="officemobileNo" id="officemobileNo"
                                        onkeypress="if(this.value.length==10) return false;" placeholder="mobile Number"
                                        value="<?php echo $businessregistration_master['officemobileNo']; ?>">
                                </div>
                            </div>

                            <div class="col-md-4 col-12 col-sm-4 col-lg-2 ">
                                <label for="name">Pincode<span class="required" style="color: red">*</span></label>
                                <div class="input-group">
                                    <input type="text" readonly="" class="form-control form-control-sm" name="pinCode"
                                        id="pinCode" placeholder="Your pinCode"
                                        value="<?php echo $businessregistration_master['pinCode']; ?>">
                                </div>
                            </div>

                            <div class="col-md-4 col-12 col-lg-2 col-sm-4 col-sm-4 ">
                                <label for="name">Whatsapp No. </label>
                                <div class="input-group">
                                    <input type="number" readonly="" class="form-control form-control-sm"
                                        name="wpmobileNo" id="wpmobileNo"
                                        onkeypress="if(this.value.length==10) return false;" placeholder=" mobile Name"
                                        value="<?php echo $businessregistration_master['wpmobileNo']; ?>">
                                </div>
                            </div>
                            <div class="col-md-4 col-12 col-lg-2 ">
                                <label for="name">Blood Group<span class="required" style="color: red">*</span></label>
                                <div class="input-group">


                                    <select class="form-select bg-white" disabled="" name="bloodgroup" id="bloodgroup">
                                        <option class="item" value="1"
                                            <?php echo ($businessregistration_master['bloodgroup'] == 1) ? 'selected' : ''; ?>>
                                            A+</option>
                                        <option class="item" value="2"
                                            <?php echo ($businessregistration_master['bloodgroup'] == 2) ? 'selected' : ''; ?>>
                                            A-</option>
                                        <option class="item" value="3"
                                            <?php echo ($businessregistration_master['bloodgroup'] == 3) ? 'selected' : ''; ?>>
                                            B+</option>
                                        <option class="item" value="4"
                                            <?php echo ($businessregistration_master['bloodgroup'] == 4) ? 'selected' : ''; ?>>
                                            B-</option>
                                        <option class="item" value="5"
                                            <?php echo ($businessregistration_master['bloodgroup'] == 5) ? 'selected' : ''; ?>>
                                            AB+</option>
                                        <option class="item" value="6"
                                            <?php echo ($businessregistration_master['bloodgroup'] == 6) ? 'selected' : ''; ?>>
                                            AB-</option>
                                        <option class="item" value="7"
                                            <?php echo ($businessregistration_master['bloodgroup'] == 7) ? 'selected' : ''; ?>>
                                            O+</option>
                                        <option class="item" value="8"
                                            <?php echo ($businessregistration_master['bloodgroup'] == 8) ? 'selected' : ''; ?>>
                                            O-</option>
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-4 col-12 col-lg-4 col-sm-4 ">
                                <label for="name">Office Address<span class="required"
                                        style="color: red">*</span></label>
                                <div>


                                    <div class="input-group">

                                        <textarea readonly="" class="form-control" name="officeAddress"
                                            id="officeAddress"
                                            style="height:100px!important;"><?php echo $businessregistration_master['officeAddress']; ?></textarea>
                                    </div>

                                </div>
                            </div>




                            <div class="col-md-4 col-12 col-lg-4 col-sm-8">
                                <label for="name">Residence Address<span class="required"
                                        style="color: red">*</span></label>
                                <div>


                                    <textarea readonly="" class="form-control" name="residenceAddress"
                                        id="residenceAddress"
                                        style="height:100px!important;"><?php echo $businessregistration_master['residenceAddress']; ?></textarea>

                                </div>
                            </div>


                            <div class="col-md-4 col-12 col-lg-4 col-sm-6">
                                <label for="name">Website <span class="required" style="color: red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" name="website" id="website"
                                        readonly="" placeholder="Http://entercompanysite.com"
                                        value="<?php echo $businessregistration_master['website']; ?>">
                                </div>
                            </div>

                            <div class="col-md-4 col-12 col-lg-2 col-sm-4">
                                <label for="name">Business Category<span class="required"
                                        style="color: red">*</span></label>
                                <div class="input-group">
                                    <select class="form-select bg-white" disabled="" id="firmCategory"
                                        name="firmCategory">

                                        <option class="item" value="1"
                                            <?php echo ($businessregistration_master['firmCategory'] == 1) ? 'selected' : ''; ?>>
                                            Doctor</option>
                                        <option class="item" value="2"
                                            <?php echo ($businessregistration_master['firmCategory'] == 2) ? 'selected' : ''; ?>>
                                            Dairy</option>
                                        <option class="item" value="3"
                                            <?php echo ($businessregistration_master['firmCategory'] == 3) ? 'selected' : ''; ?>>
                                            Hardware</option>
                                        <option class="item" value="4"
                                            <?php echo ($businessregistration_master['firmCategory'] == 4) ? 'selected' : ''; ?>>
                                            Chemical Supplier</option>
                                        <option class="item" value="5"
                                            <?php echo ($businessregistration_master['firmCategory'] == 5) ? 'selected' : ''; ?>>
                                            Builder</option>
                                        <option class="item" value="6"
                                            <?php echo ($businessregistration_master['firmCategory'] == 6) ? 'selected' : ''; ?>>
                                            Building Contractor and material suppliers
                                        </option>
                                        <option class="item" value="7"
                                            <?php echo ($businessregistration_master['firmCategory'] == 7) ? 'selected' : ''; ?>>
                                            Food Supplier</option>
                                        <option class="item" value="8"
                                            <?php echo ($businessregistration_master['firmCategory'] == 8) ? 'selected' : ''; ?>>
                                            Grocery Supplier</option>
                                        <option class="item" value="9"
                                            <?php echo ($businessregistration_master['firmCategory'] == 9) ? 'selected' : ''; ?>>
                                            Sanitary Tiles sup</option>
                                        <option class="item" value="10"
                                            <?php echo ($businessregistration_master['firmCategory'] == 10) ? 'selected' : ''; ?>>
                                            Electrical</option>
                                        <option class="item" value="11"
                                            <?php echo ($businessregistration_master['firmCategory'] == 11) ? 'selected' : ''; ?>>
                                            Old and new car Dealer</option>
                                        <option class="item" value="12"
                                            <?php echo ($businessregistration_master['firmCategory'] == 12) ? 'selected' : ''; ?>>
                                            Car repairs</option>
                                        <option class="item" value="13"
                                            <?php echo ($businessregistration_master['firmCategory'] == 13) ? 'selected' : ''; ?>>
                                            Cement Articles</option>
                                        <option class="item" value="14"
                                            <?php echo ($businessregistration_master['firmCategory'] == 14) ? 'selected' : ''; ?>>
                                            Cement and steel supplier</option>
                                        <option class="item" value="15"
                                            <?php echo ($businessregistration_master['firmCategory'] == 15) ? 'selected' : ''; ?>>
                                            Water suppliers</option>
                                        <option class="item" value="16"
                                            <?php echo ($businessregistration_master['firmCategory'] == 16) ? 'selected' : ''; ?>>
                                            Electrician</option>
                                        <option class="item" value="17"
                                            <?php echo ($businessregistration_master['firmCategory'] == 17) ? 'selected' : ''; ?>>
                                            Interior decorators</option>
                                        <option class="item" value="18"
                                            <?php echo ($businessregistration_master['firmCategory'] == 18) ? 'selected' : ''; ?>>
                                            Transporters</option>
                                        <option class="item" value="19"
                                            <?php echo ($businessregistration_master['firmCategory'] == 19) ? 'selected' : ''; ?>>
                                            Architect and interior decorators</option>
                                        <option class="item" value="20"
                                            <?php echo ($businessregistration_master['firmCategory'] == 20) ? 'selected' : ''; ?>>
                                            Computers and hardware</option>
                                        <option class="item" value="21"
                                            <?php echo ($businessregistration_master['firmCategory'] == 21) ? 'selected' : ''; ?>>
                                            Electronics equipment</option>
                                        <option class="item" value="22"
                                            <?php echo ($businessregistration_master['firmCategory'] == 22) ? 'selected' : ''; ?>>
                                            Cctv </option>
                                        <option class="item" value="23"
                                            <?php echo ($businessregistration_master['firmCategory'] == 23) ? 'selected' : ''; ?>>
                                            Doctors</option>
                                        <option class="item" value="24"
                                            <?php echo ($businessregistration_master['firmCategory'] == 24) ? 'selected' : ''; ?>>
                                            CA and tax consultant</option>
                                        <option class="item" value="25"
                                            <?php echo ($businessregistration_master['firmCategory'] == 25) ? 'selected' : ''; ?>>
                                            Home decor and furnishing</option>
                                        <option class="item" value="26"
                                            <?php echo ($businessregistration_master['firmCategory'] == 26) ? 'selected' : ''; ?>>
                                            Grapic designer and printing</option>
                                        <option class="item" value="28"
                                            <?php echo ($businessregistration_master['firmCategory'] == 28) ? 'selected' : ''; ?>>
                                            Manufacturing industry </option>
                                        <option class="item" value="29"
                                            <?php echo ($businessregistration_master['firmCategory'] == 29) ? 'selected' : ''; ?>>
                                            Medical services and supplements</option>
                                        <option class="item" value="30"
                                            <?php echo ($businessregistration_master['firmCategory'] == 30) ? 'selected' : ''; ?>>
                                            Tourism and travel bookings</option>
                                        <option class="item" value="31"
                                            <?php echo ($businessregistration_master['firmCategory'] == 31) ? 'selected' : ''; ?>>
                                            Super markets</option>
                                        <option class="item" value="32"
                                            <?php echo ($businessregistration_master['firmCategory'] == 32) ? 'selected' : ''; ?>>
                                            Home appliances sales and repair</option>
                                        <option class="item" value="33"
                                            <?php echo ($businessregistration_master['firmCategory'] == 33) ? 'selected' : ''; ?>>
                                            IT SOFTWARE</option>
                                        <option class="item" value="34"
                                            <?php echo ($businessregistration_master['firmCategory'] == 34) ? 'selected' : ''; ?>>
                                            Photo graphy video shooting</option>
                                        <option class="item" value="35"
                                            <?php echo ($businessregistration_master['firmCategory'] == 35) ? 'selected' : ''; ?>>
                                            Hotel and food industry</option>
                                        <option class="item" value="36"
                                            <?php echo ($businessregistration_master['firmCategory'] == 36) ? 'selected' : ''; ?>>
                                            Loans </option>
                                        <option class="item" value="37"
                                            <?php echo ($businessregistration_master['firmCategory'] == 37) ? 'selected' : ''; ?>>
                                            Insurance </option>
                                        <option class="item" value="38"
                                            <?php echo ($businessregistration_master['firmCategory'] == 38) ? 'selected' : ''; ?>>
                                            Industrial electrical suppliers</option>
                                        <option class="item" value="39"
                                            <?php echo ($businessregistration_master['firmCategory'] == 39) ? 'selected' : ''; ?>>
                                            Electrical contarctor</option>
                                        <option class="item" value="40"
                                            <?php echo ($businessregistration_master['firmCategory'] == 40) ? 'selected' : ''; ?>>
                                            Painting contractor</option>
                                        <option class="item" value="41"
                                            <?php echo ($businessregistration_master['firmCategory'] == 41) ? 'selected' : ''; ?>>
                                            Cattle feed Manufacturer and suppliers</option>
                                        <option class="item" value="42"
                                            <?php echo ($businessregistration_master['firmCategory'] == 42) ? 'selected' : ''; ?>>
                                            Plumbing material</option>
                                        <option class="item" value="43"
                                            <?php echo ($businessregistration_master['firmCategory'] == 43) ? 'selected' : ''; ?>>
                                            Automobile dealers</option>
                                        <option class="item" value="44"
                                            <?php echo ($businessregistration_master['firmCategory'] == 44) ? 'selected' : ''; ?>>
                                            Placement services</option>
                                        <option class="item" value="45"
                                            <?php echo ($businessregistration_master['firmCategory'] == 45) ? 'selected' : ''; ?>>
                                            Solar equipments</option>
                                        <option class="item" value="46"
                                            <?php echo ($businessregistration_master['firmCategory'] == 46) ? 'selected' : ''; ?>>
                                            Event managers</option>
                                        <option class="item" value="47"
                                            <?php echo ($businessregistration_master['firmCategory'] == 47) ? 'selected' : ''; ?>>
                                            Fabric ,clothing ,garments</option>
                                        <option class="item" value="48"
                                            <?php echo ($businessregistration_master['firmCategory'] == 48) ? 'selected' : ''; ?>>
                                            Jewellery </option>
                                        <option class="item" value="49"
                                            <?php echo ($businessregistration_master['firmCategory'] == 49) ? 'selected' : ''; ?>>
                                            Gifts </option>
                                        <option class="item" value="50"
                                            <?php echo ($businessregistration_master['firmCategory'] == 50) ? 'selected' : ''; ?>>
                                            Steel utensil and articles</option>
                                        <option class="item" value="51"
                                            <?php echo ($businessregistration_master['firmCategory'] == 51) ? 'selected' : ''; ?>>
                                            Msme consultants</option>
                                        <option class="item" value="52"
                                            <?php echo ($businessregistration_master['firmCategory'] == 52) ? 'selected' : ''; ?>>
                                            software development</option>
                                        <option class="item" value="53"
                                            <?php echo ($businessregistration_master['firmCategory'] == 53) ? 'selected' : ''; ?>>
                                            Hardware</option>
                                        <option class="item" value="54"
                                            <?php echo ($businessregistration_master['firmCategory'] == 54) ? 'selected' : ''; ?>>
                                            software developing</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4 col-12 col-lg-2 col-sm-4 ">
                                <label for="name">Business Type<span class="required"
                                        style="color: red">*</span></label>
                                <div class="input-group">
                                    <select class="form-select bg-white" disabled="" id="firmType" name="firmType">
                                        <option value="1"
                                            <?php echo ($businessregistration_master['firmType'] == 1) ? 'selected' : ''; ?>>
                                            Sole Propritorship</option>
                                        <option value="2"
                                            <?php echo ($businessregistration_master['firmType'] == 2) ? 'selected' : ''; ?>>
                                            Partnership</option>
                                        <option value="3"
                                            <?php echo ($businessregistration_master['firmType'] == 3) ? 'selected' : ''; ?>>
                                            Private Limited Company</option>
                                        <option value="4"
                                            <?php echo ($businessregistration_master['firmType'] == 4) ? 'selected' : ''; ?>>
                                            Limited Liability Partnership</option>
                                        <option value="5"
                                            <?php echo ($businessregistration_master['firmType'] == 5) ? 'selected' : ''; ?>>
                                            Publcily Listed Company</option>
                                        <option value="6"
                                            <?php echo ($businessregistration_master['firmType'] == 6) ? 'selected' : ''; ?>>
                                            developing</option>
                                    </select>

                                </div>
                            </div>



                            <div class="col-md-4 col-12 col-lg-4 ">
                                <label for="name">Owner Name<span class="required" style="color: red">*</span></label>
                                <div class="input-group">
                                    <input type="text" readonly="" class="form-control form-control-sm" name="ownerName"
                                        id="ownerName" placeholder="Your  Name"
                                        value="<?php echo $businessregistration_master['ownerName']; ?>">
                                </div>
                            </div>




                            <div class="col-md-4 col-12 col-lg-2 ">
                                <label for="name"> Birthdate <span class="required" style="color: red">*</span></label>
                                <div class="input-group">
                                    <input type="date" readonly="" class="form-control form-control-sm" name="birthdate"
                                        id="birthdate" data-language="en" placeholder="Select Birthdate"
                                        value="<?php echo $businessregistration_master['birthdate']; ?>">
                                </div>
                            </div>






                            <div class="col-md-4 col-12 col-lg-2 ">
                                <label for="name">Aadhaar Card <span class="text-danger">*</span> </label>


                                <p class="form-control form-control-sm"><a
                                        href="https://www.app.jainbusinessforum.com/upload/1428292565.pdf"
                                        target="_blank" style="font-size: 15px;
    color: #23376c;
    font-weight: 600; ">1428292565.pdf</a></p>

                                <input type="hidden" name="hidden_aadhaarCard" id="hidden_aadhaarCard"
                                    value="<?php echo $businessregistration_master['aadhaarCard']; ?>">
                            </div>

                            <!-- For Pan card -->
                            <div class="col-md-4 col-12 col-lg-2 ">
                                <label for="name">Pan Card <span class="text-danger">*</span> </label>


                                <p class="form-control form-control-sm"><a
                                        href="https://www.app.jainbusinessforum.com/upload/1645724367.pdf"
                                        target="_blank" style="font-size: 15px;
    color: #23376c;
    font-weight: 600; ">1645724367.pdf</a></p>

                                <input type="hidden" name="hidden_panCard" id="hidden_panCard"
                                    value="<?php echo $businessregistration_master['panCard']; ?>">
                            </div>

                            <!-- for GstCertificate -->

                            <div class="col-md-4 col-12 col-lg-2">
                                <label for="name">GST Certificate<span class="text-danger">*</span> </label>


                                <p class="form-control form-control-sm"><a
                                        href="https://www.app.jainbusinessforum.com/upload/" target="_blank" style="font-size: 15px;
    color: #23376c;
    font-weight: 600;"></a></p>


                                <input type="hidden" name="hidden_gstCertificate" id="hidden_gstCertificate"
                                    value="<?php echo $businessregistration_master['gstCertificate']; ?>">
                            </div>


                            <!-- for MEMS certificate -->
                            <div class="col-md-4 col-12 col-lg-4">
                                <label for="name">MEMS Certificate<span class="text-danger">*</span> </label>


                                <p class="form-control form-control-sm"><a
                                        href="https://www.app.jainbusinessforum.com/upload/" target="_blank" style="font-size: 15px;
    color: #23376c;
    font-weight: 600; "></a></p>



                                <input type="hidden" name="hidden_udyogCertifcate" id="hidden_udyogCertifcate"
                                    value="<?php echo $businessregistration_master['udyogCertifcate']; ?>">
                            </div>





                            <div class="col-md-4 col-12 col-lg-4 ">
                                <label for="name">Business Description <span class="required"
                                        style="color:red">*</span></label>
                                <div class="input-group">

                                    <textarea class="form-control" name="farmdescription" id="farmdescription"
                                        style="height:100px!important;"><?php echo $businessregistration_master['farmdescription']; ?></textarea>
                                </div>
                            </div>

                            <!--<div class="col-md-4 col-12 col-lg-3 d-flex justify-content-center align-items-center mt-lg-3">-->
                            <!--                      <div class="" >-->
                            <!--                        <button  class="btn btn-primary" style="background:#23366d;    font-family: 'Poppins';" type="button"  id="btn_gen" onclick="autoGenerate()" readonly>Generate Password</button>-->
                            <!--                      </div>-->
                            <!--                  </div>-->


                            <div class="col-md-4 col-12 col-lg-3 ">
                                <label for="name">Password<span class="required" style="color: red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" name="password"
                                        id="password" readonly="" placeholder="Your business Name"
                                        value="<?php echo $businessregistration_master['password']; ?>">

                                </div>
                            </div>
                            <div
                                class="col-md-4 col-12 col-lg-1 px-2 d-flex justify-content-start align-items-center mt-lg-3">


                                <!-- <input type="checkbox" name="status" id="status" tabindex="0" value='1' class="hidden mt-2" >
                        <label for="name" name="verify" id="verify" class="d-inline "style="margin-left:20px; margin-top:-50px;">Verified</label> -->

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="status" name="status"
                                        <?php echo ($businessregistration_master['status'] == 1) ? 'checked': ''; ?>>

                                    <label class="form-check-label">Verified</label>

                                </div>

                            </div>


                            <div
                                class="col-md-4 col-lg-2 px-2 d-flex justify-content-start align-items-center mt-lg-3 ">

                                <div id="whatsapp"><img src="<?=base_url()?>Assets/images/JBFwhatsapp.webp" style="height: 36px;
    cursor: pointer;
    margin-right: 10px;" onclick="sendMessageToWhatsApp();"></div>
                            </div>
                        </div>

                        <div style="text-align: center;">
                            <button type="button" id="btn_savee" style="    font-family: 'Poppins';
    color: white;" class="btn samplebtn waves-effect waves-light"><i class="fa fa-check-circle"
                                    style="color: #FFF;"></i>Save</button>


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
        // alert('hii');
        if (a == false) {
            saveperform();
        }
    });
});

function saveperform() {
    var Id = $('#Id').val();
    var password = $('#password').val();
    var status = $('#status').val();
    console.log(Id);
    console.log(password);
    console.log(status);
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
                url: base_path + "Admin/Modify_firm/updaedata",
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
                    window.location.href = base_path + "Admin/modifyfirm/index";



                }
            });

        }

    }

}
</script>
<script>
// function sendMessageToWhatsApp() {
//     // Fetch the input values
//     var phoneNumberElement = document.getElementById('wpmobileNo');
//     var mobileNoElement = document.getElementById('mobileNo');
//     var passwordElement = document.getElementById('password');
//     var nameElement = document.getElementById('ownerName');

//     // Check if all elements exist
//     if (!phoneNumberElement || !mobileNoElement || !passwordElement || !nameElement) {
//         console.error('One or more input elements are missing.');
//         return;
//     }

//     // Get the input values
//     var phoneNumber = phoneNumberElement.value;
//     var mobileNo = mobileNoElement.value;
//     var password = passwordElement.value;
//     var name = nameElement.value;

//     // Construct the message with line breaks
//     var message = 'Welcome To JBF !!\nHello, ' + name +
//         '\nYour Verification is Successful.' +
//         '\nLogin with the details below:' +
//         '\nMobile No: ' + mobileNo +
//         '\nPassword: ' + password;

//     // Encode the message for URL
//     var whatsappUrl = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=${encodeURIComponent(message)}`;

//     // Open the WhatsApp URL in a new tab or window
//     window.open(whatsappUrl, '_blank');
// }
function sendMessageToWhatsApp() {
    var mobileNumber = document.getElementById('mobileNo').value;
    var password = document.getElementById('password').value;
    var name = document.getElementById('firmName').value;

    // Validate input fields
    if (!mobileNumber || !password || !name) {
        alert('Please fill in all the required fields.');
        return;
    }

    // Construct the mobile number with the country code
    var mobileno = '+91' + mobileNumber;

    // Construct the message with line breaks
    var message = 'Welcome To JBF !! \nHello, ' + name + '\nYour Verification Successfully.' +
    '\nLogin with Below details' +
    '\nMobile No: ' + mobileno +
    '\nPassword: ' + password;

var encodedMessage = message.replace(/\n/g, '%0A');  // Replace newlines with URL encoded equivalent

var whatsappUrl = `https://api.whatsapp.com/send?phone=${mobileno}&text=${encodedMessage}`;


    // Open the WhatsApp URL in a new tab or window
    window.open(whatsappUrl, '_blank');
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
</script>
<script type="text/javascript">
function readimage(input, valueid) {
    // alert("hello");
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#' + valueid + '').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readimage1(input, valueid) {
    // alert("hello");
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#' + valueid + '').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readimage2(input, valueid) {
    // alert("hello");
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#' + valueid + '').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readimage3(input, valueid) {
    // alert("hello");
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#' + valueid + '').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function autoGenerate() {
    // alert("clicked auto generate");
    let fname = document.getElementById('firmName').value;
    let mob = document.getElementById('mobileNo').value;
    let upass;

    for (let x = 0; x < 5; x++) {
        upass = fname.charAt(0) + fname.charAt(1) + fname.charAt(2) + mob.charAt(0) + mob.charAt(1) + mob.charAt(8) +
            mob.charAt(9);
    }
    document.getElementById('password').value = upass;
}


// document.getElementById("status").addEventListener('change', function() {
//     var isChecked = this.checked;
//     // Show or hide WhatsApp icon based on checkbox state
//     if (isChecked) {
//         $('#whatsapp').show();
//         // Remove row from unverified table and add to verified table
//         moveToVerified();
//     } else {
//         $('#whatsapp').hide();
//     }
// });

// function moveToVerified() {
//     // Logic to move the firm to verified table
//     // Remove from unverified table and add to verified table
// }

document.getElementById("status").addEventListener('change', function() {
    var isChecked = this.checked; // Determine if the checkbox is checked
    var rowId = this.closest('tr').rowId; // Get the closest row ID to identify which row to move

    // Show or hide WhatsApp icon based on checkbox state
    if (isChecked) {
        $('#whatsapp').show();
        // Remove row from unverified table and add to verified table
        moveToVerified(rowId);
    } else {
        $('#whatsapp').hide();
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





// alert(gender);
// if(status==1){
//   // alert("hello");
//   $('#whatsapp').show();
// }
// else {
//   $('#whatsapp').hide()

// }
</script>