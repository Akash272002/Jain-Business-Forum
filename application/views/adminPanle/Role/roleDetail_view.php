<style>

 main.body-content{
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
                            <span class="text-white">Role Details</span></span>
                    </label>

                </div>


                <div class="ms-panel-body">
                    <div class="main_row">
                        <div class="icon">
                            <i class="fa fa-file-excel-o icon_hover" aria-hidden="true"
                                onclick="exportToExcel('role_detailview', 'charges exel')"
                                style="color: #17179e;font-size: 20px;cursor:pointer"></i>

                            <i class="fa fa-file-pdf-o icon_hover" onclick="jQuery('#role_detailview').print()"
                                aria-hidden="true"
                                style="color: red;font-size: 20px;padding-left: 6px;cursor:pointer"></i>

                            <i class="fa fa-print icon_hover" onclick="jQuery('#role_detailview').print()"
                                aria-hidden="true" style="font-size: 20px;padding-left: 6px;cursor:pointer"></i>
                        </div>

                        <a id="create" href="<?php echo base_url('Admin/Rulemaster/role'); ?>"
                            class="btn samplebtn waves-effect waves-light"
                            style="font-size: 14px;color: #FFF;background-color: #ff0018;     float: right; "><i
                                class="fa fa-plus-square" aria-hidden="true" style="padding-right: 7px;"></i>Add New</a>


                    </div>

                    <div class="table-responsive">
                    <table id="keyskill_detailview" class="table table-bordered table-striped thead-primary w-100">
          <thead>
                                            <tr>
                                                <th>OP</th>
                                                <th>Role Id</th>
                                                <th>Role Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                          

                                        <?php 
                                            $i=0;
                                            foreach($alldata as $rw=>$value){
                                            echo '<tr role="row" class="odd">';
                                            echo '<td class="sorting_1"><a href="' . base_url("Admin/roleUpdate/update/" . $value->roleId ) . '"><i class="fas fa-eye" style="font-size: 15px;"></i></a>
                                              </td>';
                                            echo "<td>".$value->roleId."</td>";
                                            echo "<td>".$value->roleName."</td>";
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


    $('#keyskill_detailview').dataTable({});


});
</script>