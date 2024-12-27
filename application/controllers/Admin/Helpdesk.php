<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helpdesk extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('helpDesk_Model');
    }	
    public function helpDesk()
	{
        $data['alldata']= $this->helpDesk_Model->getallHelps();
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/Helpdesk/helpdesk_view.php',$data);
	$this->load->view('common\footer2_view.php');
	}

    public function update_status() {
        // Get the helpId and is_active status from the AJAX request
        $helpId = $this->input->post('helpId');
        $is_active = $this->input->post('is_active');
    
        // Load the model and update the status in the database
        $this->load->model('helpDesk_Model');
        $this->helpDesk_Model->update_status($helpId, $is_active);
    
        // Send a success response
        echo json_encode(['status' => 'success']);
    }
    
}
?>