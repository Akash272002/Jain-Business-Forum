<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rulemaster extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('roleMaster_Model');
    }	
    public function role()
	{
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/Role/ruleMasterRole_view.php');
	$this->load->view('common\footer2_view.php');
	}

    
function insertruleMaster(){
    date_default_timezone_set('America/New_York');
	$roleName = $this->input->post('roleName'); 
    $created_date= date('Y-m-d H:i:s');

       $fields=array(
            'roleName'=>$roleName,
            'created_date' => $created_date,
            'created_by' => 1
            );



            $this->roleMaster_Model->insertdata($fields);
         echo json_encode($fields);
        }
}
?>