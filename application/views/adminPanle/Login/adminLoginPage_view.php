<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JBF Admin Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?=base_url();?>Assets\css\font.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url();?>Assets\css\bootstrap_min.css" />
  
    <link href="<?=base_url() ?>Assets\css\jquery-ui.min.css" rel="stylesheet">
    <link href="<?=base_url() ?>Assets\css\sweetalert.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?=base_url();?>Assets\css\style1.css" /> -->
    <!-- <link rel="stylesheet" href="<?=base_url();?>Assets\css\multiselect.css" />  -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url();?>Assets\images\JBFlogo1.png">
    <script>
        var base_path="<?php echo base_url();?>";
     </script>
    <style type="text/css">
  @media(max-width: 768px){
  .ms-content-wrapper.login{
    padding-top: 0px !important;
    padding: 0px;
  }
  }
</style>
</head>
<body>
<div class="fullPageImage">
    <img src="<?=base_url();?>Assets\images\JBF_login_backImg.jpg" class="imageFullWidth">
  </div>
  <div class="mainbackGround"> </div>
 	<div class="ms-content-wrapper login" style="padding-top: 0px;">
 			<!-- <div class="row"> -->
        <form class="" id="Form" name="form" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
 					<div class="col-12 forDesktopView" style="padding-left: 0;
    padding-right: 0px;">
 						<div class="main_img_wrap">
 					<img src="<?=base_url();?>Assets\images\JBFlogo1.png" style="height: 130px;
    width: 130px;
    border-radius: 50%;
   " alt="logo1" class="image_fit">
 								<div class="LoginName">
 									<div class="logNam" style="color: #fff;
    font-family: inherit;font-size: 26px;font-weight: bold;">Login</div>
 								</div>
 						</div>
             <div class="text-center " style="color:red;font-size:16px;font-weight: bold;" id="errorLogin"></div>

 						<div class="input_fields_names">
 							<div class="forms_inputs">
 								<div class="form-group">
 									<input type="text" name="userName" id="userName" class="form-control inpit_fields" placeholder="Enter username" value="<?php if(!empty($data)) echo $data[0]->username;?>"  required>
                  <span id="msg"></span>
                  <p class="mt-2" style="color:red;font-size:15px;font-weight:bold;text-align:left" id="erroruname"></p>

 								</div>
 								<div class="form-group" style="padding-top: 15px;">
 									<input type="password" name="password" id="password" class="form-control inpit_fields" placeholder="Enter Password" value="<?php if(!empty($data)) echo $data[0]->password;?>"  required>
                
                  <div id="pmsg"></div>
                  <p class="mt-2" style="color:red;font-size:15px;font-weight:bold;text-align:left" id="errorpassword"></p>

 								</div>
 							</div>
 						</div>

                             <!-- <label class="forgotpsw" data-toggle="modal" data-target="#ForgotModal" data-backdrop="static" data-keyboard="false" id="Fid" style="margin-left: 51px;cursor: pointer;">Forgot Password?</label> -->

          <!-- Modal -->
<!-- <div class="modal fade" id="ForgotModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <h4 id="MobileHead">Enter Mobile Number To Verify </h4>
        <h4 id="OTPHead">Please Enter OTP To Verify</h4>
        <h4 id="ResetPSWHead">Change Password</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="form-group" id="MobileDiv">
              <input type="Number" id="mobileNo" name="mobileNo" class="form-control inpit_fields" style="margin: auto;width: 70%;box-shadow: 2px 5px #6727ce;" placeholder="Enter Mobile Number" onchange="Mobile()">
              <span id="mobileerror" style="color: red;"></span>
          </div>
          
          <div class="form-group" id="OTPDiv">
              <input type="Number" id="OTP" name="OTP" class="form-control inpit_fields" style="margin: auto;width: 70%;box-shadow: 2px 5px #6727ce;" placeholder="OTP">
          </div>

          <div class="form-group" id="NewPSWDiv">
              <input type="password" id="newPassword" name="newPassword" class="form-control inpit_fields" style="margin: auto;width: 70%;box-shadow: 2px 5px #6727ce;" placeholder="New Password">
          </div>
          
          <div class="form-group" id="CnfPSWDiv">
              <input type="password" id="cnfPassword" name="cnfPassword" class="form-control inpit_fields" style="margin: auto;width: 70%;box-shadow: 2px 5px #6727ce;" placeholder="Confirm Password">
              <i class="fa fa-eye" style="margin-left: 80px;" onclick="myFunction()">Show Password</i>
              <span id="CheckPasswordMatch" style="color: green;"></span>
          </div>
                                

          <div class="btn_lgn" id="BtnSendOTP" style="padding-top: 5px;">
              <button type="button" class="btn btn-primary btn-lg btn-block" name="btn_sendOTP" id="btn_sendOTP">Send OTP</button>
          </div>

          <div class="btn_lgn" id="BtnVerifyOTP" style="padding-top: 5px;">
               <button type="button" class="btn btn-primary btn-lg btn-block" name="btn_verifyOTP" id="btn_verifyOTP">Verify OTP</button>
          </div> 

          <div class="btn_lgn" id="BtnChangePSW" style="padding-top: 5px;">
               <button type="button" class="btn btn-primary btn-lg btn-block" name="btn_changePSW" id="btn_changePSW">Change Password</button>
          </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
 								<div class="btn_lgn">
 										<button type="button" class="btn btn-primary btn-lg btn-block" name="btn_login" id="btn_login">Login</button>
 								</div>
                <span id="develoupedby">Developed By Comtranse Technology Pvt.Ltd.</span>  
 						</div>
           </form>
 			</div>


    <script src="<?=base_url()?>Assets/js/AdminJS/jquery.min.js"></script>
<script>

var base_path = "<?php echo base_url();?>";
a=false;
$(document).ready(function(){
$("#btn_login").click(function(){
    // alert('hi');
if(a==false){
  loginform();
 }
  });
});

function loginform()
{


    var flag = 0;
    var username=$('#userName').val(); 
    var password=$('#password').val(); 
    // alert("hi");
    if(username == ''){
      document.getElementById("erroruname").innerHTML ="Enter Username.";
      flag = 1;
      }
      if(password == ''){
        document.getElementById("errorpassword").innerHTML ="Enter Password.";
        flag = 1;
      }
      myFunction();
      if(flag == 0){
        //alert('hi');
        console.log($('#Form').serialize());
        $.ajax({

          url: base_path+"Admin/Login/login_validation",
          method: "POST",
          data:$('#Form').serialize(),
          dataType:'json',
          beforeSend:function(){
            $('#btn_login').prop('disabled',true);
            $('#btn_login').css('color','#000');
            $('#btn_login').hover(
              function(){
                //Mouse over,apply styles
                $(this).css({
                  'color':'#fff'
                });
              },
              function(){
                //Mouse out, revert styles to the initial state
                $(this).css({
                  'color':'#424040bf'
                });
              }
            );
            $('#btn_login').html('Log In');
          },
          success:function(result) {
          
            $('#btn_login').prop('disabled',false);
            $('#btn_login').css('color','#000');
            console.log(result);
           console.log(typeof result);
           console.log(result.status); 
            if(result.status === 1){
              $('#btn_login').prop('disabled',true);
              $('#btn_login').html('Login successful');

              // setTimeout(function(){
                window.location.href = base_path + "Admin/Admin/index";
              // },1500);

              // window.location.href = base_path+"Contact";

            }else if(result.status === 2){
              document.getElementById("errorLogin").innerHTML="Invalid username & password !";

            }
              else{
              document.getElementById("errorLogin").innerHTML="Somthing went wrong!";

            }
            console.log("hi");
          }
         
        });
      }
    }
    function myFunction(){
      var a=document.createElement("erroruname");
      var b=document.createElement("errorpassword");
      var c=document.createElement("errorLogin");

      setTimeout(function(){a.innerHTML=""},3000);
      setTimeout(function(){b.innerHTML=""},3000);
      setTimeout(function(){c.innerHTML=""},3000);
    }

</script>

</body>
</html>