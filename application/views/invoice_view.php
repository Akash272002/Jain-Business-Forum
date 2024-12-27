<!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="breadcrumb">

        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <h1>Invoice Information</h1>


                        <hr>
                        <form role="form" id="Form" action="" method="post">
                            <div class="row">

                                <div class="col-md-1 form-group mb-3">
                                    <label for="firstName1">Id*</label>
                                    <input class="form-control" id="Id" type="number" placeholder="Id" name="Id"
                                        value="" />
                                </div>
                                <div class="col-md-4 col-10 form-group mb-3">
                                    <label for="">Customer Name*</label>
                                    <select class="form-control" name="Customer_Name" id="Customer_Name">
                                        <option value="0">---Select Customer---</option>
                                        <?php foreach($customerN as $value)
                                        {
                                            // $selected="";
                                            // if(!empty($data[0]->FkStockId)){

                                            //     if($value->StockID == $data[0]->FkStockId) {
                                            //       $selected="selected=selected";
                                            //     } 
                                            // }  
                                                            
                                            echo '<option value="'.$value->Id.'" '.$selected.'>'.$value->item.'</option>';
                                        }
                                        ?> 
                                    </select>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="date">Date*</label>
                                    <input class="form-control" type="date" id="Date" name="Date"
                                        value="<?php echo date('Y-m-d');?>" />
                                </div>
                                <div class="mt-3">
                                    <h4>Customer Details</h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 form-group mb-3">
                                    <label for="phone">Barcode</label>
                                    <input class="form-control" id="Barcode" type="number" maxlength="10"
                                        placeholder="Total Amount" name="Barcode" value="" />
                                </div>
                                <div class="col-md-1 form-group mb-3">
                                    <label for="firstName1">Id*</label>
                                    <input class="form-control" id="Id2" type="number" placeholder="Id" name="Id2"
                                        value="" />
                                </div>
                                <div class="col-md-3 col-10 form-group mb-3">
                                    <label for="">Product Name*</label>
                                    <select class="form-control" name="Product_Name" id="Product_Name">
                                        <option value="0">---Select Product---</option>
                                        <?php foreach($product as $value)
                                        {
                                            // $selected="";
                                            // if(!empty($data[0]->FkStockId)){

                                            //     if($value->StockID == $data[0]->FkStockId) {
                                            //       $selected="selected=selected";
                                            //     } 
                                            // }  
                                                            
                                            echo '<option value="'.$value->Id.'" '.$selected.'>'.$value->item2.'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-2 col-10 form-group mb-3">
                                    <label for="">Unit</label>
                                    <select class="form-control" name="Unit" id="Unit">
                                        <option value="0">---Select---</option>
                                        <?php foreach($unit as $value)
                                        {
                                            // $selected="";
                                            // if(!empty($data[0]->FkStockId)){

                                            //     if($value->StockID == $data[0]->FkStockId) {
                                            //       $selected="selected=selected";
                                            //     } 
                                            // }  
                                                            
                                            echo '<option value="'.$value->Id.'" '.$selected.'>'.$value->item3.'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-2 col-10 form-group mb-3">
                                    <label for="">Batch* <a href="">Batch History</a></label>
                                    <select class="form-control" name="Batch" id="Batch">
                                        <option value="0">---Select---</option>
                                        <?php foreach($batch as $value)
                                        {
                                            // $selected="";
                                            // if(!empty($data[0]->FkStockId)){

                                            //     if($value->StockID == $data[0]->FkStockId) {
                                            //       $selected="selected=selected";
                                            //     } 
                                            // }  
                                                            
                                            echo '<option value="'.$value->Id.'" '.$selected.'>'.$value->item4.'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="date">Expiry Date*</label>
                                    <input class="form-control" type="date" id="Expiry_Date" name="Expiry_Date"
                                        value="<?php echo date('Y-m-d');?>" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-1 form-group mb-3">
                                    <label for="phone">Rate*</label>
                                    <input class="form-control" id="Rate" type="number" maxlength="10"
                                        placeholder="00.00" name="Rate" value="" />
                                </div>
                                <div class="col-md-1 form-group mb-3">
                                    <label for="phone">Qty*</label>
                                    <input class="form-control" id="Qty" type="number" maxlength="10"
                                        placeholder="00.00" name="Qty" value="" />
                                </div>
                                <div class="col-md-1 form-group mb-3">
                                    <label for="phone">Free Qty</label>
                                    <input class="form-control" id="Free_Qty" type="number" maxlength="10"
                                        placeholder="00.00" name="Free_Qty" value="" />
                                </div>
                                <div class="col-md-1 form-group mb-3">
                                    <label for="phone">Amount</label>
                                    <input class="form-control" id="Amount" type="number" maxlength="10"
                                        placeholder="00.00" name="Amount" value="" />
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="phone">Total Amount</label>
                                    <input class="form-control" id=" " type="number" maxlength="10" placeholder="00.00"
                                        name="Total_Amount" value="" />
                                </div>
                                <div class="mt-3">
                                    <h4>GST & Discount</h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary" type="button" name="btn_save"
                                        id="btn_save">Submit</button>
                                    <a class="btn btn-warning text-white"
                                        href="<?=base_url()?>Invoice/index">Details</a>
                                    <!-- <button class="btn btn-warning text-white" type="button" name="cancel" id="cancel">Cancel</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/StudentCreate.js"></script> -->

        <script src="<?php echo base_url();?>Assets/js/jquery.min.js"></script>

        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script>
        var base_path = "<?php echo base_url();?>";
        var a = false;

        $(document).ready(function() {
            $("#btn_save").click(function() {
                // if (!a) {
                saveperform();
                // }
            });
        });

        function saveperform() {
            var Id = $('#Id').val();
            var Customer_Name = $("#Customer_Name").val();
            var Date = $("#Date").val();
            var Barcode = $('#Barcode').val();
            var Id2 = $('#Id2').val();
            var Product_Name = $('#Product_Name').val();
            var Unit = $('#Unit').val();
            var Batch = $('#Batch').val();
            var Expiry_Date = $('#Expiry_Date').val();
            var Rate = $('#Rate').val();
            var Qty = $('#Qty').val();
            var Free_Qty = $('#Free_Qty').val();
            var Amount = $('#Amount').val();
            var Total_Amount = $('#Total_Amount').val();



            // Check if no gender is selected

            // Check if any of the required fields are empty or haven't been selected
            if (Id === "" || Customer_Name === "" || Date == "0" || Barcode === "" || Id2 === "0" ||
                Product_Name === "0" || Unit === "0" || Batch === "0" || Expiry_Date === "" || Rate === "" || Qty ===
                "" || Free_Qty === "" || Amount === "" || Total_Amount === "") {
                Swal.fire(
                    'Opps!',
                    'Please Enter Required Fields!',
                    'error'
                );
            } else {
                a = true;

                $.ajax({
                    url: base_path + "Invoice/insertInvoice",
                    type: "POST",
                    data: $('#Form').serialize(),
                    beforeSend: function() {
                        $('#btn_save').prop('disabled', true);
                        $('#btn_save').html('Loading');
                    },
                    success: function(data) {
                        $('#btn_save').prop('disabled', false);
                        $('#btn_save').html('Save');
                        $("#Form").trigger("reset");

                        Swal.fire(
                            'Good job!',
                            'Data Submitted Successfully!',
                            'success'
                        );

                        a = false;
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        // Handle errors here
                        console.error("Error:", errorThrown);
                        Swal.fire(
                            'Error!',
                            'An error occurred during submission. Please try again.',
                            'error'
                        );
                    }
                });
            }
        }
        </script>