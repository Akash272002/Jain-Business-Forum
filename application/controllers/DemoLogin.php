

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DemoLogin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        $this->load->model('demoLogin_Model');
		
    }

	public function index()
	{
        
       $this->load->view('demoLogin_view');
	}

    public function login_validation()
    {
        $username =$this->input->post('userName');
        $password =$this->input->post('userPassword');

        $data=$this->Login_model->AdminLogin($username,$password);
        //  print_r($username);
        //  print_r($password);
        if(!empty($data))
          {
            $newdata = array(

                'username'=>$username,
                'userPassword'=>$data[0]->password,
                'userId'=>$data[0]->loginId,

                );
                // $this->session->sess_expiration = '10';
                $this->session->set_userdata($newdata);
                echo 1;

                // redirect('Login/index');


            }
            else
            {
                echo 2;
            }

    }


    function logout(){

        session_destroy();

        redirect('Admin/Admin/index');


    }
}
