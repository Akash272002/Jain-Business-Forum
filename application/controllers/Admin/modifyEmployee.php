<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modifyEmployee extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_update_model');

        
    }
    public function modifyEmployee()
{
    // Fetch filter values from the GET request
    $startDate = $this->input->get('start_date');
    $endDate = $this->input->get('end_date');
    $year = $this->input->get('year');

    // Prepare filter data
    $filter = [];
    if (!empty($startDate) && !empty($endDate) && !empty($year)) {
        $filter = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'year' => $year
        ];
    }

    // Fetch filtered student data from the model
    $allStudents = $this->Student_update_model->getallStudent($filter);

    // Categorize data into verified and unverified
    $verifiedData = [];
    $unverifiedData = [];
    foreach ($allStudents as $row) {
        if ($row->status == 1) {
            $verifiedData[] = $row;
        } else {
            $unverifiedData[] = $row;
        }
    }

    // Prepare data for the view
    $data['verifiedData'] = $verifiedData;
    $data['unverifiedData'] = $unverifiedData;

    // Load the view with the filtered data
    $this->load->view('common/header_view2');
    $this->load->view('adminPanle/modify_Regestration/modifyEmployee_view.php', $data);
    $this->load->view('common/footer2_view.php');
}

    
}
?>
