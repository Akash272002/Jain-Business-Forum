<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BusinessCategory_Model');
    }
    public function business()
	{
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle//Business/businessCatagory_view.php');
	$this->load->view('common\footer2_view.php');
	}

    
    function insertBusinessCategory(){
        date_default_timezone_set('America/New_York');
        $businessName= $this->input->post('businessName'); 
        $created_date= date('Y-m-d H:i:s');
  
           $fields=array(
                'businessName'=>$businessName,
                'created_date' => $created_date,
                'created_by' => 1
                );
    
                $this->BusinessCategory_Model->insertdata($fields);
             echo json_encode($fields);
            }
}
?>