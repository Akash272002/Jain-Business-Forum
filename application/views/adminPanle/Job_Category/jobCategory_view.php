<style>
.page-item.active .page-link,
.pagination-light .page-item.active .page-link {
    color: #fff;
    background-color: #155c72;
    border-color: #155c72;
    z-index: 0;
}



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
                            <span class="text-white">Job Category Details</span></span>
                    </label>

                </div>


                <div class="ms-panel-body">
                    <div class="main_row">
                    <div class="icon">
                            <i class="fa fa-file-excel-o icon_hover" onclick="exportToExcel()" style="color: #17179e;font-size: 20px;cursor:pointer"></i>
                            <i class="fa fa-file-pdf-o icon_hover" onclick="exportToPDF()" aria-hidden="true" style="color: red;font-size: 20px;padding-left: 6px;cursor:pointer"></i>
                            <i class="fa fa-print icon_hover" onclick="printReport()" aria-hidden="true" style="font-size: 20px;padding-left: 6px;cursor:pointer"></i>
                        </div>


                        <a id="create" href="<?=base_url('Admin/job_add/Add'); ?>"
                            class="btn samplebtn waves-effect waves-light"
                            style="font-size: 14px;color: #FFF;background-color: #ff0018;     float: right; "><i
                                class="fa fa-plus-square" aria-hidden="true" style="padding-right: 7px;"></i>Add New</a>


                    </div>

                    <div class="table-responsive">
                    <table id="keyskill_detailview" class="table table-bordered table-striped thead-primary w-100">
          <thead>
                                            <tr>
                                                <th>OP</th>
                                                <th>Job Category Id</th>
                                                <th>Job Category Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                          

                                        <?php 
                                            $i=0;
                                            foreach($alldata as $rw=>$value){
                                            echo '<tr role="row" class="odd">';
                                            echo '<td class="sorting_1"><a href="' . base_url("Admin/job_update/update/" . $value->jobcatergoryId ) . '"><i class="fas fa-eye" style="font-size: 15px;"></i></a>
                                              </td>';
                                            echo "<td>".$value->jobcatergoryId ."</td>";
                                            echo "<td>".$value->jobcatergoryName."</td>";
                                            echo "</tr>";                        
                                        }
                                        ?> 
                            
                                          
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

$(document).ready(function() {
    // Initialize DataTable with buttons
    var table = $('#keyskill_detailview').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Business Details',
                exportOptions: {
                    modifier: {
                        page: 'all' // Export all pages
                    },
                    columns: [1, 2]
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Business Details',
                exportOptions: {
                    modifier: {
                        page: 'all' // Export all pages
                    },
                    columns: [1, 2]
                }
            },
            {
                extend: 'print',
                title: 'Business Details',
                exportOptions: {
                    modifier: {
                        page: 'all' // Print all pages
                    },
                    columns: [1, 2]
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
