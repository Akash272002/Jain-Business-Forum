<!doctype html>
<html lang="en" class="h-100">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>organization</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="icon" href="https://www.app.jainbusinessforum.com/Assets/img/logo1.png" sizes="32x32" type="image/png">

    <link href="https://www.app.jainbusinessforum.com/Assets/css/style.css" rel="stylesheet" id="style">

    <!-- <link href="https://www.app.jainbusinessforum.com/Assets/css/semantic.min.css" rel="stylesheet"> -->

    <link href="https://www.app.jainbusinessforum.com/Assets/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />


    <script>
    var base_path = "https://www.app.jainbusinessforum.com/";
    </script>

</head>

<body class="body-scroll d-flex flex-column h-100" data-page="signin">

    <!-- loader section -->
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <p class="mt-4"><span class="text-secondary">
                        <img src="https://www.app.jainbusinessforum.com/Assets/img/loader.svg" alt=""
                            class="shadow bg-white" style="border-radius:50%" /></span></p>

            </div>
        </div>
    </div>
    <!-- loader section ends -->

    <link href="https://www.app.jainbusinessforum.com/Assets/css/bootstrap.min.css" rel="stylesheet">
    <script async src="https://www.app.jainbusinessforum.com/Assets/js/bootstrap.bundle.min.js"></script>
    <link href="https://www.app.jainbusinessforum.com/Assets/css/semantic.min.css" rel="stylesheet">




    <style>
    #myModal .modal-body ol li {
        line-height: 27px;
    }

    .fileicon {
        border: 1px solid #e5e5e5;
        border-radius: 5px;
        display: block;
        padding: 5px;
        transition: border 300ms ease;
        cursor: pointer;
        text-align: center;
        margin: 0;
        background: white;
        padding: 7px;
    }

    .fileicon:hover {
        border: 1px solid #e5e5e5 !important;
        background: white;
    }

    .fileicon i {
        display: block;
        font-size: 17px;
        padding-bottom: 5px;
    }

    .fileicon i,
    .fileicon .title,
    .title1,
    .title2,
    .title3 {
        color: #5c5959;
        transition: 200ms color;
        font-size: 13px;
    }

    .fileicon:hover {
        border: 1px solid var(--common-color);
    }

    .fileicon:hover i,
    .fileicon:hover .title {
        color: var(--common-color);
    }

    #FileInput,
    #FileInput1,
    #FileInput2,
    #FileInput3 {
        display: none;
    }

    .site-button {
        position: relative;
        z-index: 1;
        overflow: hidden;
        vertical-align: middle;
        font-family: "roboto";
        background: #2e55fa;
        color: #fff;
        padding: 10px 20px;
        display: inline-block;
        outline: none;
        cursor: pointer;
        outline: none;
        border-width: 0;
        border-style: solid;
        border-color: transparent;
        line-height: 1.42857;
        border-radius: 3px;
        font-weight: 400;
        text-align: center;
        text-decoration: none !important;

    }

    .modal-backdrop {
        background: black !important;
    }

    a {
        text-decoration: none !important;

    }

    a:hover {
        color: white !important;
    }

    .site-button:hover {
        color: white !important;
    }

    ol li {
        font-size: 17px;
    }

    .deskcard {
        margin-top: -19px;
    }

    .deskrow {
        margin-top: -20px;
    }

    @media(min-width:767px) {
        .deskcard {
            margin-top: 0px;
        }

        .deskrow {
            margin-top: 0px;
        }
    }

    @media(min-width:992px) {
        .ptts {
            padding-top: 32px !important;
        }
    }
    </style>


    <!-- Begin page content -->
    <main class="container-fluid h-100">
        <div class="row h-100">

            <div class="col-12 col-sm-10 deskcard col-md-12 col-lg-11 col-xl-11 mx-auto align-self-center py-4 browse-section"
                style="">

                <form id="Form" method="post" enctype="multipart/form-data">

                    <div class="container-fluid px-2 py-2">

                        <div class="main-heading bids_heading">
                            <h2>Create Firm Profile</h2>
                            <div class="line-shape1 d-lg-none">
                                <img src="https://www.app.jainbusinessforum.com/Assets/img/line.svg" alt="">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12 col-lg-3 col-sm-6 col-md-6 deskrow">
                                <div class="form-group">
                                    <label class="label15">Firm Name <span class="text-danger">*</span> </label>
                                    <input type="text" name='firmName' onkeydown="return /[a-zA-Z ]/.test(event.key)"
                                        id='firmName' class="job-input">
                                </div>
                            </div>


                            <div class="col-12 col-lg-2 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="label15">Mobile Number <span class="text-danger">*</span> </label>
                                    <input type="number" name='mobileNo' id='mobileNo'
                                        onKeyPress="if(this.value.length==10) return false;" class="job-input">
                                </div>
                            </div>

                            <div class="col-12 col-lg-2 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="label15">Password <span class="text-danger">*</span> </label>
                                    <input type="password" name='password' id='password' class="job-input">
                                </div>
                            </div>


                            <div class="col-12 col-lg-3 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="label15">Email Id <span class="text-danger">*</span> </label>
                                    <input type="text" name="email" id="email" oninput="onemail()" class="job-input">
                                </div>
                                <p id="error_email" class="text-danger fw-bold"></p>
                            </div>


                            <div class="col-12 col-lg-2 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="label15">State <span class="text-danger">*</span> </label>
                                    <input type="text" onkeydown="return /[a-zA-Z ]/.test(event.key)" name="state"
                                        id="state" class="job-input">
                                </div>
                            </div>

                            <div class="col-12 col-lg-2 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="label15">District <span class="text-danger">*</span> </label>
                                    <input type="text" onkeydown="return /[a-zA-Z ]/.test(event.key)" name="district"
                                        id="district" class="job-input">
                                </div>
                            </div>

                            <div class="col-12 col-lg-2 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="label15">Taluka <span class="text-danger">*</span> </label>
                                    <input type="text" onkeydown="return /[a-zA-Z ]/.test(event.key)" name="taluka"
                                        id="taluka" class="job-input">
                                </div>
                            </div>



                            <div class="col-12 col-lg-2 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="label15">Village</label> <span class="text-danger">*</span></label>
                                    <input type="text" onkeydown="return /[a-z]/i.test(event.key)" name='village'
                                        id='village' class="job-input">
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="label15">PinCode </label> <span class="text-danger">*</span></label>
                                    <input type="number" name='pinCode' id='pinCode'
                                        onKeyPress="if(this.value.length==6) return false;" class="job-input">
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="label15">Office Address <span class="text-danger">*</span></label>
                                    <textarea type="location" name="officeAddress" id="officeAddress"
                                        class="note-input"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="label15">Office Mobile No. </label>
                                    <input type="number" name='officemobileNo' id='officemobileNo'
                                        onKeyPress="if(this.value.length==10) return false;" class="job-input">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="label15">Residence Address <span class="text-danger">*</span></label>
                                    <textarea type="location" name="residenceAddress" id="residenceAddress"
                                        class="note-input"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="label15">WhatsApp No. </label>
                                    <input type="number" name='wpmobileNo' id='wpmobileNo'
                                        onKeyPress="if(this.value.length==10) return false;" class="job-input">
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="label15">Website </label>
                                    <div class="smm_input5">
                                        <input type="text" name="website" id="website" class="website-input">
                                        <div class="loc_icon5"><i class="fas fa-globe"></i></div>
                                    </div>

                                </div>
                            </div>




                            <div class="col-12 col-lg-2 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="label15">Firm category <span class="text-danger">*</span> </label>
                                    <div class="ui fluid  search selection dropdown skills-search">
                                        <input name="firmCategory" id="firmCategory" type="hidden" value="">
                                        <i class="dropdown icon"></i>
                                        <input class="search" autocomplete="off" tabindex="0"><span
                                            class="sizer"></span><span class="sizer" style=""></span>
                                        <div class="default text">Firm category</div>
                                        <div class="menu transition hidden" tabindex="-1" style="height: 221px!important;
                                        max-height: 222px!important;">

                                            <!-- <div class="item" data-value="1">Doctor</div>
                                            <div class="item" data-value="2">Dairy</div>
                                            <div class="item" data-value="3">Hardware</div>
                                            <div class="item" data-value="4">Chemical Supplier</div>
                                            <div class="item" data-value="5">Builder</div>
                                            <div class="item" data-value="6">Building Contractor and material suppliers
                                            </div>
                                            <div class="item" data-value="7">Food Supplier</div>
                                            <div class="item" data-value="8">Grocery Supplier</div>
                                            <div class="item" data-value="9">Sanitary Tiles sup</div>
                                            <div class="item" data-value="10">Electrical</div>
                                            <div class="item" data-value="11">Old and new car Dealer</div>
                                            <div class="item" data-value="12">Car repairs</div>
                                            <div class="item" data-value="13">Cement Articles</div>
                                            <div class="item" data-value="14">Cement and steel supplier</div>
                                            <div class="item" data-value="15">Water suppliers</div>
                                            <div class="item" data-value="16">Electrician</div>
                                            <div class="item" data-value="17">Interior decorators</div>
                                            <div class="item" data-value="18">Transporters</div>
                                            <div class="item" data-value="19">Architect and interior decorators</div>
                                            <div class="item" data-value="20">Computers and hardware</div>
                                            <div class="item" data-value="21">Electronics equipment</div>
                                            <div class="item" data-value="22">Cctv </div>
                                            <div class="item" data-value="23">Doctors</div>
                                            <div class="item" data-value="24">CA and tax consultant</div>
                                            <div class="item" data-value="25">Home decor and furnishing</div>
                                            <div class="item" data-value="26">Grapic designer and printing</div>
                                            <div class="item" data-value="28">Manufacturing industry </div>
                                            <div class="item" data-value="29">Medical services and supplements</div>
                                            <div class="item" data-value="30">Tourism and travel bookings</div>
                                            <div class="item" data-value="31">Super markets</div>
                                            <div class="item" data-value="32">Home appliances sales and repair</div>
                                            <div class="item" data-value="33">IT SOFTWARE</div>
                                            <div class="item" data-value="34">Photo graphy video shooting</div>
                                            <div class="item" data-value="35">Hotel and food industry</div>
                                            <div class="item" data-value="36">Loans </div>
                                            <div class="item" data-value="37">Insurance </div>
                                            <div class="item" data-value="38">Industrial electrical suppliers</div>
                                            <div class="item" data-value="39">Electrical contarctor</div>
                                            <div class="item" data-value="40">Painting contractor</div>
                                            <div class="item" data-value="41">Cattle feed Manufacturer and suppliers
                                            </div>
                                            <div class="item" data-value="42">Plumbing material</div>
                                            <div class="item" data-value="43">Automobile dealers</div>
                                            <div class="item" data-value="44">Placement services</div>
                                            <div class="item" data-value="45">Solar equipments</div>
                                            <div class="item" data-value="46">Event managers</div>
                                            <div class="item" data-value="47">Fabric ,clothing ,garments</div>
                                            <div class="item" data-value="48">Jewellery </div>
                                            <div class="item" data-value="49">Gifts </div>
                                            <div class="item" data-value="50">Steel utensil and articles</div>
                                            <div class="item" data-value="51">Msme consultants</div> -->

                                            <?php foreach($BusinessCategory as $value): ?>
                                            <div class="item" data-value="<?= $value->businessName ?>">
                                                <?= $value->businessName ?>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-12 col-lg-3 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="label15">Firm Type <span class="text-danger">*</span></label>
                                    <div class="ui fluid search selection dropdown skills-search"
                                        id="semantic-dropdown">
                                        <input name="firmType" id="firmType" type="hidden" value="">

                                        <i class="dropdown icon"></i>

                                        <input class="search" autocomplete="off" tabindex="0">
                                        <span class="sizer"></span>
                                        <span class="sizer" style=""></span>

                                        <div class="default text">Firm Type</div>
                                        <div class="menu transition hidden" tabindex="-1" id="firmType1">
                                            <?php foreach($BusinessType as $value): ?>
                                            <div class="item" data-value="<?= $value->businesstypeId ?>">
                                                <?= $value->businesstypeName ?>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-2 col-sm-6 col-md-6" id="p2">
                                <div class="form-group">
                                    <label class="label15">No. of Partners </label>
                                    <input type="number" name='partner' id='partner' class="job-input">
                                </div>
                            </div>



                            <div class="col-12 col-lg-4 col-sm-6 col-md-6" id="p1">
                                <div class="form-group">
                                    <label class="label15">Owner Name <span class="text-danger">*</span></label>
                                    <input type="text" onkeydown="return /[a-zA-Z ]/.test(event.key)" name="ownerName"
                                        id="ownerName" class="job-input">
                                </div>
                            </div>

                            <div class="col-12 col-lg-2 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="label15">Blood Group <span class="text-danger">*</span> </label>
                                    <div class="ui fluid  search selection dropdown skills-search "
                                        id="semantic-dropdown">
                                        <input name="bloodgroup" id="bloodgroup" type="hidden" value="">

                                        <i class="dropdown icon"></i>

                                        <input class="search" autocomplete="off" tabindex="0">
                                        <span class="sizer"></span>
                                        <span class="sizer" style=""></span>

                                        <div class="default text">Blood group</div>
                                        <div class="menu transition hidden" tabindex="-1"
                                            style="height: 221px!important; max-height: 222px!important;">
                                            <div class="item" data-value="1">A+</div>
                                            <div class="item" data-value="2">A-</div>
                                            <div class="item" data-value="3">B+</div>
                                            <div class="item" data-value="4">B-</div>
                                            <div class="item" data-value="5">AB+</div>
                                            <div class="item" data-value="6">AB-</div>
                                            <div class="item" data-value="7">O+</div>
                                            <div class="item" data-value="8">O-</div>



                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 col-lg-2 col-sm-12 col-md-6" id="b1">
                                <div class="form-group">
                                    <label class="label15">Birthdate <span class="text-danger">*</span></label>
                                    <div class="smm_input">
                                        <input type="date" name="birthdate" id="birthdate" class="job-input ">
                                        <!-- <div class="mix_max"><i class="fas fa-calendar-alt"></i></div>															 -->
                                    </div>
                                </div>
                            </div>




                            <div class="col-6 col-lg-2 col-sm-6 col-md-6 ptts">
                                <div class="form-group">
                                    <!-- <label class="label15">Aadhaar Card<span class="text-danger">*</span> </label> this
                                    is comment -->
                                    <label class="fileicon filelabel d-flex justify-content-center gap-3">
                                        <div><i class="fas fa-upload"></i></div>
                                        </i>
                                        <div class="title">
                                            Aadhaar Card <span class="text-danger">*</span>
                                        </div>
                                        <input class="FileUpload1" id="FileInput" name="aadhaarCard"
                                            oninput="validateadhar()" cl type="file" value="">
                                    </label>
                                </div>



                            </div>




                            <div class="loadershow" id="loadershow" style="display:none;   position:   fixed;
    z-index:    1000;
    top:        0;
    left:       0;
    height:     100%;
    width:      100%;
    background:  rgba( 255, 255, 255, .8 )
                url('https://www.app.jainbusinessforum.com/Assets/img/loading.gif') 
                50% 50% 
                no-repeat;
     opacity: 0.80; ">
                            </div>
                            <div class="col-6 col-lg-2 col-sm-6 col-md-6 ptts">
                                <div class="form-group">
                                    <!-- <label class="label15">Pan Card<span class="text-danger">*</span> </label> this is
                                    comment -->
                                    <label class="fileicon filelabel1 d-flex justify-content-center gap-3">
                                        <div><i class="fas fa-upload"></i></div>
                                        </i>
                                        <div class="title1">
                                            Pan Card <span class="text-danger">*</span>
                                        </div>
                                        <input class="FileUpload1" id="FileInput1" name="panCard"
                                            oninput="validatepan()" cl type="file" value="">
                                    </label>
                                </div>
                            </div>




                            <div class="col-6 col-lg-2 col-sm-6 col-md-6 ptts">
                                <div class="form-group">
                                    <!-- <label class="label15">Aadhaar Card<span class="text-danger">*</span> </label> this
                                    is comment -->
                                    <label class="fileicon filelabel2 d-flex justify-content-center gap-3">
                                        <div><i class="fas fa-upload"></i></div>
                                        </i>
                                        <div class="title2">
                                            GST Certificate
                                        </div>
                                        <input class="FileUpload1" id="FileInput2" oninput="validategst()" cl
                                            name="gstCertificate" type="file" />
                                    </label>
                                </div>
                            </div>




                            <div class="col-6 col-lg-2 col-sm-6 col-md-6 ptts">
                                <div class="form-group">
                                    <!-- <label class="label15">Pan Card<span class="text-danger">*</span> </label> this is
                                    comment -->
                                    <label class="fileicon filelabel3 d-flex justify-content-center gap-3">
                                        <div><i class="fas fa-upload"></i></div>
                                        </i>
                                        <div class="title3">
                                            Udyog Aadhar
                                        </div>
                                        <input class="FileUpload1" id="FileInput3" oninput="validateudyog()"
                                            name="udyogCertifcate" type="file" />
                                    </label>
                                </div>
                            </div>


                            <div class="col-12 col-lg-4 col-sm-6 col-md-6 ">
                                <div class="form-group">
                                    <label class="label15">Business Details <span class="text-danger">*</span></label>
                                    <textarea class="note-input" name="farmdescription" id="farmdescription"></textarea>
                                </div>
                            </div>






                            <div class="col-12 col-lg-4 d-flex gap-3 justify-content-start align-items-center">
                                <div>
                                    <div class="ui checkbox apply_check check_out checked py-3">
                                        <input type="checkbox" name="termcondition" id="termcondition" tabindex="0"
                                            value='1' class="hidden">

                                        <label style="color:#242424 !important;">I Accept the Terms of Services</label>
                                    </div>
                                </div>
                                <div>
                                    <i class="fas fa-info-circle ms-1 mt-1" style="font-size:17px"
                                        data-bs-toggle="modal" data-bs-target="#myModal"></i>

                                    <!-- <i class="fas fa-info-circle ms-1 mt-1" style="font-size:17px" data-bs-toggle="modal" data-bs-target="#myModal"></i> -->
                                </div>

                            </div>


                        </div>
                    </div>

                </form>



                <div class="col-11 col-sm-11 col-lg-3 col-md-5 mt-auto mx-auto me-lg-1 py-4">
                    <div class="row ">
                        <div class="col-8 mx-auto d-grid">
                            <a href="javascript:void(0)" type="button" id="btn_save" name="btn_save"
                                class="site-button">Finish Firm
                                Profile</a>

                        </div>
                    </div>
                </div>

                <a href="https://www.app.jainbusinessforum.com/Login">
                    <p class="bottomclick"><i class="fas fa-reply"></i> &nbsp;Back To Login</p>
                </a>
            </div>



            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-dialog-centered 
modal-dialog-scrollable">
                    <div class="modal-content" style="border-radius:13px">

                        <!-- Modal Header -->
                        <div class="modal-header py-0 d-flex justify-content-center align-items-center">
                            <h4 class="modal-title mt-0">Terms & Conditions</h4>
                            <img src="https://www.app.jainbusinessforum.com/Assets/img/logo1.png" class="ms-5 p-0"
                                height="70px" width="70px">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body px-1">
                            <ol>
                                <li>Per year fees 1000/- Non-refundable.</li>
                                <li>The membership will not be transferable.</li>
                                <li>The Membership will be for one firm and one partner.</li>
                                <li>No other member of the form can attend any of the meeting or function.</li>
                                <li>Members should follow all business ethics with other Business owners. The forum is
                                    not responsible for any transactions or disputes.</li>
                                <li>It is mandatory for forum members to attend all meetings.</li>
                                <li>Members should follow all business ethics with other Business owners. The forum is
                                    not responsible for any transactions or disputes.</li>
                                <li>Membership non transfarable</li>
                                <li>Fees are non refundable</li>
                                <li>Jbf is not responsible for any transactions done by members </li>
                                <li>Do not share id and password </li>
                                <li>Membership acceptance and denieing is on hands of admin </li>
                            </ol>
                            <div class="col-11 col-sm-11 mt-auto mx-auto py-4">
                                <div class="row ">
                                    <div class="col-8 mx-auto d-grid">
                                        <a data-bs-dismiss="modal" type="button" id="accept"
                                            class="site-button">Accept</a>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </main>


    <script src="https://www.app.jainbusinessforum.com/web_resources/dist/js/jquery.min.js"></script>
    <script async src="https://www.app.jainbusinessforum.com/web_resources/dist/js/controllers/RegistrationCreate.js">
    </script>


    <script async src="https://www.app.jainbusinessforum.com/Assets/js/sw.js"></script>
    <script src="https://www.app.jainbusinessforum.com/Assets/css/semantic.min.js"></script>



    <script>
    // For mobile no check
    $(document).ready(function() {
        $('#accept').click(function() {

            // alert("hwllo");
            document.getElementById("termcondition").checked = true;
        })
    });

    $(document).ready(function() {
        $('#mobileNo').change(function() {
            //alert('aaa')
            var mobileNo = $(this).val();
            var toastMixin = Swal.mixin({
                toast: true,
                icon: 'success',
                title: 'General Title',
                animation: false,
                position: 'center',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            if ($.trim($('#mobileNo').val()) != '') {
                // alert(userName)
                $.ajax({
                    url: base_path + 'CompanyRegistration/checkuserexist',
                    method: 'post',
                    data: {
                        mobileNo: mobileNo
                    },
                    // dataType:'json',
                    success: function(data) {
                        // console.log(data);

                        if (data == 1) {
                            $('#mobileNo').val('');

                            toastMixin.fire({
                                title: 'Mobile No already exists.',
                                icon: 'error'
                            });

                        }

                    }
                });
            }
        });
    })

    function onemail() {
        var email = $('#email').val();

        // alert(email);
        var expr =
            /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

        if (email == "" || !expr.test(email) || email == null) {
            // alert('email empty');
            $("#error_email").html(" Please enter valid email id!");

        } else {
            $("#error_email").html(" ");
        }
    }

    function validateadhar() {
        var aadharCard = $('#FileInput')[0].files[0];
        var allowedTypes = ['image/jpeg', 'image/jpg', 'application/pdf'];

        var toastMixin = Swal.mixin({
            toast: true,
            icon: 'success',
            title: 'General Title',
            animation: false,

            position: 'center',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        if (aadharCard.size > 3 * 1024 * 1024) {
            toastMixin.fire({
                title: 'AadharCard size exceeds 3MB  limit.',
                icon: 'error'
            });

        } else if (allowedTypes.indexOf(aadharCard.type) === -1) {
            toastMixin.fire({
                title: 'Only JPG, JPEG, and PDF files are allowed.',
                icon: 'error'
            });
        }
    }

    function validatepan() {
        var panCard = $('#FileInput1')[0].files[0];
        var allowedTypes = ['image/jpeg', 'image/jpg', 'application/pdf'];

        var toastMixin = Swal.mixin({
            toast: true,
            icon: 'success',
            title: 'General Title',
            animation: false,

            position: 'center',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        if (panCard.size > 3 * 1024 * 1024) {
            toastMixin.fire({
                title: 'Pan size exceeds 3MB  limit.',
                icon: 'error'
            });

        } else if (allowedTypes.indexOf(panCard.type) === -1) {
            toastMixin.fire({
                title: 'Only JPG, JPEG, and PDF files are allowed.',
                icon: 'error'
            });
        }
    }

    function validategst() {
        var gstcertificate = $('#FileInput2')[0].files[0];
        var allowedTypes = ['image/jpeg', 'image/jpg', 'application/pdf'];

        var toastMixin = Swal.mixin({
            toast: true,
            icon: 'success',
            title: 'General Title',
            animation: false,

            position: 'center',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        if (gstcertificate.size > 3 * 1024 * 1024) {
            toastMixin.fire({
                title: 'Pan size exceeds 3MB  limit.',
                icon: 'error'
            });

        } else if (allowedTypes.indexOf(gstcertificate.type) === -1) {
            toastMixin.fire({
                title: 'Only JPG, JPEG, and PDF files are allowed.',
                icon: 'error'
            });
        }
    }


    function validateudyog() {
        var udyog = $('#FileInput3')[0].files[0];
        var allowedTypes = ['image/jpeg', 'image/jpg', 'application/pdf'];

        var toastMixin = Swal.mixin({
            toast: true,
            icon: 'success',
            title: 'General Title',
            animation: false,

            position: 'center',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        if (udyog.size > 3 * 1024 * 1024) {
            toastMixin.fire({
                title: 'Pan size exceeds 3MB  limit.',
                icon: 'error'
            });

        } else if (allowedTypes.indexOf(udyog.type) === -1) {
            toastMixin.fire({
                title: 'Only JPG, JPEG, and PDF files are allowed.',
                icon: 'error'
            });
        }
    }

    $('.ui.dropdown')
        .dropdown();

    $('.ui.checkbox')
        .checkbox();

    document.getElementById('birthdate').valueAsDate = new Date();
    </script>


    <script>
    $('#loadershow').hide();
    // For adharcard
    $("#FileInput").on('change', function(e) {
        $('#loadershow').show();
        setTimeout(() => {
            $('#loadershow').hide();
        }, "1000");

        var labelVal = $(".title").text();
        var oldfileName = $(this).val();
        fileName = e.target.value.split('\\').pop();

        if (oldfileName == fileName) {
            return false;
        }
        var extension = fileName.split('.').pop();

        if ($.inArray(extension, ['jpg', 'jpeg', 'png']) >= 0) {
            setTimeout(() => {
                $('#loadershow').hide();
            }, "1000");

            $(".filelabel i, .filelabel .title").css({
                'color': '#2d53fe'
            });
            $(".filelabel").css({
                'border': ' 1px solid #2d53fe'
            });
        } else if (extension == 'pdf') {
            setTimeout(() => {
                $('#loadershow').hide();
            }, "1000");


            $(".filelabel i, .filelabel .title").css({
                'color': '#2d53fe'
            });
            $(".filelabel").css({
                'border': ' 2px solid #2d53fe'
            });

        } else if (extension !== 'jpg' || extension !== 'jpeg' || extension !== 'png' || extension !== 'pdf') {
            setTimeout(() => {
                $('#loadershow').hide();
            }, "1000");


            $(".filelabel i, .filelabel .title").css({
                'color': 'red'
            });
            $(".filelabel").css({
                'border': ' 1px solid red'
            });
        } else {

            setTimeout(() => {
                $('#loadershow').hide();
            }, "1000");
            $(".filelabel i, .filelabel .title").css({
                'color': 'black'
            });
            $(".filelabel").css({
                'border': ' 1px solid black'
            });
        }

        if (fileName) {
            if (fileName.length > 10) {
                $(".filelabel .title").text(fileName.slice(0, 4) + '...' + extension);
            } else {
                $(".filelabel .title").text(fileName);
            }
        } else {
            $(".filelabel .title").text(labelVal);
            setTimeout(() => {
                $('#loadershow').hide();
            }, "1000");
        }

    });



    // for pan card
    $("#FileInput1").on('change', function(e) {
        $('#loadershow').show();
        setTimeout(() => {
            $('#loadershow').hide();
        }, "1000");

        var labelVal = $(".title1").text();
        var oldfileName = $(this).val();
        fileName = e.target.value.split('\\').pop();

        if (oldfileName == fileName) {
            return false;
        }
        var extension = fileName.split('.').pop();

        if ($.inArray(extension, ['jpg', 'jpeg', 'png']) >= 0) {
            setTimeout(() => {
                $('#loadershow').hide();
            }, "1000");

            $(".filelabel1 i, .filelabel1 .title1").css({
                'color': '#2d53fe'
            });
            $(".filelabel1").css({
                'border': ' 1px solid #2d53fe'
            });
        } else if (extension == 'pdf') {
            setTimeout(() => {
                $('#loadershow').hide();
            }, "1000");

            $(".filelabel1 i, .filelabel1 .title1").css({
                'color': '#2d53fe'
            });
            $(".filelabel1").css({
                'border': ' 2px solid #2d53fe'
            });

        } else if (extension !== 'jpg' || extension !== 'jpeg' || extension !== 'png' || extension !== 'pdf') {
            setTimeout(() => {
                $('#loadershow').hide();
            }, "1000");


            $(".filelabel1 i, .filelabel1 .title1").css({
                'color': 'red'
            });
            $(".filelabel1").css({
                'border': ' 1px solid red'
            });
        } else {
            setTimeout(() => {
                $('#loadershow').hide();
            }, "1000");
            $(".filelabel1 i, .filelabel1 .title1").css({
                'color': 'black'
            });
            $(".filelabel1").css({
                'border': ' 1px solid black'
            });
        }

        if (fileName) {
            if (fileName.length > 10) {
                $(".filelabel1 .title1").text(fileName.slice(0, 4) + '...' + extension);
            } else {
                $(".filelabel1 .title1").text(fileName);
            }
        } else {
            $(".filelabel1 .title1").text(labelVal);
        }
    });


    // For Gst Certificate
    $("#FileInput2").on('change', function(e) {
        $('#loadershow').show();

        setTimeout(() => {
            $('#loadershow').hide();
        }, "1000");
        var labelVal = $(".title2").text();
        var oldfileName = $(this).val();
        fileName = e.target.value.split('\\').pop();

        if (oldfileName == fileName) {
            return false;
        }
        var extension = fileName.split('.').pop();

        if ($.inArray(extension, ['jpg', 'jpeg', 'png']) >= 0) {
            setTimeout(() => {
                $('#loadershow').hide();
            }, "1000");
            $(".filelabel2 i, .filelabel2 .title2").css({
                'color': '#2d53fe'
            });
            $(".filelabel2").css({
                'border': ' 1px solid #2d53fe'
            });
        } else if (extension == 'pdf') {
            setTimeout(() => {
                $('#loadershow').hide();
            }, "1000");
            $(".filelabel2 i, .filelabel2 .title2").css({
                'color': '#2d53fe'
            });
            $(".filelabel2").css({
                'border': ' 2px solid #2d53fe'
            });

        } else if (extension !== 'jpg' || extension !== 'jpeg' || extension !== 'png' || extension !== 'pdf') {
            setTimeout(() => {
                $('#loadershow').hide();
            }, "1000");


            $(".filelabel2 i, .filelabel2 .title2").css({
                'color': 'red'
            });
            $(".filelabel2").css({
                'border': ' 1px solid red'
            });
        } else {

            $(".filelabel2 i, .filelabel2 .title2").css({
                'color': 'black'
            });
            $(".filelabel2").css({
                'border': ' 1px solid black'
            });
        }

        if (fileName) {
            if (fileName.length > 10) {
                $(".filelabel2 .title2").text(fileName.slice(0, 4) + '...' + extension);
            } else {
                $(".filelabel2 .title2").text(fileName);
            }
        } else {
            $(".filelabel2 .title2").text(labelVal);
        }
    });


    // For MSME Certificate
    $("#FileInput3").on('change', function(e) {
        $('#loadershow').show();

        setTimeout(() => {
            $('#loadershow').hide();
        }, "1000");

        var labelVal = $(".title3").text();
        var oldfileName = $(this).val();
        fileName = e.target.value.split('\\').pop();

        if (oldfileName == fileName) {
            return false;
        }
        var extension = fileName.split('.').pop();

        if ($.inArray(extension, ['jpg', 'jpeg', 'png']) >= 0) {
            setTimeout(() => {
                $('#loadershow').hide();
            }, "1000");
            $(".filelabel3 i, .filelabel3 .title3").css({
                'color': '#2d53fe'
            });
            $(".filelabel3").css({
                'border': ' 1px solid #2d53fe'
            });
        } else if (extension == 'pdf') {
            setTimeout(() => {
                $('#loadershow').hide();
            }, "1000");
            $(".filelabel3 i, .filelabel3 .title3").css({
                'color': '#2d53fe'
            });
            $(".filelabel3").css({
                'border': ' 2px solid #2d53fe'
            });

        } else if (extension !== 'jpg' || extension !== 'jpeg' || extension !== 'png' || extension !== 'pdf') {
            setTimeout(() => {
                $('#loadershow').hide();
            }, "1000");


            $(".filelabel3 i, .filelabel3 .title3").css({
                'color': 'red'
            });
            $(".filelabel3").css({
                'border': ' 1px solid red'
            });
        } else {

            $(".filelabel3 i, .filelabel3 .title3").css({
                'color': 'black'
            });
            $(".filelabel3").css({
                'border': ' 1px solid black'
            });
        }

        if (fileName) {
            if (fileName.length > 10) {
                $(".filelabel3 .title3").text(fileName.slice(0, 4) + '...' + extension);
            } else {
                $(".filelabel3 .title3").text(fileName);
            }
        } else {
            $(".filelabel3 .title3").text(labelVal);
        }
    });
    </script>


    <script>
    $(document).ready(function() {
        $('#p2').hide();


        $('#semantic-dropdown').dropdown();

        $('#semantic-dropdown').on('change', function() {

            var bt = $('#firmType').val();
            // alert( bt);



            if (bt == 1) {
                $('#p2').hide('slow');

            } else if (bt == 2 || bt == 3 || bt == 4 || bt == 5 || bt == 6) {
                $('#p2').show('slow');

            }


        });
    });
    </script>
    <script src="https://www.app.jainbusinessforum.com/web_resources/dist/js/jquery.min.js"></script>
    <script src="https://www.app.jainbusinessforum.com/Assets/js/main.js"></script>

    <script>
    var base_path = "<?php echo base_url();?>";
    var a = false;

    $(document).ready(function() {
        $("#btn_save").click(function(event) {
            event.preventDefault(); // Prevent default form submission
            if (!a) {
                $(this).prop('disabled', true); // Disable the button
                saveperform();
            }
        });
    });

    function saveperform() {
        var firmName = $('#firmName').val();
        var mobileNo = $("#mobileNo").val();
        var password = $("#password").val();
        var email = $('#email').val();
        var officeAddress = $('#officeAddress').val();
        var officemobileNo = $("#officemobileNo").val();
        var residenceAddress = $("#residenceAddress").val();
        var wpmobileNo = $('#wpmobileNo').val();
        var state = $('#state').val();
        var district = $('#district').val();
        var taluka = $('#taluka').val();
        var village = $('#village').val();
        var pinCode = $('#pinCode').val();
        var website = $('#website').val();
        var firmCategory = $('#firmCategory').val();
        var firmType = $('#firmType').val();
        var partner = $('#partner').val();
        var ownerName = $('#ownerName').val();
        var bloodgroup = $('#bloodgroup').val();
        var birthdate = $('#birthdate').val();
        var aadhaarCard = $("#FileInput").val();
        var panCard = $("#FileInput1").val();
        var gstCertificate = $('#FileInput2').val();
        var udyogCertifcate = $('#FileInput3').val();
        var farmdescription = $('#farmdescription').val();


        // Check if any of the required fields are empty or haven't been selected
        if (firmName === "" || mobileNo === "" || password === "" || email === "" || officeAddress === "" ||
            officemobileNo === "" || residenceAddress === "" || wpmobileNo === "" || state === "" ||
            district === "" || taluka === "" || village === "" || pinCode === "" || website ===
            "" || firmCategory === "" || firmType === "" || partner === "" || ownerName === "" || bloodgroup === "" ||
            birthdate === "" || aadhaarCard === "" ||
            panCard === "" || gstCertificate === "" || udyogCertifcate === "" ||
            farmdescription === "") {
            Swal.fire(
                'Opps!',
                'Please Enter Required Fields!',
                'error'
            );
            $('#btn_save').prop('disabled', false); // Re-enable the button
        } else {
            a = true;

            $.ajax({
                url: base_path + "Firm/insertFirm",
                type: "POST",
                data: $('#Form').serialize(),
                beforeSend: function() {
                    $('#btn_save').html('Loading...');
                },
                success: function(data) {
                    $('#btn_save').prop('disabled', false);
                    $('#btn_save').html('Save');
                    $("#Form").trigger("reset");

                    Swal.fire(
                        'Good job!',
                        'Data Submitted Successfully!',
                        'success'
                    );

                    a = false;
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.error("Error:", errorThrown);
                    Swal.fire(
                        'Error!',
                        'An error occurred during submission. Please try again.',
                        'error'
                    );
                    $('#btn_save').prop('disabled', false); // Re-enable the button
                    $('#btn_save').html('Save');
                    a = false;
                }
            });
        }
    }
    </script>

</body>

</html>