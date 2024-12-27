<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Banner_Model');
    }	
   
	public function Add()
	{
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/Banner/banner_view.php');
	$this->load->view('common\footer2_view.php');
	}
    function insertBanner() {
        date_default_timezone_set('America/New_York');
       
        $bannerName = $this->input->post('bannerName');
        $bannerimg = $this->input->post('bannerimg');
        $created_date = date('Y-m-d H:i:s');
        $modified_date = $this->input->post('modified_date');
    
        // Configure upload
        $config['upload_path'] = './Assets/images/'; // Change this to the directory where you want to save images
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2048; // Maximum file size in KB 2048
        $config['encrypt_name'] = false; // Encrypt the file name for security
    
        $this->load->library('upload', $config);
    
        if ($this->upload->do_upload('bannerimg')) {
            $uploadData = $this->upload->data();
            $bannerimg = $uploadData['file_name']; // Get the file name
    
            $fields = array(
                'bannerName' => $bannerName,
                'bannerimg' => $bannerimg,
                'created_date' => $created_date,
                'modified_date' => $modified_date,
                'created_by' => 1
            );
    
            $this->Banner_Model->insertdata($fields);
            echo json_encode($fields);
        } else {
            // Handle errors during upload
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        }
    }
    
}
?>