<?php
  class helpDesk_Model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      
    // public function insertdata($model)
    //     {
    //       return $this->db->insert('help_master',$model);
    //         // return $sql->result();
    //     } 

        
    public function getallHelps()
    {      
        $this->db->select("
            help_master.helpId,
            help_master.helpdescription,
            help_master.created_date,
            help_master.is_active,
            COALESCE(businessregistration_master.firmName, studentregistration_master.studentName) as PersoneName,
            businessregistration_master.mobileNo as BusinessMobile,
            studentregistration_master.mobileNo as StudentMobile
        ");
        
        $this->db->from('help_master');
        
        // Joining with businessregistration_master
        $this->db->join('businessregistration_master', 'help_master.created_by = businessregistration_master.ID', 'left');
        
        // Joining with studentregistration_master
        $this->db->join('studentregistration_master', 'help_master.created_by = studentregistration_master.Id', 'left');
        
        $this->db->where('help_master.is_active', 1);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    

     public function getallBusinesses()
     {      
             $this->db->select("businessregistration_master.*");
             $this->db->from('businessregistration_master');
              $query = $this->db->get();
              return $query->result();
             
     }
     public function getallStudents()
     {      
             $this->db->select("studentregistration_master.*");
             $this->db->from('studentregistration_master');
              $query = $this->db->get();
              return $query->result();
             
     }
     public function update_status($helpId, $is_active) {
      $data = array('is_active' => $is_active);
      $this->db->where('helpId', $helpId);
      $this->db->update('help_master', $data);  // Replace 'your_table_name' with the actual table name
  }
  
    
    //  public function getallQualification()
    //  {      
    //   // SELECT studId, studentname, phone FROM student_master
      
    //          $this->db->select("teacher_drp.*");
    //          $this->db->from('teacher_drp');
    //           $query = $this->db->get();
    //           return $query->result();
             
    //  }
    //  public function getallExperience()
    //  {      
    //   // SELECT studId, studentname, phone FROM student_master
      
    //          $this->db->select("teacher_drp2.*");
    //          $this->db->from('teacher_drp2');
    //           $query = $this->db->get();
    //           return $query->result();
             
    //  }
     
      



      //  public function getdetailview()
      //  {      
        
      //          $this->db->select('keyskill_master.keyName');
      //          $this->db->from('keyskill_master');
      //           $query = $this->db->get();
      //           return $query->result();
               
      //  }
       
      //  public function getbyid($id)
      //  {
      //    $this->db->select("teacherdetails.*");
      //    $this->db->where('Id',$id);
      //    $query = $this->db->get('teacherdetails');
      //    return $query->result();
      //  }
      //  public function update($model)
      //  {
      //     return $sql = $this->db->where('Id',$model['Id'])->update('teacherdetails',$model); 
      //  } 
}
?> 