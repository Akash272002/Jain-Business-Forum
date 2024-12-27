<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KeySkill_Detail extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KeySkillModel');
    }	
	public function index()
	{
		$data['alldata']= $this->KeySkillModel->getallKeyskill();
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/KeySkill/keySkill_detail_view.php',$data);
	$this->load->view('common\footer2_view.php');
	}
}
?>