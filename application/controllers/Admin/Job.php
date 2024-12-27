<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jobCategory_Model');
    }	
    public function index()
	{
        $data['alldata']= $this->jobCategory_Model->getallJobCategories();
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/Job_Category/jobCategory_view.php',$data);
	$this->load->view('common\footer2_view.php');
	}
}
?>