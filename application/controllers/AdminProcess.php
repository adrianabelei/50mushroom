<?php 


class AdminProcess extends CI_COntroller 

{
    public function index()
    {
    
            $this->load->view('adminlogin'); 
    }

    
//////////////////// login SuperAdmin and Admin////////////////
    public function login()
	{
        $logInfo=$this->input->post(null,true);
		$this->load->model('Admin_Model');
        $querySuperAdmin=$this->Admin_Model->superAdmin_checker($logInfo);
        $queryAdmin=$this->Admin_Model->admin_checker($logInfo);
        
         
		if($querySuperAdmin == true)
		{
        $array_items = array(
            'id' => $querySuperAdmin['id'],
            'email' => $querySuperAdmin['email']);
        $this->session->set_userdata($array_items);
        $this->session->set_userdata('id',$querySuperAdmin['id']);
        $this->session->set_userdata('email',$querySuperAdmin['email']);
        $this->load->view('adminpanel/adminpanel');
          
		
        }
        else if($queryAdmin == true)
		{
        $array_items = array(
            'id' => $queryAdmin['id'],
            'email' => $queryAdmin['email']);
        $this->session->set_userdata($array_items);
        $this->session->set_userdata('id',$queryAdmin['id']);
        $this->session->set_userdata('email',$queryAdmin['email']);
        $this->load->view('adminpanel/adminpanel');
          
		
		}
		else
		{
			$errlog='Please insert VALID email address OR password!';
			$this->load->view('adminpanel/adminlogin', array('errlog' => $errlog));
		}
    }


//////////////////// logout/////////////////////
    public function logout()
    {
        session_destroy();
        $this->load->view('adminpanel/adminlogin');
    }


/////////////////// END OF THE CLASS //////////////////////
}
?>