<?php
  class Report_Model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      
 

        
     public function getallfirm()
     {      
      // SELECT studId, studentname, phone FROM student_master
      
      $this->db->select("
      businessregistration_master.Id,
      businessregistration_master.firmName,
      businessregistration_master.mobileNo,
      businessregistration_master.password,
      businessregistration_master.email,
      businessregistration_master.officeAddress,
      businessregistration_master.officemobileNo,
      businessregistration_master.residenceAddress,
      businessregistration_master.wpmobileNo,
      businessregistration_master.state,
      businessregistration_master.district,
      businessregistration_master.taluka,
      businessregistration_master.village,
      businessregistration_master.pinCode,
      businessregistration_master.website,
      businesscategory_master.businessName as firmCategory,
      businesstype_master.businesstypeName as firmType,
      businessregistration_master.ownerName,
      businessregistration_master.partner,
      businessregistration_master.bloodgroup,
      businessregistration_master.birthdate,
      businessregistration_master.aadhaarCard,
      businessregistration_master.panCard,
      businessregistration_master.gstCertificate,
      businessregistration_master.udyogCertifcate,
      businessregistration_master.farmdescription,
      businessregistration_master.status
  ");
  
  // Define the base table
  $this->db->from('businessregistration_master');
  
  // Join with businesscategory_master to get the category details
  $this->db->join('businesscategory_master', 'businessregistration_master.firmCategory = businesscategory_master.businessId', 'left');
  
  // Join with businesstype_master to get the type details
  $this->db->join('businesstype_master', 'businessregistration_master.firmType = businesstype_master.businesstypeId', 'left');
  
  // Execute the query
  $query = $this->db->get();
  
  // Return the result set as an array of objects
  return $query->result();
             
     }
    }
    ?>