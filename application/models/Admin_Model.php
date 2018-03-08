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

     public function editonecompany($result,$id,$image)
    {
        $myquery = "UPDATE companies SET company_name =?, email=?, company_logo=?, adress=?,phonenumber=?,type=?   WHERE id=?";
        $values = array($result['company_name'],$result['email'],$image,$result['adress'],$result['phonenumber'],$result['type'],$id);
        return $this->db->query($myquery, $values);
    }



    public function companiesOneRead($id)
    {
        $myquery = "SELECT * FROM companies WHERE id=? ";
        $values = array("$id");
        return $this->db->query($myquery, $values)->row_array();
    }












    ///////////////////End OF Class///////////////////
}
?>