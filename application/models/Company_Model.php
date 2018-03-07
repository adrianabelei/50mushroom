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
    
    function postsread()
	{	
        $query = "SELECT * from posts ";
        return $this->db->query($query)->result_array();
    }
    

    public function postsOneRead($id)
    {
        $myquery = "SELECT * FROM posts WHERE id=? ";
        $values = array("$id");
        return $this->db->query($myquery, $values)->row_array();
    }


    public function login($email, $password)
    {
        $myquery = "SELECT * FROM companies WHERE email=? AND password = ? ";
        $values = array("$email", "$password");
        $query = $this->db->query($myquery, $values)->row_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }

    public function addPost($arg,$image)
    {
        $query="INSERT INTO posts (title, description, link, image, tag,fiiled_position , vacancies, companies_id) VALUES (?,?,?,?,?,?,?,?)";
        $values =[$arg['title'], $arg['description'], $arg['link'],$image, $arg['tag'], $arg['fiiled_position'], $arg['vacancies'], $_SESSION['company_id']];
        $this->db->query($query, $values);
        
    }
    public function takePost()
    {
        $query ="SELECT companies.company_name, posts.title, posts.description, posts.link, posts.image, posts.tag, posts.fiiled_position, posts.vacancies, posts.id
        FROM companies
        JOIN posts
        ON companies.id = posts.companies_id
        ORDER BY posts.id DESC";
        $posts= $this->db->query($query)->result_array();
        return $posts;
    }

   


}
?>