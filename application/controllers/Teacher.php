<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
    }
	
	
	public function index()
	{
 
        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
		$this->load->view('teacher/TeacherDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$this->load->view('common/header_view');
		$this->load->view('teacher/Teacher_view');
		$this->load->view('common/footer_view');
	

	}

  
	
	
}

