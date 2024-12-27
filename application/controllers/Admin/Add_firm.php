<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_firm extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('firmType_Model');
    }	
    public function Add()
	{
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/Firm/firm_add_view.php');
	$this->load->view('common\footer2_view.php');
	}

    function insertFimTypes(){
        date_default_timezone_set('America/New_York');
        $businesstypeName= $this->input->post('businesstypeName'); 
        $created_date= date('Y-m-d H:i:s');
  
           $fields=array(
                'businesstypeName'=>$businesstypeName,
                'created_date' => $created_date,
                'created_by' => 1
                );
    
                $this->firmType_Model->insertdata($fields);
             echo json_encode($fields);
            }
}
?>