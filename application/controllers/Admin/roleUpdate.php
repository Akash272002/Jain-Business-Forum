<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class roleUpdate extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('roleMaster_Model');
    }	
   

    public function update($id = null) {
	
        if ($id) {
            $data['role'] = $this->roleMaster_Model->getRoleById($id);
        } else {
            $data['role'] = null;
        }
        $this->load->view('common/header_view2');
        $this->load->view('adminPanle/Role/updateRole_view.php',$data);
        $this->load->view('common\footer2_view.php');
    }

	    // Method to insert material
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
	
	    // Method to update material
		public function updateRole() {
			
			$id = $this->input->post('roleId');
			$roleName = $this->input->post('roleName');
		
	
			$data = array(
				'roleName' => $roleName
				
			);
	
			$this->roleMaster_Model->updateRole($id, $data);
			redirect('Admin/roleUpdate/update/' . $id); // Redirect to the updated material's edit page
		}

}
?>