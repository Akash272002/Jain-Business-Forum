<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Invoice_model');
        
    }
	
	
	public function index()
	{
 
        // echo "<pre>";
        // print_r($data);
        $data['alldata']=$this->Invoice_model->getallinvoice();


		$this->load->view('common/header_view');
		$this->load->view('Enquiry/Invoice_detailedview',$data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
        $data['customerN']=$this->Invoice_model->getallcustomer();
        $data['product']=$this->Invoice_model->getallproduct();
        $data['unit']=$this->Invoice_model->getallunit();
        $data['batch']=$this->Invoice_model->getallbatch();

		$this->load->view('common/header_view');
		$this->load->view('Enquiry/Invoice_view',$data);
		$this->load->view('common/footer_view');
	

	}

	function insertInvoice(){
        $Id= $this->input->post('Id'); 
        $Customer_Name= $this->input->post('Customer_Name'); 
        $Date= $this->input->post('Date'); 
        $Barcode= $this->input->post('Barcode'); 
        $Id2= $this->input->post('Id2');
        $Product_Name= $this->input->post('Product_Name');
        $Unit= $this->input->post('Unit'); 
        $Batch= $this->input->post('Batch'); 
        $Expiry_Date= $this->input->post('Expiry_Date');
        $Rate= $this->input->post('Rate');
        $Qty= $this->input->post('Qty');
        $Free_Qty= $this->input->post('Free_Qty');
        $Amount= $this->input->post('Amount');
        $Total_Amount= $this->input->post('Total_Amount');
       
      
     
       $fields=array('Id'=>$Id,
                      'Customer_Name'=>$Customer_Name,
                      'Date'=>$Date,
                      'Barcode'=>$Barcode,
                      'Id2'=>$Id2,
                      'Product_Name'=>$Product_Name,
                      'Unit'=>$Unit,
                      'Batch'=>$Batch,
                      'Expiry_Date'=> $Expiry_Date,
                      'Rate'=> $Rate,
                      'Qty'=> $Qty,
                      'Free_Qty'=> $Free_Qty,
                      'Amount'=> $Amount,
                      'Total_Amount'=> $Total_Amount


                     
                      
        //  'created_date'=>date('Y-m-d H:i:s'),
        //      'created_by'=>1
            );
            $this->Invoice_model->insertdata($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   } 
}