<style>
    .checkbox {
        width: 25px; /* Width of the checkbox */
        height: 25px; /* Height of the checkbox */
        cursor: pointer;
        display: inline-block;
        text-align: center;
        vertical-align: middle; /* Align with text */
    }

    .checkbox {
        width: 25px; /* Width to match */
        height: 25px; /* Height to match */
        cursor: pointer;
       font-weight: 700;
       margin-left: 25px
    }


</style>
<style>
main.body-content {
    background-image: none !important;
}
</style>
<div class="ms-content-wrapper">
    <div class="row">

        <div class="col-md-12">

            <div class="ms-panel">


                <div class="ms-panel-header py-2" style="display: flex;
            justify-content: space-between; border-bottom: 2px solid rgba(227 149 38) !important;">
                    <label class="invoiceInfo  text-center d-block" style="margin: 0 auto;">
                        <span class="common_heading " style="width: auto!important;margin:0 auto;">
                            <span class="text-white">Help</span></span>
                    </label>

                </div>

              

                <div class="ms-panel-body">
                    <div class="main_row">
                    <div class="icon">
                            <i class="fa fa-file-excel-o icon_hover" onclick="exportToExcel()" style="color: #17179e;font-size: 20px;cursor:pointer"></i>
                            <i class="fa fa-file-pdf-o icon_hover" onclick="exportToPDF()" aria-hidden="true" style="color: red;font-size: 20px;padding-left: 6px;cursor:pointer"></i>
                            <i class="fa fa-print icon_hover" onclick="printReport()" aria-hidden="true" style="font-size: 20px;padding-left: 6px;cursor:pointer"></i>
                        </div>

                    </div>

                   <div class="table-responsive" id="tableverify">
                     <table id="keyskill_detailview" class="table table-bordered table-striped thead-primary w-100 text-align-center">
          <thead>
                                            <tr>
                                                <th>Action</th>
                                                <th>Id</th>
                                                <th>Help Description</th>
                                                <th>Date</th>
                                                <th>Person Name</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                          

                                        <?php 
                                            $i=0;

                                            foreach($alldata as $rw=>$value){
                                                $mobileNo = '+91' . $value->BusinessMobile; 
                                                $mobileNo = '+91' . $value->BusinessMobile; 
                                                $mobileNo = $value->BusinessMobile ? $value->BusinessMobile : $value->StudentMobile;
                                               
                                            echo '<tr role="row" class="odd">';
                                            echo '<td id="whatsapp">
        <img src="' . base_url() . 'Assets/images/JBFwhatsapp.webp" 
        style="height: 30px; cursor: pointer; margin-right: 10px;" 
        onclick="sendMessageToWhatsApp(\'' . $mobileNo . '\');" >
      </td>';


                                            
                                            echo "<td>".$value->helpId ."</td>";
                                            echo "<td>".$value->helpdescription."</td>";
                                             echo "<td>".$value->created_date."</td>";
                                            echo "<td>".$value->PersoneName."</td>";
                                            echo '<td>
                                            <input class="form-check-input checkbox" type="checkbox" id="status_' . $value->helpId . '" 
                                                   name="status" ' . ($value->is_active == 0 ? 'checked' : '') . ' 
                                                   onclick="confirmUpdateStatus(' . $value->helpId . ', this)">
                                          </td>';

                                            echo "</tr>";                        
                                        }
                                        ?> 
                            
                                          
                                        </tbody>
          </table>


<!-- 
          <table id="keyskill_detailview" class="table table-bordered table-striped thead-primary w-100 text-center">
    <thead>
        <tr>
            <th>Action</th>
            <th>Id</th>
            <th>Help Description</th>
            <th>Date</th>
            <th>Person Name</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach($alldata as $value) {
            $mobileNo = $value->BusinessMobile ? '+91' . $value->BusinessMobile : '+91' . $value->StudentMobile;

            echo '<tr role="row" class="odd">';
            echo '<td id="whatsapp">
                    <img src="' . base_url() . 'Assets/images/JBFwhatsapp.webp" 
                    style="height: 30px; cursor: pointer; margin-right: 10px;" 
                    onclick="sendMessageToWhatsApp(\'' . $mobileNo . '\');" alt="WhatsApp Icon">
                    </td>';
            
                 

            echo "<td>" . $value->helpId . "</td>";
            echo "<td>" . $value->helpdescription . "</td>";
            echo "<td>" . $value->created_date . "</td>";
            echo "<td>" . $value->PersoneName . "</td>";
            echo '<td class="custom-checkbox text-align-center">
                    <input type="checkbox" class="checkbox" id="status_' . $value->helpId . '" 
                           name="status" ' . ($value->is_active == 0 ? : '') . ' 
                           onclick="confirmUpdateStatus(' . $value->helpId . ', this)" >
                  </td>';
            echo '</tr>';                        
        }
        ?> 
    </tbody>
</table> -->
                    </div>







                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>web_resources/dist/js/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>


<!-- <script>
$(document).ready(function() {


    $('#keyskill_detailview').dataTable({});


});
</script> -->

<script>
$(document).ready(function() {
    // Initialize DataTable with buttons
    var table = $('#keyskill_detailview').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Helpdesk Activity Report',
                exportOptions: {
                    modifier: {
                        page: 'all' // Export all pages
                    },
                    columns: [1, 2,3,4]
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Helpdesk Activity Report',
                exportOptions: {
                    modifier: {
                        page: 'all' // Export all pages
                    },
                    columns: [1, 2,3,4]
                }
            },
            {
                extend: 'print',
                title: 'Helpdesk Activity Report Aug - 2024',
                exportOptions: {
                    modifier: {
                        page: 'all' // Print all pages
                    },
                    columns: [1, 2,3,4]
                },
                customize: function (win) {
                    // Center the title by applying CSS styles
                    $(win.document.body).css('text-align', 'center');

                    // Optionally, you can also adjust the table's layout
                    $(win.document.body).find('thead').addClass('compact').css({
                        'margin': '0 auto', // Center the table on the page
                        'text-align': 'center'
                    });

                    // Optionally, you can style the header specifically
                    $(win.document.body).find('h1').css({
                        'text-align': 'center', // Center the title heading
                        'font-size': '18pt',    // Optional: increase title size
                         'margin-bottom':'50px'
                    });
                }

            }
        ]
    });
    
    // Logging the table instance for debugging
    console.log(table); // Check if this logs the DataTable instance correctly

    // Function to trigger Excel export
    window.exportToExcel = function() {
        table.button(0).trigger(); // Trigger Excel export
    };

    // Function to trigger PDF export
    window.exportToPDF = function() {
        table.button(1).trigger(); // Trigger PDF export
    };

    // Function to trigger Print
    window.printReport = function() {
        table.button(2).trigger(); // Trigger Print
    };
});

</script>

<script src="<?=base_url()?>Assets/js/AdminJS/jquery-3.3.1.min.js"></script>
<script>
function sendMessageToWhatsApp(mobileNo) {
    // Open WhatsApp with the given mobile number
    if (!mobileNo || mobileNo.length < 10) {
        alert('Please provide a valid mobile number.');
        return;
    }

    var whatsappUrl = `https://api.whatsapp.com/send?phone=${mobileNo}`;
    console.log("whasapp no", mobileNo);
    window.open(whatsappUrl, '_blank');
}


// Example usage
sendMessageToWhatsApp('919876543210'); // Replace with a valid number



</script>
<script>
   function confirmUpdateStatus(helpId, checkbox) {
    // Show a confirmation popup
    var message = checkbox.checked ? "Are you sure you want to  deactivate this entry?" : "Are you sure you want to activate this entry?";
    var confirmed = confirm(message);  // Shows a popup with "OK" and "Cancel"
    
    if (confirmed) {
        // If user clicks "OK", proceed with the AJAX call to update status
        var isActive = checkbox.checked ? 0 : 1;

        $.ajax({
            url:base_path+ 'Admin/Helpdesk/update_status',  // Replace with the actual controller and method path
            method: 'POST',
            data: {
                helpId: helpId,
                is_active: isActive
            },
            success: function(response) {
                if (isActive === 0) {
                    // If unchecked (deactivated), remove the row from the table
                    $(checkbox).closest('tr').remove();
                }
            },
            error: function() {
                alert('Error updating status');
            }
        });
    } else {
        // If user clicks "Cancel", revert the checkbox state to its previous state
        checkbox.checked = !checkbox.checked;
    }
}

</script>


