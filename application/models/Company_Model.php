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
    
    public function add_user($arg = array())
    {
        return $this->db->insert('companies', $arg);
    }
 
    public function get_user_by_email($email)
    {
        $query = "SELECT * from companies where email=?";
        $value=[$email];
        return $this->db->query($query,$value)->row_array();
    }


    function postsread()
	{	
        $query = "SELECT * from posts order by created_at desc ";
        return $this->db->query($query)->result_array();
    }
    

    public function postsOneRead($id)
    {
        $myquery = "SELECT * FROM posts WHERE id=? ";
        $values = array("$id");
        return $this->db->query($myquery, $values)->row_array();
    }

     public function postsOnecompany()
    {
        $myquery = "SELECT * FROM posts WHERE companies_id=? and is_decided=? ";
        $values = array($this->session->userdata('company_id'),1);
        return $this->db->query($myquery, $values)->result_array();
    }

    public function editone($result,$id,$image)
    {
        $myquery = "UPDATE posts SET title =?, description=?, link=?, image=?, tag=?,fiiled_position=?,is_decided=?   WHERE id=?";
        $values = array($result['title'],$result['description'],$result['link'],$image,$result['tag'],$result['fiiled_position'],0,$id);
        return $this->db->query($myquery, $values);

      
    }

    public function editone1($result,$id,$image)
    {
        $myquery = "UPDATE posts SET title =?, description=?, link=?, image=?, tag=?,fiiled_position=?,is_decided=?   WHERE id=?";
        $values = array($result['title'],$result['description'],$result['link'],$image,$result['tag'],$result['fiiled_position'],1,$id);
        return $this->db->query($myquery, $values);

      
    }


    public function editonecompany($result,$id,$image)
    {
        $myquery = "UPDATE companies SET company_name =?, email=?, company_logo=?, adress=?,phonenumber=?,type=?   WHERE id=?";
        $values = array($result['company_name'],$result['email'],$image,$result['adress'],$result['phonenumber'],$result['type'],$id);
        return $this->db->query($myquery, $values);
    }

    public function companydetail()
    {
        $id=$this->session->userdata('company_id');
        $myquery = "SELECT * FROM companies WHERE id=? ";
        $values = $id;
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
        $date=date('Y-m-d G:i:s');
        $query="INSERT INTO posts (title, description, link, image, tag,fiiled_position , vacancies, companies_id,created_at) VALUES (?,?,?,?,?,?,?,?,?)";
        $values =[$arg['title'], $arg['description'], $arg['link'],$image, $arg['tag'], $arg['fiiled_position'], $arg['vacancies'], $_SESSION['company_id'],$date];
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