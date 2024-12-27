a = false;
$(document).ready(function () {
  $("#btn_savee").click(function () {
    if (a == false) {
      saveperform();
    }
  });
});

function saveperform() {
  var keyName = $('#keyName').val();
  var keyId = $('#keyId').val();

  if (keyName == "") {
    swal({
      title: "",
      text: "Please Enter Required Field",
      type: "error",
    });
  }

  else {
    if (keyId > 0) {
      a = true;

      var form = $("#Form").closest("form");
      var formData = new FormData(form[0]);

      $.ajax({
        url: base_path + "Keyskill/updatedata",
        type: "POST",

        data: formData,
        processData: false,
        contentType: false,
        beforeSend: function () {
          $('#btn_savee').prop('disabled', true);
          $('#btn_savee').html('<i class="fa fa-spinner " style="padding-right:2%;"></i> Loading');
        },
        success: function (data) {
          $("#Form").trigger("reset");
          $('#btn_savee').html('<i class="fa fa-check-circle" style="font-size: 20px;color: #FFF;"></i>Save');
          $('#btn_savee').prop('disabled', false);



          swal({
            title: "",
            text: "Data Update Successfully",
            type: "success",
            showCancelButton: false,
            showConfirmButton: false,
            width: '1000px',
            timer: 1000
          })


          window.location.href = base_path + "Admin/Keyskill/Add";


        }
      });

    }
    else {
      // alert('Insert');
      $.ajax({
        url: base_path + "Admin/Keyskill/insertKey",
        type: "POST",
        data: $('#Form').serialize(),
        beforeSend: function () {
          $('#btn_savee').prop('disabled', true);
          $('#btn_savee').html('<i class="fa fa-spinner " style="padding-right:2%;"></i> Loading');
        },
        success: function (data) {
          $("#Form").trigger("reset");
          $('#btn_savee').html('<i class="fa fa-check-circle" style="font-size: 20px;color: #FFF;"></i>Save');
          $('#btn_savee').prop('disabled', false);
      
          swal({
              title: "Success",
              text: "Data Submitted Successfully",
              icon: "success",
              buttons: false,
              timer: 2000
          });
          a = false;
      }
      
      });
    }
  }

}