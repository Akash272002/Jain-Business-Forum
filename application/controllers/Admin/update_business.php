<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class update_business extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BusinessCategory_Model');
    }	
    
   // Method to load the edit material view with details
   public function update($id = null) {
	
    if ($id) {
        $data['BusinessCategory'] = $this->BusinessCategory_Model->getBusinessCatById($id);
    } else {
        $data['BusinessCategory'] = null;
    }
    $this->load->view('common/header_view2');
	$this->load->view('adminPanle/Business/businessCatUpdate.php',$data);
	$this->load->view('common\footer2_view.php');
}

function insertBusinessCategory(){
    date_default_timezone_set('America/New_York');
    $businessName= $this->input->post('businessName'); 
    $created_date= date('Y-m-d H:i:s');

       $fields=array(
            'businessName'=>$businessName,
            'created_date' => $created_date,
            'created_by' => 1
            );

            $this->BusinessCategory_Model->insertdata($fields);
         echo json_encode($fields);
        }



          // Method to update material
  public function updaeBusinessCat() {
			
	$id = $this->input->post('businessId');
	$businessName = $this->input->post('businessName');


	$data = array(
		'businessName' => $businessName
		
	);

	$this->BusinessCategory_Model->updaeBusinessCat($id, $data);
	redirect('Admin/update_business/update/' . $id); // Redirect to the updated material's edit page
}

}
?>