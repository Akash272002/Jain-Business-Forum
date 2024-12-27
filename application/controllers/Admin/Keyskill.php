 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keyskill extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('KeySkillModel');
        
    }	
	public function Add()
	{
		
	$this->load->view('common/header_view2');
	$this->load->view('adminPanle/KeySkill/keySkill_view.php');
	$this->load->view('common/footer2_view.php');
	}

 

function insertKey(){
    date_default_timezone_set('America/New_York');
	$keyName = $this->input->post('keyName'); 
    $created_date= date('Y-m-d H:i:s');
        // $studentName= $this->input->post('studentName'); 
        // $mobileNo= $this->input->post('mobileNo'); 
        // $password= $this->input->post('password'); 
        // $email= $this->input->post('email');
        // $jobdescription= $this->input->post('jobdescription');
        // $address= $this->input->post('address'); 
        // $gender= $this->input->post('gender'); 
        // $bloodgroup= $this->input->post('bloodgroup');
        // $experience= $this->input->post('experience');
       
       $fields=array(
            'keyName'=>$keyName,
            'created_date' => $created_date,
            'created_by' => 1
            );



            $this->KeySkillModel->insertdata($fields);
         echo json_encode($fields);
        }


    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   } 
   ?>