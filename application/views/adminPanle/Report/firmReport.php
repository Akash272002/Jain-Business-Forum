<head>

<title>User Report</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

</head>

<body>

<div class="ms-panel-header py-2 d-flex justify-content-between align-items-center" style="border-bottom:none;">
    <!-- Left-aligned icons -->
    <div class="icon d-flex align-items-center">
        <i class="fa fa-file-excel-o icon_hover" aria-hidden="true" onclick="exportToExcel()" 
           style="color: #17179e; font-size: 20px; cursor:pointer; padding-right: 10px;"></i>
        <i class="fa fa-file-pdf-o icon_hover" onclick="exportToPDF()" aria-hidden="true" 
           style="color: red; font-size: 20px; cursor:pointer; padding-right: 10px;"></i>
        <i class="fa fa-print icon_hover" onclick="printReport()" aria-hidden="true" 
           style="font-size: 20px; cursor:pointer;"></i>
    </div>

    <!-- Center-aligned Verify/Unverify options -->
    <div class="d-flex justify-content-center w-50">
        <form class="d-flex align-items-center">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="statusu" value="2" checked>
                <label class="form-check-label" for="statusu">Unverify</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="statusv" value="1">
                <label class="form-check-label" for="statusv">Verify</label>
            </div>
        </form>
    </div>

    <!-- Right-aligned dropdowns for filtering -->
    <div class="d-flex align-items-center">
        <!-- Start Date Dropdown -->
        <select class="form-select me-2" name="startDate" id="startDate" style="width: 150px; border-radius: 8px; padding: 0.3rem 0.5rem;">
            <option value="">Start Month</option>
            <option value="01">January</option>
            <option value="02">February</option>
            <option value="03">March</option>
            <option value="04">April</option>
            <option value="05">May</option>
            <option value="06">June</option>
            <option value="07">July</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>

        <!-- End Date Dropdown -->
        <select class="form-select me-2" name="endDate" id="endDate" style="width: 150px; border-radius: 8px; padding: 0.3rem 0.5rem;">
            <option value="">End Month</option>
            <option value="01">January</option>
            <option value="02">February</option>
            <option value="03">March</option>
            <option value="04">April</option>
            <option value="05">May</option>
            <option value="06">June</option>
            <option value="07">July</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>

        <!-- Year Dropdown -->
        <select class="form-select me-2" name="yearDropdown" id="yearDropdown" style="width: 150px; border-radius: 8px; padding: 0.3rem 0.5rem;">
            <option value="">Year</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
        </select>

        <!-- Filter Button -->
        <button type="button" class="btn btn-primary" onclick="filterReports()" style="padding: 0.3rem 1rem; margin-left: 10px; border-radius: 8px;">Filter</button>
    </div>
</div>

    <h1>Employee Report</h1>


    <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="statement_table checkout_dt" style="margin-top:5px!important;padding:10px!important"
                    id="detialview">
                    <div class="statement_body">
                        <div class="table-responsive-md">
                            <table class="display table  no-footer mt-3" id="example">
                                <colgroup>
                                    <col span="5">
                                    <col span="1" style="visibility: collapse">
                                </colgroup>
                                <thead style="background:#ededed!important;">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">firmName</th>
                                        <th scope="col">firmCategory No.</th>
                                        <th scope="col">firmType</th>
                                        <th scope="col">mobileNo</th>

                                    </tr>
                                </thead>
                                <tbody>



                                    <?php  
										   $i=0;
										   foreach($alldata as $rw=>$value){

										   echo "<tr>";
										   echo '<td><div class="user_dt_trans"><p>'.$value->Id.'</p></div></td>';
										   echo '<td><div class="user_dt_trans"><p>'.$value->firmName.'</p></div></td>';
										   echo '<td><div class="user_dt_trans"><p>'.$value->firmCategory.'</p></div></td>';
										   echo '<td><div class="user_dt_trans"><p>'.$value->firmType.'</p></div></td>'; 
                                            echo '<td><div class="user_dt_trans"><p>'.$value->mobileNo.'</p></div></td>';
										   echo "</tr>"; 
										   $i++;					  
									   }
									 ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="pt-3 pb-2 px-3 ms-3 text-center"><a href="<?=base_url();?>Student/Search/search"
                        class="bottomclick mb-0"><i class="fas fa-reply"></i> &nbsp;<span class="bgback">Back</span></a>
                </div>
            </div>
        </div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );


function filterReports() {
    console.log("filterReports function triggered"); // Log the function call

    // Get the values of the input fields
    const year = $('#yearDropdown').val();
    const startDate = $('#startDate').val();
    const endDate = $('#endDate').val();

    console.log("Filter criteria:", { year, startDate, endDate }); // Log input data

    // Optional: Add validation to ensure fields are not empty
    if (!year || !startDate || !endDate) {
        console.error("Error: Missing filter criteria");
        return; // Exit if any required field is empty
    }

    // Make the AJAX request
    $.ajax({
        url: base_path + "Admin/modifyfirm/firmReport", // Ensure the correct path
        method: 'POST', // Or 'GET' if required
        data: {
            year: year,
            start_date: startDate,
            end_date: endDate
        },
        dataType: 'html', // Expect JSON response
        success: function(response) {
            console.log("AJAX Success Response:", response); // Log server response
            // Pass response data to a function to update the UI
            // updateTable(response); // Assuming updateTable is a function to update your UI
        },
        error: function(xhr, status, error) {
            console.error("AJAX Error:", error); // Log errors
            console.error("Response Text:", xhr.responseText); // Log server response text
        }
    });
}


</script>