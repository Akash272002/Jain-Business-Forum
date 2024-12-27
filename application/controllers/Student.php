<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
    }
	
	
	public function index()
	{
        
        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
        $this->load->view('student/studentDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$this->load->view('common/header_view');
		$this->load->view('student/student_view');
		$this->load->view('common/footer_view');
	

	}

    
}