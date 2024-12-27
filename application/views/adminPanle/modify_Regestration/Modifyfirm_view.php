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
                            <span class="text-white">Business Details</span></span>
                    </label>

                </div>


                <!-- <div class="ms-panel-header py-2" style="display: flex; justify-content: space-between; border-bottom:none;">
 
    <div class="icon d-flex align-items-center">
        <i class="fa fa-file-excel-o icon_hover" aria-hidden="true" onclick="exportToExcel()" style="color: #17179e;font-size: 20px;cursor:pointer; padding-right: 10px;"></i>
        <i class="fa fa-file-pdf-o icon_hover" onclick="exportToPDF()" aria-hidden="true" style="color: red;font-size: 20px;cursor:pointer; padding-right: 10px;"></i>
        <i class="fa fa-print icon_hover" onclick="printReport()" aria-hidden="true" style="font-size: 20px;cursor:pointer;"></i>
    </div>

 
    <div class="d-flex justify-content-center w-100">
        <form class="d-flex">
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
</div> -->
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
    <!-- Filter Form -->
<form method="get" action="<?= base_url('Admin/Modifyfirm/index') ?>" style="display: flex; justify-content: flex-end; align-items: center; gap: 15px; margin: 20px 0;">

<!-- Start Date -->
<div style="display: flex; flex-direction: column; align-items: flex-start;">
    <label for="start_date" style="font-weight: bold;">Start Date:</label>
    <input type="date" name="start_date" id="start_date" style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;">
</div>

<!-- End Date -->
<div style="display: flex; flex-direction: column; align-items: flex-start;">
    <label for="end_date" style="font-weight: bold;">End Date:</label>
    <input type="date" name="end_date" id="end_date" style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;">
</div>

<!-- Year -->
<div style="display: flex; flex-direction: column; align-items: flex-start;">
    <label for="year" style="font-weight: bold;">Year:</label>
    <select name="year" id="year" style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;">
        <option value="">Select Year</option>
        <?php for ($i = 2020; $i <= date('Y'); $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
        <?php endfor; ?>
    </select>
</div>

<!-- Filter Button -->
<div>
    <button type="submit" style="background-color: #007bff; color: white;    font-size: 20px;
    padding: 5px 20px; margin-top: 26px;
    margin-right: 12px; border: none; border-radius: 4px; cursor: pointer;">
        Filter
    </button>
</div>
</form>


</div>


                    <div class="table-responsive" id="tableverify">
                        <table id="business_detailview" class="table table-bordered table-striped thead-primary w-100">
                            <thead>
                                <tr id="rowId">
                                    <th style="width:7%">Action</th>
                                    <th>Id</th>
                                    <th>Business Name</th>
                                    <th>Business Category</th>
                                    <th>Business Type</th>
                                    <th>Mobile Number</th>
                                    <th>Date</th> 
                                </tr>
                            </thead>
                            <!-- https://www.adminjainbusiness.padmamanisilver.com/Businesslist/update/56 -->
                            <tbody>
                                <!-- <tr>
                                    <td><a href="<?=base_url('Admin/Modify_firm/create'); ?>"><i class="fas fa-eye"
                                                style="font-size: 16px;"></i></a> -->
                                                <?php if (isset($verifiedData) && is_array($verifiedData)): ?>
    <?php foreach ($verifiedData as $row): ?>
        <tr id="row-<?php echo $row->Id; ?>">
            <td><a href="<?= base_url('Admin/Modify_firm/create/' . $row->Id); ?>"><i class="fas fa-eye" style="font-size: 16px;"></i></a></td>
            <td><?php echo $row->Id; ?></td>
            <td><?php echo $row->firmName; ?></td>
            <td><?php echo $row->firmCategory; ?></td>
            <td><?php echo $row->firmType; ?></td>
            <td><?php echo $row->mobileNo; ?></td>
            <td><?php echo $row->created_date; ?></td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="6">No verified data available.</td>
    </tr>
<?php endif; ?>


                            </tbody>

                        </table>
                    </div>






                    <div class="table-responsive" id="tableunverify">
                        <table id="business_detailviewunverify"
                            class="table table-bordered table-striped thead-primary w-100">
                            <thead>
                                <tr id="rowId">
                                    <th style="width:7%">Action</th>
                                    <th>Id</th>
                                    <th>Business Name</th>
                                    <th>Business Category</th>
                                    <th>Business Type</th>
                                    <th>Mobile Number</th> 
                                    <th>Date</th> 
                                </tr>
                            </thead>
                            <tbody id="unverified-table-body">

                                <!-- <?php 
                                            $i=0;
                                            foreach($alldata as $rw=>$value){
  
                                            echo "<tr>";
                                            echo "<td><a href='" . base_url("Admin/Modify_firm/create/" . $value->Id) . "'><i class='fas fa-eye' style='font-size: 16px;'></i></a></td>";
                            
                                            echo "<td>".$value->Id."</td>";
                                            echo "<td>".$value->firmName."</td>";
                                            echo "<td>".$value->firmCategory."</td>";
                                            echo "<td>".$value->firmType."</td>";
                                            echo "<td>".$value->mobileNo."</td>";
                                            echo "<td>".$value->Da."</td>";
                                            $i++;
                                        
                                            echo "</tr>";                        
                                        }
                                        ?> -->
                               <?php if (isset($unverifiedData) && is_array($unverifiedData)): ?>
                <?php foreach ($unverifiedData as $row): ?>
                    <tr id="row-<?php echo $row->Id; ?>">
                        <td><a href="<?= base_url('Admin/Modify_firm/create/' . $row->Id); ?>"><i class="fas fa-eye" style="font-size: 16px;"></i></a></td>
                        <td><?php echo $row->Id; ?></td>
                        <td><?php echo $row->firmName; ?></td>
                        <td><?php echo $row->firmCategory; ?></td>
                        <td><?php echo $row->firmType; ?></td>
                        <td><?php echo $row->mobileNo; ?></td>
                        <td><?php echo $row->created_date; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No unverified data available.</td>
                </tr>
            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>web_resources/dist/js/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>


<script>
// $(document).ready(function() {
//     $('#business_detailview').dataTable();
// });
// $(document).ready(function() {
//     $('#business_detailviewunverify').dataTable();
// });

$(document).ready(function() {
    // Initially hide both tables
    $('#tableverify').hide();
    // $('#tableunverify').hide();

    // Listen for radio button change event
    $('#statusv').click(function() {
        var selectedValue = $('#statusv').val();

        // alert(selectedValue);
        $('#tableverify').show();
        $('#tableunverify').hide();
    });

    $('#statusu').click(function() {
        var statusu = $('#statusu').val();

        // alert(statusu);
        $('#tableverify').hide();
        $('#tableunverify').show();
    });
});
</script>

<script>

$(document).ready(function() {
    // Initialize Verified DataTable
    var verifyTable = $('#business_detailview').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Verified Business Details',
                exportOptions: {
                    modifier: { page: 'all' },
                    columns: [1, 2,3,4,5,6] // Adjust these indices as needed
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Verified Business Details',
                exportOptions: {
                    modifier: { page: 'all' },
                    columns: [1, 2,3,4,5,6]
                }
            },
            {
                extend: 'print',
                title: 'Verified Business Report ',
                exportOptions: {
                    modifier: { page: 'all' },
                    columns: [1, 2,3,4,5,6]
                },
                customize: function(win) {
                    $(win.document.body).css('text-align', 'center');
                    $(win.document.body).find('thead').addClass('compact').css({
                        'margin': '0 auto',
                        'text-align': 'center'
                    });
                    $(win.document.body).find('h1').css({
                        'text-align': 'center',
                        'font-size': '18pt',
                         'margin-bottom':'50px'
                    });
                }
            }
        ]
    });

    // Initialize Unverified DataTable
    var unverifyTable = $('#business_detailviewunverify').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Unverified Business Details',
                exportOptions: {
                    modifier: { page: 'all' },
                    columns: [1, 2,3,4,5,6] // Adjust these indices as needed
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Unverified Business Report',
                exportOptions: {
                    modifier: { page: 'all' },
                    columns: [1, 2,3,4,5,6]
                }
            },
            {
                extend: 'print',
                title: 'Unverified Business Report',
                exportOptions: {
                    modifier: { page: 'all' },
                    columns: [1, 2,3,4,5,6]
                },
                customize: function(win) {
                    $(win.document.body).css('text-align', 'center');
                    $(win.document.body).find('thead').addClass('compact').css({
                        'margin': '0 auto',
                        'text-align': 'center'
                    });
                    $(win.document.body).find('h1').css({
                        'text-align': 'center',
                        'font-size': '18pt',
                         'margin-bottom':'50px'
                    });
                }
            }
        ]
    });

    // Unified export function for Excel
    window.exportToExcel = function() {
        if ($('#business_detailview').is(':visible')) {
            verifyTable.button(0).trigger(); // Export verified table
        } else {
            unverifyTable.button(0).trigger(); // Export unverified table
        }
    };

    // Unified export function for PDF
    window.exportToPDF = function() {
        if ($('#business_detailview').is(':visible')) {
            verifyTable.button(1).trigger(); // Export verified table
        } else {
            unverifyTable.button(1).trigger(); // Export unverified table
        }
    };

    // Unified print function
    window.printReport = function() {
        if ($('#business_detailview').is(':visible')) {
            verifyTable.button(2).trigger(); // Print verified table
        } else {
            unverifyTable.button(2).trigger(); // Print unverified table
        }
    };
});

</script>