<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmpRule_detail extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('employeeRule_Model');
    }	
	public function index()
	{
		$data['alldata']= $this->employeeRule_Model->getallEmpRules();
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/EmployeeRule/EmpRuleDetail_view.php',$data);
	$this->load->view('common\footer2_view.php');
	}
}
?>