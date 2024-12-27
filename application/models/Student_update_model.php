<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_update_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insertdata($model)
    {
      return $this->db->insert('studentregistration_master',$model);
        // return $sql->result();
    } 

    public function get_student($id)
    {
        $this->db->where('Id', $id);
        $query = $this->db->get('studentregistration_master');
        return $query->row_array();
        // return $sql->result();
        
    }
    
//  public function getallStudent()
//  {      
//   // SELECT studId, studentname, phone FROM `student_master`
  
//          $this->db->select("studentregistration_master.*");
//          $this->db->from('studentregistration_master');
//           $query = $this->db->get();
//           return $query->result();
         
//  }


public function getallStudent($filter = [])
{
    // Select all columns from the studentregistration_master table
    $this->db->select("studentregistration_master.*");
    $this->db->from('studentregistration_master');

    // Apply filters based on the start_date, end_date, and year
    if (!empty($filter['start_date']) && !empty($filter['end_date']) && !empty($filter['year'])) {
        // Apply the WHERE conditions for filtering based on created_date
        $this->db->where('DATE_FORMAT(created_date, "%Y-%m-%d") >=', $filter['start_date']);
        $this->db->where('DATE_FORMAT(created_date, "%Y-%m-%d") <=', $filter['end_date']);
    }

    if (!empty($filter['year'])) {
        // If the year filter is provided, apply a condition for the year
        $this->db->where('YEAR(created_date)', $filter['year']);
    }

    // Execute the query
    $query = $this->db->get();

    // Return the result
    return $query->result();
}








   
   
    public function updateProfile($id, $data)
    {
        $this->db->where('Id', $id);
        return $this->db->update('studentregistration_master', $data);
    }
    

    // public function getMaterialById($id)
    // {
    //     $this->db->where('materialId', $id);
    //     $query = $this->db->get('material_master');
    //     return $query->row();
    // }
}
?> 
