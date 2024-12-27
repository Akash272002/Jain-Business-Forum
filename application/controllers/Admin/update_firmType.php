<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class update_firmType extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('firmType_Model');
    }	



    	   // Method to load the edit material view with details
           public function update($id = null) {
	
            if ($id) {
                $data['Firm'] = $this->firmType_Model->getFirmTypeById($id);
            } else {
                $data['Firm'] = null;
            }
            $this->load->view('common/header_view2');
            $this->load->view('adminPanle/Firm/firmTypeUpdate_view.php',$data);
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



              // Method to update material
  public function updaeFirmType() {
			
	$id = $this->input->post('businesstypeId');
	$businesstypeName = $this->input->post('businesstypeName');


	$data = array(
		'businesstypeName' => $businesstypeName
		
	);

	$this->firmType_Model->updaeFirmType($id, $data);
	redirect('Admin/update_firmType/update/' . $id); // Redirect to the updated material's edit page
}
}
?>