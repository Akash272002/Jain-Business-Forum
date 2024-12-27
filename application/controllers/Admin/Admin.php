<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_Model');
        $this->load->library('session');
        if (!$this->session->userdata('userId')) {
            redirect('Admin/Login/index');
        }
    }	
    public function index()
	{
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/Dashboard/dashboard_view');
	$this->load->view('common\footer2_view.php');
	}
}
?>