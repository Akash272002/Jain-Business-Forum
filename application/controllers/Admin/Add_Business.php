<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_Business extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BusinessCategory_Model');
    }	
    public function add()
	{
        $data['alldata']= $this->BusinessCategory_Model->getallBusinessCategory();
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/Business/businessCatAdd_view.php',$data);
	$this->load->view('common\footer2_view.php') ;
	}
}
?>