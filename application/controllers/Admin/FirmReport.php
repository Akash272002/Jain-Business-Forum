<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FirmReport extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
    }	
    public function firmReport()
	{
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle\Report\firmReport.php');
	$this->load->view('common\footer2_view.php');
	}
}
?>