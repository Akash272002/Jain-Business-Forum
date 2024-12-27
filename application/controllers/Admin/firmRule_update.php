<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class firmRule_update extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('FrimRule_Model');
    }	
 
	   // Method to load the edit material view with details
	   public function update($id = null) {
	
        if ($id) {
            $data['FirmRule'] = $this->FrimRule_Model->getFrimRuleById($id);
        } else {
            $data['FirmRule'] = null;
        }
		$this->load->view('common/header_view2');
		$this->load->view('adminPanle/FirmRule/update_view.php',$data);
		$this->load->view('common\footer2_view.php');
    }

	function insertFimRule(){
		date_default_timezone_set('America/New_York');
		$businessRule= $this->input->post('businessRule'); 
		$created_date= date('Y-m-d H:i:s');
			
		   $fields=array(
				'businessRule'=>$businessRule	,
				'created_date' => $created_date,
				'created_by' => 1
				);
	
	
	
				$this->FrimRule_Model->insertdata($fields);
			 echo json_encode($fields);
			}




			  // Method to update material
  public function updaeFirmRule() {
			
	$id = $this->input->post('ruleId');
	$businessRule = $this->input->post('businessRule');


	$data = array(
		'businessRule' => $businessRule
		
	);

	$this->FrimRule_Model->updaeFirmRule($id, $data);
	redirect('Admin/firmRule_update/update/' . $id); // Redirect to the updated material's edit page
}
}
?>