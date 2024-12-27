<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_Emp extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_update_model'); 
    }

    public function update($id = null)
    {

        if ($id) {
            $data['studentregistration_master'] = $this->Student_update_model->get_student($id);
        } else {
            $data['studentregistration_master'] = null;
        }
        $this->load->view('common/header_view2');
        $this->load->view('adminPanle/modify_Regestration/employeeModifyForm_view.php',$data);
        $this->load->view('common\footer2_view.php');
    }
    function insert(){
        date_default_timezone_set('America/New_York');
        $password = $this->input->post('password'); 
        $created_date= date('Y-m-d H:i:s');

           $fields=array(
                'password'=>$password,
                'status' => 1,
                'created_date' => $created_date,
                'created_by' => 1
                );
    
                $this->Student_update_model->insertdata($fields);
             echo json_encode($fields);
            }



              // Method to update material
  public function updateProfile() {
			
	$id = $this->input->post('Id');
	$password = $this->input->post('password');    
	$data = array(
		'password' => $password,
        'status' => 1,
	);

	$this->Student_update_model->updateProfile($id, $data);
	redirect('Admin/Update_Emp/update/' . $id); // Redirect to the updated material's edit page
}
}
?>
 



	
	