<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JobType_update extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('JobType_Model');
    }

   // Method to load the edit material view with details
   public function update($id = null) {
	
    if ($id) {
        $data['JobType'] = $this->JobType_Model->getJObTypeById($id);
    } else {
        $data['JobType'] = null;
    }
    $this->load->view('common/header_view2');
	  $this->load->view('adminPanle/Job_Type/update_view.php',$data);
	$this->load->view('common\footer2_view.php');
}
  
  function insertJobType(){
    date_default_timezone_set('America/New_York');
    $jobtypeName = $this->input->post('jobtypeName'); 
    $created_date= date('Y-m-d H:i:s');

       $fields=array(
            'jobtypeName'=>$jobtypeName,
            'created_date' => $created_date,
            'created_by' => 1
            );

            $this->JobType_Model->insertdata($fields);
         echo json_encode($fields);
        }


          // Method to update material
  public function updaeJobType() {
			
    $id = $this->input->post('jobtypeId');
    $jobtypeName = $this->input->post('jobtypeName');
  
  
    $data = array(
      'jobtypeName' => $jobtypeName
      
    );
  
    $this->JobType_Model->updaeJobType($id, $data);
    redirect('Admin/JobType_update/update/' . $id); // Redirect to the updated material's edit page
  }
}
?>