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

    public function loginChecker($companyEmail)
    {
        $query='SELECT * FROM companies WHERE email= ? AND password =?';
        $value=[$companyEmail['email'], $companyEmail['password']];
        $checker =$this->db->query($query,$value)->row_array();
        return $checker;
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

    public function addPost($arg,$image)
    {
        $query="INSERT INTO posts (title, description, link, image, tag,fiiledposition , vacancies, companies_id) VALUES (?,?,?,?,?,?,?,?)";
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