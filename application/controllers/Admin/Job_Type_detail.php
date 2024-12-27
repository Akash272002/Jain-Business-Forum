<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_Type_detail extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('JobType_Model');
    }
    public function index()
	{
    $data['alldata']= $this->JobType_Model->getallJobTypes();
		$this->load->view('common/header_view2');
	  $this->load->view('adminPanle/Job_Type/job_type_detail_view.php',$data);
	$this->load->view('common\footer2_view.php');
	}
}
?>