<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {
    public function __construct() {
        parent::__construct();    
    }

    public function AdminLogin($username, $password) {
        $this->db->select('userName, password, userId');
        $this->db->where('userName', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('loginregistration');
    
              // Debugging output
              error_log('Last Query: ' . $this->db->last_query());
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
}
?>
