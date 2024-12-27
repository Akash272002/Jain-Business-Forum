<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modifyfirm extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Firm_model');
        $this->load->model('Report_Model');
    }
    public function index() {
      // Load the model
      $this->load->model('Firm_model');
  
      // Collect filter inputs from GET or POST
      $startDate = $this->input->get('start_date'); // Start date filter
      $endDate = $this->input->get('end_date'); // End date filter
      $year = $this->input->get('year'); // Year filter
  
      // Prepare filter criteria
      $filter = [];
      if (!empty($startDate) && !empty($endDate)) {
          $filter['start_date'] = $startDate;
          $filter['end_date'] = $endDate;
      }
      if (!empty($year)) {
          $filter['year'] = $year;
      }
  
      // Fetch firms with applied filters
      $allFirms = $this->Firm_model->getallFirms($filter);
  
      // Initialize arrays to hold verified and unverified data
      $verifiedData = [];
      $unverifiedData = [];
  
      // Categorize the data based on the status field
      foreach ($allFirms as $row) {
          if ($row->status == 1) {
              $verifiedData[] = $row; // Add to verified data if status is 1
          } else {
              $unverifiedData[] = $row; // Add to unverified data if status is 0
          }
      }
  
      // Prepare data to pass to the view
      $data['verifiedData'] = $verifiedData;
      $data['unverifiedData'] = $unverifiedData;
  
      // Load the view with the categorized data
      $this->load->view('common/header_view2');
      $this->load->view('adminPanle/modify_Regestration/Modifyfirm_view.php', $data);
      $this->load->view('common/footer2_view.php');
  }
  

  // public function firmReport()
  // {
  //   $data['alldata']= $this->Report_Model->getallfirm();
  // // $this->load->view('common/header_view2');
  // $this->load->view('adminPanle\Report\firmReport.php',$data);
  // // $this->load->view('common\footer2_view.php');
  // }
}

?>  


