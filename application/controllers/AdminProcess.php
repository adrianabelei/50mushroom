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

        if($this->session->userdata('id_superAdmin'))
        {
            $this->session->set_userdata('id_superAdmin',false);

        }
        else{
            $this->session->set_userdata('id_admin',false);

        }

        $this->load->view('adminpanel/adminlogin');
        
    }


/////////////////// END OF THE CLASS //////////////////////

public function seeUser()
{

    $this->load->model("Admin_Model");
    $result['results']=$this->Admin_Model->readCompanies();
    $this->load->view("adminpanel/seeCompanies",$result);
}

public function SeeAdmins()
{
    $this->load->model("Admin_Model");
    $result['results']=$this->Admin_Model->SeeAdmins();
    $this->load->view("adminpanel/seeAdmins",$result);
    
}

public function deleteAdmin($id)
{
    $this->load->model("Admin_Model");
    $result2=$this->Admin_Model->deleteoneAdmin($id);
    redirect('/SeeAdmins');
}


public function detailsAdmin($id)
{
    $this->load->model("Admin_Model");
    $result['results']=$this->Admin_Model->adminsOneRead($id);
    $this->load->view("adminpanel/admindetail",$result);
}


public function detailsCompany($id)
{   
   
    $this->load->model("Admin_Model");
    $result['results']=$this->Admin_Model->companiesOneRead($id);
    $this->load->view("adminpanel/detailsCompany",$result);

    
}


public function addAdmin()
{
    $this->load->view("adminpanel/addadmin");
}

public function addadmin1()
{
    $result=$this->input->post(null,false);

      $this->load->model("Admin_Model");
        $this->Admin_Model->addadmin1($result);
        redirect('/addAdmin');




}


public function editadmin1()
{
    $result=$this->input->post(null,false);
        $id=$this->session->userdata('company_updated_id');
        $this->load->model("Admin_Model");
        $result2=$this->Admin_Model->editoneadmin($result,$id);
        $this->load->view('adminpanel/users');
}

public function editadmin($id)
{
    $this->session->set_userdata('company_updated_id', $id);
    $this->load->view("adminpanel/adminedit");
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
                redirect("/seeacceptedpost");

        


    }


function deleteCompany($id)
{  
     $this->load->model("Admin_Model");
    $result2=$this->Admin_Model->deleteonecompany($id);
    redirect('/seeUser');
}


public function makehighlight($id)
{
       $this->load->model("Admin_Model");
    $result2=$this->Admin_Model->makehighlight($id);
    redirect('/seeacceptedpost');
}

public function deleteCompany1($id)
{
    $this->load->model("Admin_Model");
    $result2=$this->Admin_Model->deleteonecompany($id);
    redirect('/seeUnacppepted');
}


public function acceptCompany($id)
{
    $this->load->model("Admin_Model");
    $result2=$this->Admin_Model->acceptCompany($id);

    //  $this->load->library('email');

    // $this->email->from('vcrotterdam@mail.com', 'TechMasters');
    // $this->email->to("qi.husam@gmail.com");

    // $this->email->subject('Your post at VCR - {TechMasters}');
    // $this->email->message('Your registration  has been approved');
    
    redirect('/seeUnacppepted');

    
}

public function maketursted($id)
{
    $this->load->model("Admin_Model");
    $result2=$this->Admin_Model->maketursted($id);
    redirect('/seeUser');
    
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
}

public function acceptposts($id)
{
    $this->load->model("Admin_Model");
    $result2=$this->Admin_Model->acceptposts($id);
    redirect('/seeunacceptedposts');
}

public function deletepost1($id)
{
    $this->load->model("Admin_Model");
    $result2=$this->Admin_Model->deletepost1($id);
    redirect('/seeunacceptedposts');
    
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