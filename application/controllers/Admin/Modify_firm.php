<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modify_firm extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Firm_model');

        
    }
  
	public function create($id = null)
	{

        if ($id) {
            $data['businessregistration_master'] = $this->Firm_model->get_Firm($id);
        } else {
            $data['businessregistration_master'] = null;
        }
        


		$this->load->view('common/header_view2');
		$this->load->view('adminPanle/modify_Regestration/businessModifyForm_view.php',$data);
		$this->load->view('common\footer2_view.php');
	}


    function insert(){
        date_default_timezone_set('America/New_York');
        $firmName = $this->input->post('firmName'); 
        $farmdescription = $this->input->post('farmdescription');
        // $status = $this->input->post('status');
        $created_date= date('Y-m-d H:i:s');

           $fields=array(
                'firmName'=>$firmName,
                'farmdescription'=>$farmdescription,
                'jobcatergoryName'=>$jobcatergoryName,
                'status' => 1,
                'created_date' => $created_date,
                'created_by' => 1
                );
    
                $this->Firm_model->insertdata($fields);
             echo json_encode($fields);
            }



              // Method to update material
  public function updaedata() {
			
	$id = $this->input->post('Id');
	$firmName = $this->input->post('firmName');
    $farmdescription = $this->input->post('farmdescription');
    
	$data = array(
		'firmName' => $firmName,
		'farmdescription' => $farmdescription,
        'status' => 1,
	);

	$this->Firm_model->updaedata($id, $data);
	redirect('Admin/Modify_firm/create/' . $id); // Redirect to the updated material's edit page
}
}
?> 

