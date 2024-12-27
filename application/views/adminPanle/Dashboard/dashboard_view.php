
<style>
.col-4.for_menus {
  background: #fff;
  padding: 0;
  /* margin: 5px 12px 5px 8px; */
  margin: 12px;
  padding-top: 13px;
  padding-bottom: 16px;
  box-shadow: 0 8px 17px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .15);
  border-radius: 6px;
  cursor: pointer;
  transition: all .5s ease-in-out;
  box-sizing: border-box;
}

.col-4.for_menus:hover {
    transition: all 0.7s ease-in-out;
    transform: scale(1.1);
}
@media (max-width: 430px) {
.imageFit img{
    display:none;
    
}
.iageFullWidth{
  height: 0;
  }
}


.row.gapBothSides{
    transform: translate(0px, -108px);
  }



@media (max-width: 768px){
    .row.topArea{
    margin-top: -14px;
  }
}
</style>


<!-- <div style="background-image: url('<?= base_url('assets/images/JBFadminimg.jpg') ?>');background-repeat: no-repeat; background-size: 100% 100%; background-size:cover; background-position:center"> -->
<div class="imgFullWidth">
  <!-- <img src="assets/img/loginLogo/transportimg.jpeg" class="imageFullWidth"> -->
</div>
<div class="ms-content-wrapper" style="padding-top: 0px;max-width: 900px;
    margin: auto;">

<!-- <div class="row topArea">
    
              <div class="col-12 col-lg-9 mx-auto">
              <div class="row">
              <div class="text-center col-2 mt-3" style="display: flex;
    justify-content: end;
    align-items: end;">
              <div class="imageFit">
              <img src="assets/img/logo1.png" class="image_radius" style="border-radius: 50%; 
              background:white;
              margin-top:-10px;
    height: 60px;
    width: 60px;
    border: 4px solid white;">
            </div>
            </div>

            <div class="col-9 col-9">
              <div class="mainInfoContainer">
                  <div class="infos" style="text-transform: uppercase;
    color: white;
    font-weight: bold;
    font-size: 24px;">Jain Business Forum</div>
                    <div class="infos" style="font-size: 19px;
    color: red;
    font-weight: bold;"></div>
              </div>
            </div>

              </div>
            </div>
           
            
          </div> -->
          <div class="row">
        <div class="col-md-12  col-12 ">
          <div class="row topArea">
    
              <div class="col-12 col-lg-9 mx-auto">
              <div class="row">
              <div class="text-center col-2 mt-3" style="display: flex;
    justify-content: end;
    align-items: end;">
              <div class="imageFit">
              <img src="<?=base_url()?>Assets\images\JBFlogo1.png" class="image_radius" style="border-radius: 50%; 
              background:white;
              margin-top:-10px;
    height: 60px;
    width: 60px;
    border: 4px solid white;">
            </div>
            </div>

            <div class="col-9 col-9">
              <div class="mainInfoContainer">
                  <div class="infos" style="text-transform: uppercase;
    color: white;
    font-weight: bold;
    font-size: 24px;">Jain Business Forum</div>
                    <div class="infos" style="font-size: 19px;
    color: red;
    font-weight: bold;"></div>
              </div>
            </div>

              </div>
            </div>
           
            
          </div>
          <div class="row" style="justify-content: center;max-height: 304px;">
            <div class="col-11 for_over" style="z-index: 1 !important;">
              <div class="cash_wrap">
              <div class="total_cash" style=" display: flex;">
                <!-- <i class="fa fa-map-marker">
               </i> -->

                   <!-- <li class="ms-nav-item dropdown" style="list-style-type: none;
    margin-left: 34px;"> <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell-o fa-lg" style="color: #621fcb;
    font-size: 26px;"></i></a>
          
        </li> -->
              </div>
              
            </div>
              <h5 class="text-white" style="text-align:center;font-weight:600;color:green;padding: 10px;">Cash Flow</h5>
              <div class="wrapFlex">
              <div class="col-4 records_data">
                  <div class="data_rec" ><a style="font-family: 'Poppins';
    font-weight: 700;
    font-size: 16px;
    color: #23376c;" href="<?php echo base_url('Admin/Banner/add'); ?>">Banner</a>
                  </div>
            </div>
            <div class="col-4 records_data">
                  <div class="data_rec" ><a style="font-family: 'Poppins';
    font-weight: 700;
    font-size: 16px;
    color: #23376c;" href="<?php echo base_url('Admin/Firmrule/add'); ?>">Rules</a>
                  </div>
            </div>
            <div class="col-4 records_data">
                  <div class="data_rec" ><a style="font-family: 'Poppins';
    font-weight: 700;
    font-size: 16px;
    color: #23376c;" href="<?php echo base_url('Admin/Helpdesk/helpDesk'); ?>">Help</a>
                  </div>
            </div>
          </div>
            </div>
            
            <!-- box content start -->
     
    <div class="row gapBothSides pb-5 ">
        <div class="col-4 col-sm-6 col-md-3 col-lg-3 for_menus ">
            <a href="<?=base_url('Admin/modifyfirm/index'); ?>">
                <div class="menus_icon">
                    <img src="<?=base_url()?>Assets\images\JBFpartyhome.png" class="img-fluid">
                </div>
                <div class="menus_icon" style="font-family: 'Poppins'; font-weight: 700; font-size: 16px; color: #23376c;">
                    Firm List
                </div>
            </a>
        </div>
        <div class="col-4 col-sm-6 col-md-3 col-lg-3 for_menus ">
            <a href="<?php echo base_url('Admin/modifyEmployee/modifyEmployee'); ?>">
                <div class="menus_icon">
                    <img src="<?=base_url()?>Assets/images/JBFpartylist.png" class="img-fluid">
                </div>
                <div class="menus_icon" style="font-family: 'Poppins'; font-weight: 700; font-size: 16px; color: #23376c;">
                    Employee List
                </div>
            </a>
        </div>
        <div class="col-4  col-sm-6 col-md-3 col-lg-3 for_menus ">
            <a href="<?php echo base_url('Admin/Business/business'); ?>">
                <div class="menus_icon">
                    <img src="<?=base_url()?>Assets/images/JBFbookinghome.png" class="img-fluid">
                </div>
                <div class="menus_icon" style="font-family: 'Poppins'; font-weight: 700; font-size: 16px; color: #23376c;">
                    Business Category
                </div>
            </a>
        </div>
        <div class="col-4  col-sm-6 col-md-3 col-lg-3 for_menus">
            <a href="<?php echo base_url('Admin/JobType/add'); ?>">
                <div class="menus_icon">
                    <img src="<?=base_url()?>Assets/images/JBFpartylist.png" class="img-fluid">
                </div>
                <div class="menus_icon" style="font-family: 'Poppins'; font-weight: 700; font-size: 16px; color: #23376c;">
                    Job Type
                </div>
            </a>
        </div>
        <div class="col-4 col-sm-6 col-md-3 col-lg-3 for_menus">
            <a href="<?php echo base_url('Admin/Rulemaster/role'); ?>">
                <div class="menus_icon">
                    <img src="<?=base_url()?>Assets/images/JBFloadinghome.png" class="img-fluid">
                </div>
                <div class="menus_icon" style="font-family: 'Poppins'; font-weight: 700; font-size: 16px; color: #23376c;">
                    Rule Master
                </div>
            </a>
        </div>
        <div class="col-4 col-sm-6 col-md-3 col-lg-3 for_menus ">
            <a href="<?php echo base_url('Admin/Keyskill/add'); ?>">
                <div class="menus_icon">
                    <img src="<?=base_url()?>Assets/images/JBFpartylist.png" class="img-fluid">
                </div>
                <div class="menus_icon" style="font-family: 'Poppins'; font-weight: 700; font-size: 16px; color: #23376c;">
                    Key Skill Master
                </div>
            </a>
        </div>
    </div>




           <!-- box content end -->
          </div>
        </div>
      </div>
    </div>
</div>