<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BanerDetail extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Banner_Model');
    }	
   
	public function index()
	{
		$data['alldata']= $this->Banner_Model->getallBanner();
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/Banner/bannerDetail_view.php',$data);
	$this->load->view('common\footer2_view.php');
	}
}
?>