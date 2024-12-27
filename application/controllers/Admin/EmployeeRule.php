<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeRule extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('employeeRule_Model');
    }	
	public function Add()
	{
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/EmployeeRule/employeeRule_view.php');
	$this->load->view('common\footer2_view.php');
	}


	function insertEmpRule(){
		date_default_timezone_set('America/New_York');
		$EmployeeRule = $this->input->post('EmployeeRule'); 
		$created_date= date('Y-m-d H:i:s');
			// $studentName= $this->input->post('studentName'); 
			// $mobileNo= $this->input->post('mobileNo'); 
			// $password= $this->input->post('password'); 
			// $email= $this->input->post('email');
			// $jobdescription= $this->input->post('jobdescription');
			// $address= $this->input->post('address'); 
			// $gender= $this->input->post('gender'); 
			// $bloodgroup= $this->input->post('bloodgroup');
			// $experience= $this->input->post('experience');
		   
		  
		 
		   $fields=array(
				'EmployeeRule'=>$EmployeeRule,
				'created_date' => $created_date,
				'created_by' => 1
				);
	
	
	
				$this->employeeRule_Model->insertdata($fields);
			 echo json_encode($fields);
			}
}
?>