<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model
{



    public function superAdmin_checker($superAdmin)
    {
        $query='SELECT * FROM superadmin WHERE email= ? AND password =?';
<<<<<<< HEAD
        $value=[$superAdmin['email'], $superAdmin['password']];
        $checker_superAdmin =$this->db->query($query,$value)->row_array();
        return $checker_superAdmin;
=======
        $value=[$superadminEmail['email'], $superadminEmail['password']];
        return $this->db->query($query,$value)->row_array();
        
>>>>>>> db2a57d11e55582b300b0fec15c838e207176e67
    }

    public function admin_checker($admin)
    {
        $query='SELECT * FROM admins WHERE email= ? AND password =?';
        $value=[$admin['email'], $admin['password']];
        $checker_admin =$this->db->query($query,$value)->row_array();
        return $checker_admin;
    }









    ///////////////////End OF Class///////////////////
}
?>