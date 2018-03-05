<?php 

class Companymodel extends CI_Model
{
     function postsread()
	{	

        $query = "SELECT * from superadmin ";
        return $this->db->query($query)->result_array();

	}




}



?>