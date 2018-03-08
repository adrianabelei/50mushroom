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

     public function acceptCompany($id)
    {
        $myquery = "UPDATE companies SET  isdecided=?   WHERE id=?";
        $values = array(1,$id);
        return $this->db->query($myquery, $values);
    }

     function postsread()
	{	
        $query = "SELECT * from posts ";
        return $this->db->query($query)->result_array();
    }

    
public function maketursted($id)
{
        $myquery = "UPDATE companies SET  istrusted=?   WHERE id=?";
        $values = array(1,$id);
        return $this->db->query($myquery, $values);


    }

    public function makehighlight($id)
{
        $myquery = "UPDATE posts SET  is_higligted=?   WHERE id=?";
        $values = array(1,$id);
        return $this->db->query($myquery, $values);

    }

    public function acceptposts($id)
    {
        $myquery = "UPDATE posts SET  is_decided=?   WHERE id=?";
        $values = array(1,$id);
        return $this->db->query($myquery, $values);
    }



    

     public function deleteonecompany($id)
    {
        $myquery = "DELETE FROM companies WHERE id=?;";
        $values = array($id);
        return $this->db->query($myquery, $values);
    }

      public function deletepost1($id)
    {
        $myquery = "DELETE FROM posts WHERE id=?;";
        $values = array($id);
        return $this->db->query($myquery, $values);
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

    public function adminsOneRead($id)
    {
        $myquery = "SELECT * FROM admins WHERE id=? ";
        $values = array("$id");
        return $this->db->query($myquery, $values)->row_array();
    }












    ///////////////////End OF Class///////////////////
}
?>