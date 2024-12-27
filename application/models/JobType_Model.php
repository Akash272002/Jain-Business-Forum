<?php
  class JobType_Model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      
    public function insertdata($model)
        {
          return $this->db->insert(' jobtype_master',$model);
            // return $sql->result();
        } 

        
     public function getallJobTypes()
     {      
      // SELECT studId, studentname, phone FROM student_master
      
             $this->db->select("jobtype_master.*");
             $this->db->from('jobtype_master');
              $query = $this->db->get();
              return $query->result();
             
     }



     public function updaeJobType($id, $data)
     {
         $this->db->where('jobtypeId', $id);
         return $this->db->update('jobtype_master', $data);
     }


     public function getJObTypeById($id)
     {
         $this->db->where('jobtypeId', $id);
         $query = $this->db->get('jobtype_master');
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