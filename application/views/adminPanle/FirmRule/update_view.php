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
          <span class="text-white">Firm Rule</span></span>
          </label>
              
          </div>


            <div class="ms-panel-body">
              
              <form class="needs-validation" id="Form" action="<?php echo base_url('update/'.(isset($FirmRule -> ruleId)?'updaeFirmRule':'insertFimRule')) ?>" method="post" autocomplete="off">
                <input name="ruleId" id="ruleId" value="1" type="hidden"> 
                <div class="form-row">
                
                  <div class="col-md-4 ">
                    <label for="name">Rules<span class="required" style="color: red">*</span></label>
                    <div class="input-group">
                      <input type="text" class="form-control form-control-sm" name="businessRule" id="businessRule" autofocus="autofocus" value="<?= isset($FirmRule->businessRule) ? $FirmRule->businessRule : '' ?>" required="">
                     
                    </div>
                  </div>
               </div>

                <div style="text-align: end;">
                  <button type="button" id="btn_savee" class="btn samplebtn waves-effect waves-light"><i class="fa fa-check-circle" style="font-size: 20px;color: #FFF;"></i>Save</button>

                  <a id="create" href="<?php echo base_url('Admin/FrimRule_Detail/index'); ?>" class="Edit btn samplebtn waves-effect waves-light"><i class="fa fa-edit" aria-hidden="true"></i>Edit</a>
                </div>

                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <script src="<?=base_url()?>Assets/js/AdminJS/jquery-3.3.1.min.js"></script>

    <script>
      a=false;
$(document).ready(function(){
$("#btn_savee").click(function(){
if(a==false){
  saveperform();
 }
  });
});

function saveperform()
{
    var businessRule=$('#businessRule').val();
    var ruleId=$('#ruleId').val();
    
    if(businessRule=="")
    {
        swal({
            title:"",
            text:"Please Enter Required Field",
            type:"error",           
        });       
    }

    else
    {
        if(ruleId>0)
        {
           a=true;

      var form = $("#Form").closest("form");
      var formData = new FormData(form[0]);
            
            $.ajax({
        url:base_path+"Admin/firmRule_update/updaeFirmRule",
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
           window.location.href = base_path+"Admin/FrimRule_Detail/index";
            
            
        }
      });

        }
    else
    {      
         // alert('Insert');
        $.ajax({
              url:base_path+"Firmrule/insert",
              type: "POST",
              data: $('#Form').serialize(),
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
            a=false;         
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
    $(function(){
    $("#businessName").focus();
    });

    }
    });
</script>