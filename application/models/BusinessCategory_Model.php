<?php
  class BusinessCategory_Model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      
    public function insertdata($model)
        {
          return $this->db->insert('businesscategory_master',$model);
            // return $sql->result();
        } 

        
     public function getallBusinessCategory()
     {      
      // SELECT studId, studentname, phone FROM student_master
      
             $this->db->select(" businesscategory_master.*");
             $this->db->from(' businesscategory_master');
              $query = $this->db->get();
              return $query->result();
             
     }



     public function updaeBusinessCat($id, $data)
     {
         $this->db->where('businessId', $id);
         return $this->db->update('businesscategory_master', $data);
     }


     public function getBusinessCatById($id)
     {
         $this->db->where('businessId', $id);
         $query = $this->db->get('businesscategory_master');
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