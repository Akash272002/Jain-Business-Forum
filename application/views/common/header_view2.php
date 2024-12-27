
<!-- <style>
  @media (max-width:768px){
    #header-logo{
      margin: 5px;
    } 
  }
</style> -->
<!DOCTYPE html>
<html lang="en" dir="">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>JBF Admin Panel</title>

    <!-- Custom CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>Assets/css/style1.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>Assets/css/sweetalert.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>Assets/css/font.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>Assets/css/form.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>Assets/css/datatable.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>Assets/css/bootstrap_min.css" />
    
    <!-- FontAwesome Icons (Updated version) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>Assets/images/JBFlogo1.png">

    <!-- jQuery (Always include this first) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS (Ensure it is loaded after jQuery) -->
    <script src="<?= base_url(); ?>Assets/js/AdminJS/bootstrap.min.js"></script>

    <!-- SweetAlert -->
    <script src="<?= base_url(); ?>Assets/js/AdminJS/sweetalert.min.js"></script>

    <!-- JavaScript (other scripts you need) -->
    <script>
        var base_path = "<?php echo base_url(); ?>";
    </script>

    <style>
        /* Keyframes for gradient */
        @keyframes gradient {
            0% {
                background: rgba(255, 0, 0, 0.5);
            }
            50% {
                background: rgba(0, 255, 0, 0.5);
            }
            100% {
                background: rgba(0, 0, 255, 0.5);
            }
        }

        /* body > #preloader-wrap {
            animation: gradient 3s infinite !important;
            width: 100% !important;
            height: 100%;
        } */

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-thumb {
            background: #999;
            border-radius: 6px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #666;
        }

        .page-item.active .page-link {
            color: #fff;
            background-color: #155c72;
            border-color: #155c72;
            z-index: 0;
        }

        .dt-button {
            display: none !important; /* Use !important to ensure it overrides other styles */
        }


        .icon {
            display: flex; /* Arrange icons in a row */
            justify-content: flex-end; /* Align to the right */
            margin-bottom: 10px; /* Add some spacing below the icons */
        }

        .icon i {
            margin-left: 10px; /* Spacing between icons */
            font-size: 20px; /* Adjust icon size */
            cursor: pointer; /* Change cursor to pointer */
        }
    </style>
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar overlay">

  <!-- <div id="preloader-wrap" style="display: flex; justify-content: center; align-items: center; position: fixed;  width: 100%; height: 100%; z-index: 20009; background-color: #ff6307; "> -->
   
    <!-- <div class="loadingbynewstyle">
  <div class="dotnewstyle"></div> 
  <div class="dotnewstyle"></div>
  <div class="dotnewstyle"></div>
  <div class="dotnewstyle"></div>
  <div class="dotnewstyle"></div>
</div> -->
     <!-- <img src="<?=base_url();?>Assets\images\JBFLoader.svg" alt="">
  </div> -->

  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left content">
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="" style="">
        <img src="<?=base_url();?>Assets\images\JBFlogo1.png" alt="logo" style="
   width: 100%;
    ">
      </a>
    </div>
    <!-- border-radius: 50%;
    box-shadow: rgb(149 157 165 / 20%) 0px 8px 24px; -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <li class="menu-item">
     
        <a href="<?php echo base_url('Admin/Admin/index'); ?>"> <img src="<?=base_url()?>Assets\images\JBFDashboard_1.png" class="Adjustimg" ><span class="for_hover" style="margin-left: 11px;">Dashboard</span></a>
        
      </li>

     

               
       

      

      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Booking" aria-expanded="false" aria-controls="Booking"> <img src="<?=base_url()?>Assets\images\JBF_DashboardEdit.png"><span class="for_hover" style="margin-left: 8px;">Modify Registration</span></a>
        
        <ul id="Booking" class="collapse" aria-labelledby="Booking" data-parent="#side-nav-accordion">
        
         
          <li class="menu-item">
            <a style="" href="<?=base_url('Admin/modifyfirm/index'); ?>"> <img src="<?=base_url()?>Assets\images\JBF_DashboardEdit.png" ><span class="for_hover" style="margin-left: 11px;">Modify Firm</span></a>       
        </li>

        <li class="menu-item">
            <a href="<?php echo base_url('Admin/modifyEmployee/modifyEmployee'); ?>"> <img src="<?=base_url()?>Assets\images\JBF_DashboardEdit.png" ><span class="for_hover" style="margin-left: 11px;">Modify Employee</span></a>       
        </li>

      

        </ul>
      </li>

 
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#product" aria-expanded="false" aria-controls="product"> <img src="<?=base_url()?>Assets\images\JBFmaster.png" ><span class="for_hover" style="margin-left: 11px;">Master</span></a>
        <ul id="product" class="collapse" aria-labelledby="product" data-parent="#side-nav-accordion">
        
           <li> <a class="for_hover" href="<?php echo base_url('Admin/Business/business'); ?>"><img src="<?=base_url()?>Assets\images\JBFbusiness.png" ><span class="for_hover" style="margin-left: 11px;">Business Category</span></a>
          </li>

          <li> <a class="for_hover" href="<?php echo base_url('Admin/Firm/firm'); ?>"><img src="<?=base_url()?>Assets\images\JBFcity.png" ><span class="for_hover" style="margin-left: 11px;">Firm Type</span></a>
          </li>

          <li> <a class="for_hover" href="<?php echo base_url('Admin/Job/index'); ?>"><img src="<?=base_url()?>Assets\images\JBFjobcategory.png" ><span class="for_hover" style="margin-left: 11px;">Job Category</span></a>
          </li> 

          <li> <a class="for_hover" href="<?php echo base_url('Admin/JobType/add'); ?>"><img src="<?=base_url()?>Assets\images\JBFpartydetails.png" ><span class="for_hover" style="margin-left: 11px;">Job Type</span></a>
          </li>

           <!-- <li> <a class="for_hover" href="https://www.adminjainbusiness.padmamanisilver.com/Jobcatergory/create"><img src="https://www.adminjainbusiness.padmamanisilver.com/assets/images/Dashaboard/charges.png" ><span class="for_hover" style="margin-left: 11px;">Jobtag</span></a>
          </li> -->

          <!-- <li> <a class="for_hover" href="https://www.adminjainbusiness.padmamanisilver.com/Role/create"><img src="https://www.adminjainbusiness.padmamanisilver.com/assets/images/Dashaboard/destination1.png" ><span class="for_hover" style="margin-left: 11px;">Role</span></a>-->
          <!--</li>-->

           <li> <a class="for_hover" href="<?php echo base_url('Admin/Firmrule/Add');  ?>"><img src="<?=base_url()?>Assets\images\JBFrole.png" ><span class="for_hover" style="margin-left: 11px;">Firm Rule</span></a>
          </li>
          
            <li> <a class="for_hover" href="<?php echo base_url('Admin/EmployeeRule/Add'); ?>"><img src="<?=base_url()?>Assets\images\JBFrole.png" ><span class="for_hover" style="margin-left: 11px;">Employee Rules</span></a>
          </li>

           <li> <a class="for_hover" href="<?php echo base_url('Admin/Keyskill/Add'); ?>"><img src="<?=base_url()?>Assets\images\JBFskill.png" ><span class="for_hover" style="margin-left: 11px;">Key Skill</span></a>
          </li>
          
          <li> <a class="for_hover" href="<?php echo base_url('Admin/Banner/Add'); ?>"><img src="<?=base_url()?>Assets\images\JBFpackage.png" ><span class="for_hover" style="margin-left: 11px;">Banner</span></a>
          </li>
         
        </ul>


      </li>
      <li class="menu-item">
     
     <a href="<?php echo base_url('Admin/Helpdesk/helpDesk'); ?>"> <img src="<?=base_url()?>Assets\images\JBFDashboard_1.png" class="Adjustimg" ><span class="for_hover" style="margin-left: 11px;">HelpDesk</span></a>
     
   </li>
   <li class="menu-item">
     
     <a href="<?php echo base_url('Admin/modifyfirm/firmReport'); ?>"> <img src="<?=base_url()?>Assets\images\JBFDashboard_1.png" class="Adjustimg" ><span class="for_hover" style="margin-left: 11px;">Report</span></a>
     
   </li>
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#setting" aria-expanded="false" aria-controls="setting"> <img src="<?=base_url()?>Assets\images\JBFset.png" width="21"><span class="for_hover" style="margin-left: 11px;">Setting</span></a>

        <ul id="setting" class="collapse" aria-labelledby="setting" data-parent="#side-nav-accordion">
          <li class="sidebar-item"><a href="#" onclick="javascript:window.open('http://ostermiller.org/calc/calculator.html','calculator'+new Date().getTime(),'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=yes,copyhistory=no,width=450,height=300');">
            <img src="<?=base_url()?>Assets\images\JBFcalculator.png" width="18" ><span class="for_hover" style="margin-left: 11px;">Calculator</span></a></li>


         <li> <a class="for_hover" href="#" onclick="notepad();"><img src="<?=base_url()?>Assets\images\JBFnotepad.png" width="21"><span class="for_hover" style="margin-left: 11px;">Notepad</span></a>
          </li>

          <script type="text/javascript">
            function notepad()
            {
               var url="https://www.rapidtables.com/tools/notepad.html";
               window.open(url,'popUpWindow','height=500,width=500,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');
            }
          </script>

          <!-- <li> <a class="for_hover" href="https://www.adminjainbusiness.padmamanisilver.com/Backup"><img src="https://www.adminjainbusiness.padmamanisilver.com/assets/images/Dashaboard/backup.png" width="21"><span class="for_hover" style="margin-left: 11px;">Backup</span></a>-->
          <!--</li>-->
         
         
        </ul>
      </li>
      <!--  -->
     
     
    </ul>
    <div class="ps__rail-y" style="top: 100px; right: 0px; height: 585px;"><div class="ps__thumb-y" tabindex="0" style="top: 75px; height: 437px;"></div></div>
  </aside>
  <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">
    <div class="ms-aside-header">
      <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
        <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-toggle="tab"> Activity Log</a>
        </li>
        <li>
          <button type="button" class="close ms-toggler text-center" data-target="#ms-recent-activity" data-toggle="slideRight"><span aria-hidden="true">&times;</span>
          </button>
        </li>
      </ul>
    </div>
    <div class="ms-aside-body">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
          <ul class="ms-activity-log">
            <li>
              <div class="ms-btn-icon btn-pill icon btn-light"> <i class="flaticon-gear"></i>
              </div>
              <h6>Update 1.0.0 Pushed</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-success"> <i class="flaticon-tick-inside-circle"></i>
              </div>
              <h6>Profile Updated</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-warning"> <i class="flaticon-alert-1"></i>
              </div>
              <h6>Your payment is due</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-danger"> <i class="flaticon-alert"></i>
              </div>
              <h6>Database Error</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-info"> <i class="flaticon-information"></i>
              </div>
              <h6>Checkout what's Trending</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-secondary"> <i class="flaticon-diamond"></i>
              </div>
              <h6>Your Dashboard is ready</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
          </ul> <a href="#" class="btn btn-primary d-block"> View All </a>
        </div>
      </div>
    </div>
  </aside> 
 <main class="body-content " style="background-image: url('<?= base_url('assets/images/JBFadminimg.jpg') ?>');background-repeat: no-repeat; background-size: 100% 100%;"> 

    <div class="mainbackGround"> </div>
    <nav class="navbar ms-navbar ">
      <div class="ms-aside-toggler ms-toggler" data-target="#ms-side-nav" style="background-color:#23376c; padding:10px;"data-toggle="slideLeft"> <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
      </div>
      <!-- <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href=""><span class="LogoName" style="color: #fff; padding: 0; ">SPEEDX</span><br><span class="food_prcdt" style="color: #fff; font-size: 14px;"> Your Transport Partner</span> </a>
      </div> -->

     
<!--       <div class="logo-sn">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href=""><span class="LogoName" style="color: #fff; padding: 0; ">Welcome , </span></a>
      </div>
       -->
      <!-- <div class="logo-sn">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href=""><span class="LogoName" style="color: #fff; padding: 0; ">Welcome To , </span></a>
      </div>
 -->

      <!-- <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
    
        <li class="ms-nav-item dropdown " style="display: none;"> <a href="#" class="text-disabled ms-has-notification" id="mailDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-envelope-o fa-lg"></i></a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="mailDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Mail</span></h6><span class="badge badge-pill badge-success">3 New</span>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-scrollable ms-dropdown-list">
              <a class="media p-2" href="#">
                <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                  <img src="https://www.adminjainbusiness.padmamanisilver.com/assets/img/costic/customer-3.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body"> <span>Hey man, looking forward to your new project.</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="ms-chat-status ms-status-online ms-chat-img mr-2 align-self-center">
                  <img src="https://www.adminjainbusiness.padmamanisilver.com/assets/img/costic/customer-2.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body"> <span>Dear John, I was told you bought Costic! Send me your feedback</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 28 minutes ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                  <img src="https://www.adminjainbusiness.padmamanisilver.com/assets/img/costic/customer-1.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body"> <span>How many people are we inviting to the dashboard?</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 6 hours ago</p>
                </div>
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer text-center"> <a href="pages/apps/email.html">Go to Inbox</a>
            </li>
          </ul>
        </li> -->
   <!--      <li class="ms-nav-item dropdown"> <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6><span class="badge badge-pill badge-info">4 New</span>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-scrollable ms-dropdown-list">
              <a class="media p-2" href="#">
                <div class="media-body"> <span>12 ways to improve your crypto dashboard</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="media-body"> <span>You have newly registered users</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="media-body"> <span>Your account was logged in from an unauthorized IP</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="media-body"> <span>An application form has been submitted</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>
                </div>
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer text-center"> <a href="#">View all Notifications</a>
            </li>
          </ul>
        </li> -->

        <li class="ms-nav-item ms-nav-user dropdown" id="header-logo" style="height: 52px;
    width: 52px;
    background: white;
    border-radius: 50%;
">
          <a href="#" id="userDropdown"  data-toggle="collapse" aria-haspopup="true" aria-expanded="false">
            <img class="ms-user-img ms-img-round float-right profile" src="<?=base_url()?>Assets\images\JBFlogo1.png" alt="people" data-toggle="dropdown" data-target="#u_profile" style="margin-top: -18px;">
          </a> 
          <ul class="dropdown-menu dropdown-menu-right user-dropdown arrow_box" aria-labelledby="userDropdown" id="u_profile">
            <li class="dropdown-menu-header">
            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, Admin</span></h6>
              
         
              
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-dropdown-list">
              <a class="media fs-14 p-2" href="javascript:void(0)"> <span class="hover_color"><i class="flaticon-user mr-2"></i> Profile</span>
              </a>
              <a class="media fs-14 p-2" href="javascript:void(0)"> <span class="hover_color"><i class="flaticon-mail mr-2"></i> Inbox</span> <span class="badge badge-pill badge-info">3</span>
              </a>
             <!--  <a class="media fs-14 p-2" href="pages/prebuilt-pages/user-profile.html"> <span><i class="flaticon-gear mr-2"></i> Account Settings</span>
              </a> -->
            </li>
            <!-- <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="pages/prebuilt-pages/lock-screen.html"> <span><i class="flaticon-security mr-2"></i> Lock</span>
              </a>
            </li> -->
            <li class="dropdown-menu-footer" >
              <a class="media fs-14 p-2" style="background: red ;" href="<?php echo base_url('Admin/Login/logout'); ?>"> <span class="hover_color" style="    color: white !important;"><i class="flaticon-shut-down mr-2"></i> Logout</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
     <!--  <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options"> <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div> -->
    </nav>
      

    <!-- <link rel="stylesheet" href="<?=base_url();?>Assets\css\form.css" /> -->
 <!-- <link rel="stylesheet" type="text/css" href="https://www.adminjainbusiness.padmamanisilver.com/assets2/select2.min.css"> -->

 <style type="text/css">
   
   /*.for_menus:hover{
    opacity: 0.9;
   }*/
.mainbackGround {
    /* background: rgba(0,0,0,0.5); */
    position: fixed;
    width: 100%;
    height: 100%;
}
@media(max-width: 768px)
{
  .ms-content-wrapper {
    padding-top: 50px !important;
    max-width: 900px;
    margin: auto;
}
nav.navbar.ms-navbar {
    padding-bottom: 0;
    padding-top: 0;
}
}

  </style>
<!--   
 <script type="text/javascript">
   $(document).ready(function() {
$('.mdb-select').materialSelect();
});
 </script>
  
 <script>
$( ".body-content" ).click(function() {


$( ".dropdown-menu" ).removeClass( "show" ).addClass( "hide" );
});
</script>

 <script>
$( ".body-content" ).click(function() {


$(".ms-quick-bar").attr("class", "ms-quick-bar fixed ms-d-block-lg");
});
</script> -->


