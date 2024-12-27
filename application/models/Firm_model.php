<?php
  class Firm_model extends CI_Model {
    public function __construct()
      {
        parent::__construct();
        $this->load->database();
      }
  
      
    public function insertdata($model)
        {
          return $this->db->insert('businessregistration_master',$model);
            // return $sql->result();
        } 

        
      //   public function getallFirms() {
      //      $query = $this->db->get('businessregistration_master');
      //      return $query->result(); // Make sure this returns an array of objects

      //     $this->db->select("
      //              businessregistration_master.firmName,
      //             businessregistration_master.mobileNo,businessregistration_master.password,businessregistration_master.email,businessregistration_master.officeAddress,businessregistration_master.officemobileNo,businessregistration_master.residenceAddress,businessregistration_master.wpmobileNo,businessregistration_master.state,businessregistration_master.district,businessregistration_master.taluka,businessregistration_master.village,businessregistration_master.pinCode,businessregistration_master.website,businesscategory_master.businessName, businesstype_master.businesstypeName,businessregistration_master.ownerName,businessregistration_master.partner,businessregistration_master.bloodgroup,businessregistration_master.birthdate,businessregistration_master.aadhaarCard,businessregistration_master.panCard,businessregistration_master.gstCertificate,businessregistration_master.udyogCertifcate,
      //              businessregistration_master.farmdescription");
      //             $this->db->from('businessregistration_master');
      //              $this->db->join('businesscategory_master','businessregistration_master.firmCategory=businesscategory_master.businessId','right');
      //              $this->db->join('businesstype_master','businessregistration_master.firmType=businesstype_master.businesstypeId','right');
      //             $query = $this->db->get();
      //              return $query->result();
      // }
        

        
     public function updaedata($id, $data)
     {
         $this->db->where('Id', $id);
         return $this->db->update('businessregistration_master', $data);
     }



     
        public function get_Firm($id)
        {
            $this->db->where('Id', $id);
            $query = $this->db->get('businessregistration_master');
            return $query->row_array();
        }


        public function getAllFirms($filter = []) {
          $this->db->select("
              businessregistration_master.Id,
              businessregistration_master.firmName,
              businessregistration_master.mobileNo,
              businessregistration_master.status,
              businessregistration_master.created_date,
              businesscategory_master.businessName as firmCategory,
              businesstype_master.businesstypeName as firmType
          ");
          $this->db->from('businessregistration_master');
          $this->db->join('businesscategory_master', 'businessregistration_master.firmCategory = businesscategory_master.businessId', 'left');
          $this->db->join('businesstype_master', 'businessregistration_master.firmType = businesstype_master.businesstypeId', 'left');
      
          // Apply filters if provided
          if (!empty($filter['start_date']) && !empty($filter['end_date'])) {
              $this->db->where('businessregistration_master.created_date >=', $filter['start_date']);
              $this->db->where('businessregistration_master.created_date <=', $filter['end_date']);
          }
          if (!empty($filter['year'])) {
              $this->db->where('YEAR(businessregistration_master.created_date)', $filter['year']);
          }
      
          $query = $this->db->get();
          return $query->result();
      }
      
        
    
        public function getallBusinessCategory()
        {      
                $this->db->select("businesscategory_master.*");
                $this->db->from('businesscategory_master');
                 $query = $this->db->get();
                 return $query->result();
                
        }
    

        public function getallBusinessType()
        {      
                $this->db->select("businesstype_master.*");
                $this->db->from('businesstype_master');
                 $query = $this->db->get();
                 return $query->result();
                
        }
    
    
}
?>