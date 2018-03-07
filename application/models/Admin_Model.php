<?php 

class Admin_Model extends CI_Model
{
    public function logincheckeradmin($email, $password)
    {
        $myquery = "SELECT * FROM superadmin WHERE email=? AND password = ?";
        $values = array("$email", "$password");
        $query = $this->db->query($myquery, $values)->row_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }


}



?>