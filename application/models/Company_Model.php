<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Company_Model extends CI_Model
{
 
    public function insertCompany($companyInfo)
    {
        $query ='INSERT INTO companies(company_name, email, password)
         VALUES (?,?,?)';
         $value=[$companyInfo['name'], $companyInfo['email'], $companyInfo['password']];
         $this->db->query($query, $value);
    }
<<<<<<< HEAD
=======

>>>>>>> e8ae4bd0fe18947c572ba89054d5c83c2e3e746b
    public function loginChecker($companyEmail)
    {
        $query='SELECT * FROM companies WHERE email= ? AND password =?';
        $value=[$companyEmail['email'], $companyEmail['password']];
        $checker =$this->db->query($query,$value)->row_array();
        return $checker;
    }
<<<<<<< HEAD
=======

>>>>>>> e8ae4bd0fe18947c572ba89054d5c83c2e3e746b
///////////////End of the class///////////////
}
?>