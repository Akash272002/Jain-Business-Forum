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
                            <span class="text-white">Employee Details</span></span>
                    </label>

                </div>


                <div class="ms-panel-header py-2" style="display: flex; justify-content: space-between; border-bottom:none;">
    <!-- Left-aligned icons -->
    <div class="icon d-flex align-items-center">
        <i class="fa fa-file-excel-o icon_hover" aria-hidden="true" onclick="exportToExcel()" style="color: #17179e;font-size: 20px;cursor:pointer; padding-right: 10px;"></i>
        <i class="fa fa-file-pdf-o icon_hover" onclick="exportToPDF()" aria-hidden="true" style="color: red;font-size: 20px;cursor:pointer; padding-right: 10px;"></i>
        <i class="fa fa-print icon_hover" onclick="printReport()" aria-hidden="true" style="font-size: 20px;cursor:pointer;"></i>
    </div>

    <!-- Center-aligned Verify/Unverify options -->
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
    <form method="get" action="<?= base_url('Admin/modifyEmployee/modifyEmployee') ?>" style="display: flex; justify-content: flex-end; align-items: center; gap: 15px; margin: 20px 0;">

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
    <button type="submit" style="background-color: #007bff; color: white;     font-size: 20px;
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
                                <tr>
                                    <th style="width:7%">Action</th>
                                    <th>Id</th>
                                    <th>Student Name</th>
                                    <th>Mobile Number</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($verifiedData) && is_array($verifiedData)): ?>
                                <?php foreach ($verifiedData as $row): ?>
                                <tr id="row-<?php echo $row->Id; ?>">
                                    <td><a href="<?= base_url('Admin/Update_Emp/update/' . $row->Id); ?>"><i
                                                class="fas fa-eye" style="font-size: 16px;"></i></a></td>
                                    <td><?php echo $row->Id; ?></td>
                                    <td><?php echo $row->studentName; ?></td>
                                    <td><?php echo $row->mobileNo; ?></td>
                                    <td><?php echo $row->email; ?></td>
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
                                <tr>
                                    <th style="width:7%">Action</th>
                                    <th>Id</th>
                                    <th>Student Name</th>
                                    <th>Mobile Number</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($unverifiedData) && is_array($unverifiedData)): ?>
                                <?php foreach ($unverifiedData as $value): ?>
                                <tr id="row-<?php echo $value->Id; ?>">
                                    <td><a href="<?= base_url('Admin/update_emp/update/' . $value->Id); ?>"><i
                                                class="fas fa-eye" style="font-size: 16px;"></i></a></td>
                                    <td><?php echo $value->Id; ?></td>
                                    <td><?php echo $value->studentName; ?></td>
                                    <td><?php echo $value->mobileNo; ?></td>
                                    <td><?php echo $value->email; ?></td>
                                    <td><?php echo $row->created_date; ?></td>
                                </tr>
                                <?php endforeach; ?>
                                <?php else: ?>
                                <tr>
                                    <td colspan="5">No data available.</td>
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
                title: 'Verified Employee Report',
                exportOptions: {
                    modifier: { page: 'all' },
                    columns: [1, 2, 3, 4,5] // Adjust if necessary
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Verified Employee Report',
                exportOptions: {
                    modifier: { page: 'all' },
                    columns: [1, 2, 3, 4,5]
                }
            },
            {
                extend: 'print',
                title: 'Verified Employee report Jul - Aug 2024 ',
                exportOptions: {
                    modifier: { page: 'all' },
                    columns: [1, 2, 3, 4,5]
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
                title: 'Unverified Empoyee Report',
                exportOptions: {
                    modifier: { page: 'all' },
                    columns: [1, 2, 3, 4,5] // Adjust if necessary
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Unverified Empoyee Report',
                exportOptions: {
                    modifier: { page: 'all' },
                    columns: [1, 2, 3, 4,5]
                }
            },
            {
                extend: 'print',
                title: 'Unverified Empoyee Report',
                exportOptions: {
                    modifier: { page: 'all' },
                    columns: [1, 2, 3, 4,5]
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
        if ($('#tableverify').is(':visible')) {
            verifyTable.button(0).trigger(); // Export verified table
        } else {
            unverifyTable.button(0).trigger(); // Export unverified table
        }
    };

    // Unified export function for PDF
    window.exportToPDF = function() {
        if ($('#tableverify').is(':visible')) {
            verifyTable.button(1).trigger(); // Export verified table
        } else {
            unverifyTable.button(1).trigger(); // Export unverified table
        }
    };

    // Unified print function
    window.printReport = function() {
        if ($('#tableverify').is(':visible')) {
            verifyTable.button(2).trigger(); // Print verified table
        } else {
            unverifyTable.button(2).trigger(); // Print unverified table
        }
    };
});

</script>