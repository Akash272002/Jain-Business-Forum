<?php
  class FrimRule_Model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      
    public function insertdata($model)
        {
          return $this->db->insert(' businessrule_master',$model);
            // return $sql->result();
        } 

        
     public function getallFirmRules()
     {      
      // SELECT studId, studentname, phone FROM student_master
      
             $this->db->select(" businessrule_master.*");
             $this->db->from(' businessrule_master');
              $query = $this->db->get();
              return $query->result();
             
     }


     public function updaeFirmRule($id, $data)
     {
         $this->db->where('ruleId', $id);
         return $this->db->update('businessrule_master', $data);
     }


     public function getFrimRuleById($id)
     {
         $this->db->where('ruleId', $id);
         $query = $this->db->get(' businessrule_master');
         return $query->row();
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