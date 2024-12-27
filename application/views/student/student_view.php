
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Student Registration</h1>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form role="form" id="Form" action="" method="post">
                                    <div class="row">
                                    <input class="form-control" id="Id" type="text" placeholder="Enter your ID" name="Id"
                                     value="<?php if(!empty($data)) echo $data[0]->Id; ?>" type="text"/>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="firstName1">Full Name</label>
                                            <input class="form-control" id="FullName" type="text" placeholder="Enter your full name" name="FullName"
                                             value="<?php if(!empty($data)) echo $data[0]->FullName; ?>"/>
                                        </div>

                                        <div class="col-md-4 form-group mb-3">
                                            <label for="firstName1"> Address</label>
                                            <input class="form-control" id="Address" type="text" placeholder="Enter your  address" name="Address"
                                             value="<?php if(!empty($data)) echo $data[0]->Address; ?>"/>
                                        </div>
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="phone">Mobile No.</label>
                                            <input class="form-control" id="Mobile" type="text" maxlength="10" placeholder="Enter phone" name="Mobile"
                                             value="<?php if(!empty($data)) echo $data[0]->Mobile; ?>"/>
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="email">Enter your email:</label>
                                            <input class="form-control" type="email" placeholder="Enter email" id="Email" name="Email" 
                                            value="<?php if(!empty($data)) echo $data[0]->Email; ?>">
                                        </div>

                                       
                                       
                                    </div>


                                    <div class="row">

                                        <div class="col-md-2 form-group">
                                        <label for="">Std</label>
                                            <select class="form-control"  name="Std" id="Std">
                                                <option value="0">-None-</option>
                                                <option value="FY">FY</option>
                                                <option value="SY">SY</option>
                                                <option value="TY">TY</option>   
                                            </select>
                                       </div>
                                        
                                        <div class="col-md-2 form-group">
                                        <label for="">Subject</label>
                                            <select class="form-control" name="Subject" id="Subject">
                                                <option value="0">-None-</option>
                                                <option value="C">C</option>
                                                <option value="C++">C++</option>
                                                <option value="Java">Java</option>
                                                <option value="Python">Python</option>
                                                <option value="PHP">PHP</option>
                                                <option value="C#">C#</option>
                                            </select>
                                       </div>


                                        

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="date">Date of Birth</label>
                                            <input class="form-control" type="date" id="DOB" name="DOB"
                                             value="<?php if(!empty($data)) echo $data[0]->DOB; ?>"/>
                                        </div>

                                        

                                        <div class="col-md-2 form-group">
                                            <label for="">Gender</label><br>
                                            <label for="">male</label>&nbsp;
                                            <input id="Gender" name="Gender" value="Male"  type="radio">&nbsp;&nbsp;&nbsp;

                                            <label for="">female</label>&nbsp;
                                            <input id="Gender" name="Gender" value="Female"   type="radio">
                                          
                                        </div>
                                    </div>

                                    
                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary" type="button" name="btn_save" id="btn_save">Submit</button>
                                            <a  class="btn btn-warning text-white" href="<?=base_url()?>Student/index">Details</a>
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

<script  src="<?php echo base_url();?>Assets/js/jquery.min.js"></script>           

<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>       

<script src="<?php echo base_url();?>Assets/js/CreateJs/Student.js"></script>  

 
