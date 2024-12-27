<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BannerUpdate extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Banner_Model');
    }   
   
    // Method to load the edit material view with details
    public function update($id = null) {
        if ($id) {
            $data['Banner'] = $this->Banner_Model->getBannerById($id);
        } else {
            $data['Banner'] = null;
        }
        $this->load->view('common/header_view2');
        $this->load->view('adminPanle/Banner/bannerUpdate_view.php', $data);
        $this->load->view('common/footer2_view.php');
    }

    // Method to insert new banner
    function insertBanner() {
        date_default_timezone_set('America/New_York');
       
        $bannerName = $this->input->post('bannerName');
        $created_date = date('Y-m-d H:i:s');
        $modified_date = $this->input->post('modified_date');

        // Configure upload
        $config['upload_path'] = './Assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2048; // Maximum file size in KB
        $config['encrypt_name'] = false; // Set to false to retain original file name
    
        $this->load->library('upload', $config);
    
        if ($this->upload->do_upload('bannerimg')) {
            $uploadData = $this->upload->data();
            $bannerimg = $uploadData['file_name'];

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

    // Method to update banner
    public function updaeBanner() {
        $id = $this->input->post('bannerId');
        $bannerName = $this->input->post('bannerName');
        $bannerimg = $this->input->post('bannerimg');
        $hidden_photo = $this->input->post('hidden_photo');
        
        // Determine which image to use
        if (!empty($_FILES['bannerimg']['name'])) {
            // If a new image is uploaded
            $config['upload_path'] = './Assets/images/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['encrypt_name'] = false;
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('bannerimg')) {
                $uploadData = $this->upload->data();
                $bannerimg = $uploadData['file_name'];
            } else {
                // Handle error during upload
                echo json_encode(array('error' => $this->upload->display_errors()));
                return;
            }
        } else {
            // If no new image is uploaded, use the existing one
            $bannerimg = $hidden_photo;
        }
    
        $data = array(
            'bannerName' => $bannerName,
            'bannerimg' => $bannerimg
        );
    
        // Check if ID exists to update or insert
        if ($id) {
            $this->Banner_Model->updaeBanner($id, $data);
        } else {
            $this->Banner_Model->insertdata($data);
        }
    
        redirect('Admin/BannerUpdate/update/' . $id);
    }
    
}

?>