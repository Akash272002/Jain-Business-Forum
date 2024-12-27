modal:-

<?php
class demoLogin_model extends CI_Model 
	{
		public function __construct()
		{
			parent::__construct();	
		} 

        public function AdminLogin($username,$password)
        {
            $this->db->select('username,userPassword,userId');
            $this->db->where('username',$username);
            $this->db->where('userPassword',$password);
            $query=$this->db->get('loginregistration');
              if($query->num_rows()>0)
                {
                    return $query->result(); 
                }
              else
                {
                    return false;
                }

        }

        public function getallUser()
        {
          $this->db->select(' loginregistration.*');
          $this->db->from('loginregistration');
          $this->db->where(' loginregistration.is_active','1');
          $query=$this->db->get();
          return $query->result();
        }
	
	

    

    

		
    
  }
?>


