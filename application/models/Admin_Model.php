<?php 

class Admin_Model extends CI_Model
{



    public function logincheckeradmin($superadminEmail)
    {
        $query='SELECT * FROM superadmin WHERE email= ? AND password =?';
        $value=[$superadminEmail['email'], $superadminEmail['password']];
        return $this->db->query($query,$value)->row_array();
        
    }

}



?>