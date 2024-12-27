<style>

 main.body-content{
  background-image: none !important;
}
</style> 

<div class="ms-content-wrapper"> 
      <div class="row">
        <div class="col-md-12">
          <div class="ms-panel box">
            

            <div class="ms-panel-header py-2" style="display: flex;
            justify-content: space-between; border-bottom: 2px solid rgba(227 149 38) !important;">
              <label class="invoiceInfo  text-center d-block" style="margin: 0 auto;">
          <span class="common_heading " style="width: auto!important;margin:0 auto;">
          <span class="text-white">Banner</span></span>
          </label>
              
          </div>


            <div class="ms-panel-body">
              
              <form class="needs-validation" id="Form" method="post" autocomplete="off" enctype="multipart/form-data">
                <input name="bannerId" id="bannerId" value="" type="hidden"> 

                <div class="form-row">
                  <div class="col-md-4 ">
                    <label for="name">Banner Name <span class="required" style="color: red">*</span></label>
                    <div class="input-group">
                      <input type="text" class="form-control form-control-sm" name="bannerName" id="bannerName" autofocus="autofocus" value="" required="">
                     
                    </div>
                  </div>

                  <div class="col-md-3 mb-3">
                                        <label for="name">Photo<span class="text-danger">*</span> </label>

                                        <input type="file" class="form-control form-control-sm" id="bannerimg" name="bannerimg" placeholder="image" onchange="readimage(this,'profile-img-tag1');" value="">
                                                            
                                                                                        
                                        <!-- <img src="" id="profile-img-tag1" calss="img-thumbnail" style="margin: 10px 32px;height: 86px">  -->


                                        
                                        <input type="hidden" name="hidden_photo" id="hidden_photo" value=""> 
                                        
                                        <input type="hidden" id="getphoto" value="">
                                        
                                    </div>

               </div>

               



                <div style="text-align: end;">
                  <button type="button" name="btn_savee" id="btn_savee" class="btn samplebtn waves-effect waves-light"><i class="fa fa-check-circle" style="font-size: 20px;color: #FFF;"></i>Save</button>

                  <a id="create" href="<?php echo base_url('Admin/BanerDetail/index'); ?>" class="Edit btn samplebtn waves-effect waves-light"><i class="fa fa-edit" aria-hidden="true"></i>Edit</a>
                </div>

                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="<?=base_url()?>Assets/js/AdminJS/jquery-3.3.1.min.js"></script>
    <script>

$(document).ready(function(){
  $("#btn_savee").click(function(){
      saveperform();
  });
});

function saveperform() {
  var bannerName = $('#bannerName').val();
  var bannerId = $('#bannerId').val();
  var bannerimg = $('#bannerimg').val();

  if (bannerName == "") {
    swal({
      title:"",
      text:"please enter requird field",
      type:"error",
      
  });
  } 
  else if(bannerId==0 && bannerimg==0){
    swal({
      title:"",
      text:"please Choose Photo",
      type:"error",
      
  });
  }
  else
    {
        if(bannerId >0)
        {
           a=true;

      var form = $("#Form").closest("form");
      var formData = new FormData(form[0]);
            
            $.ajax({
        url:base_path+"Admin/BannerUpdate/update",
        type: "POST",
    
        data: formData,
        processData: false,
        contentType: false,
        beforeSend: function(){
              $('#btn_savee').prop('disabled', true);
              $('#btn_savee').html('<i class="fa fa-spinner " style="padding-right:2%;"></i> Loading');
              }, 
        success: function(data) { 
              $("#Form").trigger("reset");
              $('#btn_savee').html('<i class="fa fa-check-circle" style="font-size: 20px;color: #FFF;"></i>Save');
              $('#btn_savee').prop('disabled', false);

    

            swal({
            title:"",
            text:"Data Update Successfully",
            type:"success",
            showCancelButton: false, 
            showConfirmButton: false,
             width: '1000px',
            timer:1000
        });
           window.location.href = base_path+"Admin/Banner/Add";
            
            
        }
      });

        }
  
  
  
  else {
    var form = $("#Form").closest("form");
    var formData = new FormData(form[0]);
      $.ajax({
          url: base_path + "Admin/Banner/insertBanner",
          type: "POST",
          data: formData,
          processData: false,
          contentType: false,
          beforeSend: function(){
            $('#btn_savee').prop('disabled', true);
            $('#btn_savee').html('<i class="fa fa-spinner " style="padding-right:2%;"></i> Loading');
            }, 
             success: function(data) { 
            $("#Form").trigger("reset");
            $('#btn_savee').html('<i class="fa fa-check-circle" style="font-size: 20px;color: #FFF;"></i>Save');
            $('#btn_savee').prop('disabled', false);
            
            swal({
              title:"",
              text:"Data Submitted Successfully",
              type:"success",
              showCancelButton: false, 
              showConfirmButton: false,
              width: '1000px',
              timer:2000
          }); 
              window.location.href = base_path + "Admin/Banner/Add";
          },
         
          
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
    $(function(){
    $("#businessName").focus();
    });

    }
    });

function readimage(input,valueid) {
                                            // alert("hello");
      if (input.files && input.files[0]) {
        var reader = new FileReader();
         reader.onload = function (e) {
         $('#'+valueid+'').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
  }  
</script>