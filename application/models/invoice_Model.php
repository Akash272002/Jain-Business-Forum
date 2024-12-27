<?php
  class Invoice_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
 
    public function insertdata($model)
      {
        return $this->db->insert('invoice',$model);
          return $sql->result();
      } 

     public function getallinvoice()
     {      
      // SELECT studId, studentname, phone FROM student_master
      
             $this->db->select("invoice.Id,invoice_drp.item,invoice.Date,invoice.Barcode,invoice.Id2,invoice_drp2.item2,invoice_drp3.item3,invoice_drp4.item4,invoice.Expiry_Date,invoice.Rate,invoice.Qty,invoice.Free_Qty,invoice.Amount,invoice.Total_Amount");
             $this->db->from('invoice');
             $this->db->join('invoice_drp','invoice.Customer_Name=invoice_drp.Id','left');
             $this->db->join('invoice_drp2','invoice.Product_Name=invoice_drp2.Id','left');
             $this->db->join('invoice_drp3','invoice.Unit=invoice_drp3.Id','left');
             $this->db->join('invoice_drp4','invoice.Batch=invoice_drp4.Id','left');

              $query = $this->db->get();
              return $query->result();
             
     }
     public function getallcustomer() 
     {      
      // SELECT studId, studentname, phone FROM student_master
      
             $this->db->select("invoice_drp.*");
             $this->db->from('invoice_drp');
              $query = $this->db->get();
              return $query->result();
             
     }
     public function getallproduct()
     {      
      // SELECT studId, studentname, phone FROM student_master
      
             $this->db->select("invoice_drp2.*");
             $this->db->from('invoice_drp2');
              $query = $this->db->get();
              return $query->result();
             
     }
     public function getallunit()
     {      
      // SELECT studId, studentname, phone FROM student_master
      
             $this->db->select("invoice_drp3.*");
             $this->db->from('invoice_drp3');
              $query = $this->db->get();
              return $query->result();
             
     }
     public function getallbatch()
     {      
      // SELECT studId, studentname, phone FROM student_master
      
             $this->db->select("invoice_drp4.*");
             $this->db->from('invoice_drp4');
              $query = $this->db->get();
              return $query->result();
             
     }
    }
?>