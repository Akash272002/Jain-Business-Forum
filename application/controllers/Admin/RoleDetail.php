<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoleDetail extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('roleMaster_Model');
    }	
    public function index()
	{
        $data['alldata']= $this->roleMaster_Model->getallRoleMater();
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/Role/roleDetail_view.php',$data);
	$this->load->view('common\footer2_view.php');
	}
}
?>