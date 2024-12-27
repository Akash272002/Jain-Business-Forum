<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KeySkill_update extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KeySkillModel');
    }	

	   // Method to load the edit material view with details
	   public function update($id = null) {
	
        if ($id) {
            $data['keyskill'] = $this->KeySkillModel->getkeyskillById($id);
        } else {
            $data['keyskill'] = null;
        }
		$this->load->view('common/header_view2');
		$this->load->view('adminPanle/KeySkill/update_view.php',$data);
		$this->load->view('common\footer2_view.php');
    }

	    // Method to insert material
		function insertKey(){
			date_default_timezone_set('America/New_York');
			$keyName = $this->input->post('keyName'); 
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
					'keyName'=>$keyName,
					'created_date' => $created_date,
					'created_by' => 1
					);
		
		
		
					$this->KeySkillModel->insertdata($fields);
				 echo json_encode($fields);
				}
		
				public function updatekeySkill() {
			
					$id = $this->input->post('keyId');
					$keyName = $this->input->post('keyName');
				  
				  
					$data = array(
					  'keyName' => $keyName
					  
					);
				  
					$this->KeySkillModel->updatekeySkill($id, $data);
					redirect('Admin/KeySkill_update/update/' . $id); // Redirect to the updated material's edit page
				  }

}
?>