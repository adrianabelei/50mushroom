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
    {if ($this->session->userdata('id_superAdmin') || $this->session->userdata('id_admin'))
       {
           $this->load->view('adminpanel/users');
       }
       else{
        $this->load->view('adminpanel/adminlogin'); 
       }
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

public function seeUser()
{

    $this->load->model("Admin_Model");
    $result['results']=$this->Admin_Model->readCompanies();
    $this->load->view("adminpanel/seeCompanies",$result);
}


public function detailsCompany($id)
{
    $this->load->model("Admin_Model");
    $result['results']=$this->Admin_Model->companiesOneRead($id);
     $this->load->view("adminpanel/detailsCompany",$result);
    
}




public function seeAdmin()
{
$this->load->model("Admin_Model");
    $result['results']=$this->Admin_Model->readAdmin();
    $this->load->view("adminpanel/seeAdmin",$result);
}

function admineditpage(){
        
    $this->load->view('adminpanel/adminedit');


}

public function editoneadmin()

{       $result=$this->input->post(null,false);
        $id=$this->session->userdata('superadmin_id');
        $this->load->model("Admin_Model");
        $result2=$this->Company_Model->editoneadmin($result,$id);
        $this->load->view('adminpanel/seeAdmin');
}


}
?>