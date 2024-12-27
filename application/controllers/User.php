<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $this->load->view('user_form');
    }

    public function save() {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email')
        );

        $this->User_model->insert_user($data);
       
    }
}
?>
