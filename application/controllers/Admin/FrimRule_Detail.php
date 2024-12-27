<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrimRule_Detail extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('FrimRule_Model');
    }	
 
	public function index()
	{
		$data['alldata']= $this->FrimRule_Model->getallFirmRules();
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/FirmRule/firmrule_detail_view.php',$data);
	$this->load->view('common\footer2_view.php');
	}
}
?>