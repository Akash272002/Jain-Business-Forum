<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class job_add extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jobCategory_Model');
    }	
    public function Add()
	{
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/Job_Category/jobCategoryAdd_view.php');
	$this->load->view('common\footer2_view.php');
	}
    function insertJobCategory(){
        date_default_timezone_set('America/New_York');
        $jobcatergoryName = $this->input->post('jobcatergoryName'); 
        $created_date= date('Y-m-d H:i:s');

           $fields=array(
                'jobcatergoryName'=>$jobcatergoryName,
                'created_date' => $created_date,
                'created_by' => 1
                );
    
                $this->jobCategory_Model->insertdata($fields);
             echo json_encode($fields);
            }
}
?>