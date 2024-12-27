
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Teacher Registration</h1>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form role="form" id="Form" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="firstName1"> Full Name</label>
                                            <input class="form-control" id="FullName" type="text" placeholder="Enter your full name" name="FullName" value=""/>
                                        </div>

                                        <div class="col-md-4 form-group mb-3">
                                            <label for="firstName1"> Address</label>
                                            <input class="form-control" id="Address" type="text" placeholder="Enter your  address" name="Address" value=""/>
                                        </div>
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="date">Join Date</label>
                                            <input class="form-control" type="date" id="JoinDate" name="JoinDate" value="<?php echo date('Y-m-d');?>"/>
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="date">End Date</label>
                                            <input class="form-control" type="date" id="EndDate" name="EndDate" value=""/>
                                        </div>

                                       
                                       
                                    </div>


                                    <div class="row">

                                        <div class="col-md-2 form-group">
                                        <label for="">Qualification</label>
                                            <select class="form-control"  name="Qualification" id="Qualification">
                                                <option value="0">-None-</option>
                                                <option value="BE">BE</option>
                                                <option value="Btech">Btech</option>
                                                <option value="BSC">BSC</option>
                                                <option value="BCS">BCS</option>
                                                <option value="BCA">BCA</option>
                                                <option value="BA">BA</option>
                                                <option value="MSC">MSC</option>
                                                <option value="MCA">MCA</option>
                                                <option value="Other">other</option>
                                            </select>
                                       
                                        </div>
                                        
                                        <div class="col-md-2 form-group">
                                        <label for="">Experience</label>
                                            <select class="form-control" name="Experience" id="Experience">
                                                <option value="0">-None-</option>
                                                <option value="1">1 year</option>
                                                <option value="2">2 year</option>
                                                <option value="3">3 year</option>
                                                <option value="4">4 year</option>
                                                <option value="5">5 year</option>
                                                <option value="6">6 year</option>
                                              
                                            </select>
                                       
                                        </div>


                                        

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="date">Date of Birth</label>
                                            <input class="form-control" type="date" id="DateOB" name="DateOB" value=""/>
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="phone">Mobile No.</label>
                                            <input class="form-control" id="Mobile" type="text" maxlength="10" placeholder="Enter phone" name="Mobile" value=""/>
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
                                            <a  class="btn btn-warning text-white" href="<?=base_url()?>Teacher/index">Details</a>
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

