<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JobType extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('JobType_Model');
    }	
    public function add()
	{
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/Job_Type/jobType_view.php');
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
}
?>