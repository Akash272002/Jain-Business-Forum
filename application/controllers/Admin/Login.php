<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Login_Model');
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('adminPanle/Login/adminLoginPage_view.php');
    }

    public function login_validation() {
        $username = $this->input->post('userName');
        $password = $this->input->post('password');
    
        $data = $this->Login_Model->AdminLogin($username, $password);

        if ($data !== false) {
            $newdata = array(
                'userName' => $data->userName,
                'userId' => $data->userId,
            );
            $this->session->set_userdata($newdata);
            echo json_encode(array('status' => 1)); 
        } else {
            echo json_encode(array('status' => 2)); 
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('Admin/Login/index');
    }
}
?>
