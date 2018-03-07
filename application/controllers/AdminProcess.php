<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminProcess extends CI_Controller 

{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");

    }

    public function index()
    {
       
        $this->load->view('adminpanel/adminlogin'); 
        
    }





        function company()
        {
            $this->load->view("adminpanel/indexcompany");
        }
         function managepost()
         {
            $this->load->view("adminpanel/manageposts");
         }

         function superaccess()
         {
            $this->load->view("adminpanel/adminpanel");
         }

        public function addsuperuser()
        {

        }

        public function adduser()
        {

        }


    
//////////////////// login SuperAdmin and Admin////////////////
    public function login()
	{
    if ($this->session->userdata('id_superAdmin') || $this->session->userdata('id_admin'))
    {
        $this->load->view('adminpanel/users');
    }
    else {
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
        $this->session->set_userdata('id_superAdmin',$querySuperAdmin['id']);
        $this->session->set_userdata('email_superAdmin',$querySuperAdmin['email']);
        $this->load->view('adminpanel/users');
          
		
        }
        else if($queryAdmin == true)
		{
        $array_items = array(
            'id' => $queryAdmin['id'],
            'email' => $queryAdmin['email']);
        $this->session->set_userdata($array_items);
        $this->session->set_userdata('id_admin',$queryAdmin['id']);
        $this->session->set_userdata('email_admin',$queryAdmin['email']);
        $this->load->view('adminpanel/users');
          
		
		}
		else
		{
			$errlog='Please insert VALID email address OR password!';
			$this->load->view('adminpanel/adminlogin', array('errlog' => $errlog));
		}
    }
    
    }

//////////////////// logout/////////////////////
    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('adminpanel/adminlogin');
    }


/////////////////// END OF THE CLASS //////////////////////
}
?>