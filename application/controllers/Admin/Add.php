<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
    }	
    public function AddCategory()
	{
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/jobCategoryAdd_view.php');
	$this->load->view('common\footer2_view.php');
	}
}
?>