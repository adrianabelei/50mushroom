<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model
{



    public function superAdmin_checker($superAdmin)
    {
        $query='SELECT * FROM superadmin WHERE email= ? AND password =?';
        $value=[$superAdmin['email'], $superAdmin['password']];
        $checker_superAdmin =$this->db->query($query,$value)->row_array();
        return $checker_superAdmin;

    }

    public function admin_checker($admin)
    {
        $query='SELECT * FROM admins WHERE email= ? AND password =?';
        $value=[$admin['email'], $admin['password']];
        $checker_admin =$this->db->query($query,$value)->row_array();
        return $checker_admin;
    }

     function readCompanies()
	{	
        $query = "SELECT * from companies ";
        return $this->db->query($query)->result_array();
    }

    function readAdmin()
    {
        $query="SELECT * from admins";
        return $this->db->query($query)->result_array();
    }

    public function editoneadmin($result,$id)
    {
        $myquery = "UPDATE admins SET first_name =?, last_name =?, email=?, password=?   WHERE id=?";
        $values = array($result['first_name'], $result['last_name'], $result['email'],$result['password'], $id);
        return $this->db->query($myquery, $values);
    }







    ///////////////////End OF Class///////////////////
}
?>