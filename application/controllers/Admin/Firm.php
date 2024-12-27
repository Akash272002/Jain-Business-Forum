<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Firm extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('firmType_Model');

    }	
	public function firm()
	{

		$data['alldata']= $this->firmType_Model->getallFirmTypes();
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/Firm/firmType_view.php',$data);
	$this->load->view('common\footer2_view.php');
	}
}
?>