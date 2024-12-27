<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmpRule_update extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('employeeRule_Model');
    }	
	
	   // Method to load the edit material view with details
	   public function update($id = null) {
	
        if ($id) {
            $data['EmpRule'] = $this->employeeRule_Model->getEmpRuleById($id);
        } else {
            $data['EmpRule'] = null;
        }
		$this->load->view('common/header_view2');
		$this->load->view('adminPanle/EmployeeRule/update_view.php',$data);
		$this->load->view('common\footer2_view.php');
    }

	function insertEmpRule(){
		date_default_timezone_set('America/New_York');
		$EmployeeRule = $this->input->post('EmployeeRule'); 
		$created_date= date('Y-m-d H:i:s');
			
		 
		   $fields=array(
				'EmployeeRule'=>$EmployeeRule,
				'created_date' => $created_date,
				'created_by' => 1
				);
	
	
	
				$this->employeeRule_Model->insertdata($fields);
			 echo json_encode($fields);
			}

  // Method to update material
  public function updaeEmpRule() {
			
	$id = $this->input->post('ruleId');
	$EmployeeRule = $this->input->post('EmployeeRule');


	$data = array(
		'EmployeeRule' => $EmployeeRule
		
	);

	$this->employeeRule_Model->updaeEmpRule($id, $data);
	redirect('Admin/EmpRule_update/update/' . $id); // Redirect to the updated material's edit page
}
			
}
?>