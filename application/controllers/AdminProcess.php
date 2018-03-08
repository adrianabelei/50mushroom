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


    


public function editCompany($id)
{
    $this->session->set_userdata('company_updated_id', $id);
    $this->load->view("adminpanel/editCompany");


}

public function editonecompany1()
{
      $result=$this->input->post(null,false);
        $image=$_FILES['image']['name'];
        $id=$this->session->userdata('company_updated_id');
        $this->load->model("Admin_Model");
        $result2=$this->Admin_Model->editonecompany($result,$id,$image);
        $config['upload_path']= 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('image'))

                {
                    $data=0;
                        
                }
                else
                {
                        

                }
                $this->load->view('adminpanel/users');
    
}

public function seeacceptedpost()
{
    $this->load->model("Admin_Model");
    $result['results']=$this->Admin_Model->postsread();
    $this->load->view("adminpanel/acceptedpost",$result);
}

  public function detailpostcompany1($id)
    {
        $this->load->model('Company_Model');
        $result['results']=$this->Company_Model->postsOneRead($id);
        $this->load->view('adminpanel/seepostedit',$result);
    }


      function editonepost1($id){
       
        $this->session->set_userdata('company_updated_id', $id);
        $this->load->view('adminpanel/editpost');
    }


    function editpost1(){

        $result=$this->input->post(null,false);
        $image=$_FILES['image']['name'];
        $id=$this->session->userdata('company_updated_id');
        $this->load->model("Company_Model");
        $result2=$this->Company_Model->editone1($result,$id,$image);
        
        $config['upload_path']= 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('image'))

                {
                    $data=0;
                        
                }
                else
                {
                        

                }
                redirect("http://localhost/seeacceptedpost");

        


    }


function deleteCompany($id)
{  
     $this->load->model("Admin_Model");
    $result2=$this->Admin_Model->deleteonecompany($id);
    redirect('http://localhost/seeUser');
}


public function makehighlight($id)
{
       $this->load->model("Admin_Model");
    $result2=$this->Admin_Model->makehighlight($id);
    redirect('http://localhost/seeacceptedpost');
}

public function deleteCompany1($id)
{
    $this->load->model("Admin_Model");
    $result2=$this->Admin_Model->deleteonecompany($id);
    redirect('http://localhost/seeUnacppepted');
}


public function acceptCompany($id)
{
    $this->load->model("Admin_Model");
    $result2=$this->Admin_Model->acceptCompany($id);
    redirect('http://localhost/seeUnacppepted');
    
}

public function maketursted($id)
{
    $this->load->model("Admin_Model");
    $result2=$this->Admin_Model->maketursted($id);
    redirect('http://localhost/seeUser');
    
}


public function seeUnacppepted()
{
    $this->load->model("Admin_Model");
    $result['results']=$this->Admin_Model->readCompanies();
    $this->load->view("adminpanel/seeUnacceptedCompanies",$result);
}




public function seeAdmin()
{   
    $this->load->model("Admin_Model");
    $result['results']=$this->Admin_Model->readAdmin();
    $this->load->view("adminpanel/seeAdmin",$result);

}


public function detailsadmins($id)
{
    $this->load->model("Admin_Model");
    $result['results']=$this->Admin_Model->adminsOneRead($id);
     $this->load->view("adminpanel/detailsadmins",$result);


public function acceptposts($id)
{
    $this->load->model("Admin_Model");
    $result2=$this->Admin_Model->acceptposts($id);
    redirect('http://localhost/seeunacceptedposts');
}

public function deletepost1($id)
{
    $this->load->model("Admin_Model");
    $result2=$this->Admin_Model->deletepost1($id);
    redirect('http://localhost/seeunacceptedposts');
    
}

public function detailpostcompany2($id)
{
        $this->load->model('Company_Model');
        $result['results']=$this->Company_Model->postsOneRead($id);
        $this->load->view('adminpanel/seepostedit',$result);
}


public function seeunacceptedposts()
{
    $this->load->model("Admin_Model");
    $result['results']=$this->Admin_Model->postsread();
    $this->load->view("adminpanel/unacceptedpost",$result);

    
}


function admineditpage(){
        
    $this->load->view('adminpanel/adminEdit');


}

public function editoneadmin()

{       $result=$this->input->post(null,false);
        $id=$this->session->userdata('superadmin_id');
        $this->load->model("Admin_Model");
        $result2=$this->Admin_Model->editoneadmin($result,$id);
        $this->load->view('adminpanel/seeAdmin');
}








}
?>