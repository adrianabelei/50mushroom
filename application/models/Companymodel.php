<?php 
class Companymodel extends CI_Model
{
     function postsread()
	{	
        $query = "SELECT * from posts ";
        return $this->db->query($query)->result_array();
	}
}
?>