<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class CompanyProcess extends CI_Controller 


{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
    }
    
    
   public function index()
     {
     //// if (isset($_SESSION['company_id']))
        ////  $this->load->model('company_Model');
        ////  $result['results']=$this->company_Model->postsread();
          $this->load->view("index");

        
        
    }
    //////// Login/Register Page /////////////
    public function joinpage()
    {
    $this->load->view('joinpage');
    }
   

        

    

    //////// Login/Register Page /////////////
  


    public function register()
    {
        $regInfo=$this->input->post(null, true);
        $this->load->library("form_validation");
        $this->form_validation->set_rules("name", "Company Name", "trim|required|alpha");
        $this->form_validation->set_rules("email", "email", "trim|required");
        $this->form_validation->set_rules("password", "password", "trim|required|min_length[6]");
        $this->form_validation->set_rules("confirmPassword", "Confirm Password", "required|matches[password]");
    
        if ($this->form_validation->run() == FALSE)
        {
        $validationError = validation_errors();
        $this->load->view('joinpage', array('errors' => $validationError));
        }

    
        else 
        {
        $this->load->model('Company_Model');
        $this->Company_Model->insertCompany($regInfo);
        $message='You are successfully registirated, Please Login';
        $this->load->view('joinpage', array('errors' => $message));
        }
    }
 
    ////////////// Login /////////////////
    
    
    ///////////////// END OF THE CLASS////////////////////////

 
 
    ////////////// Login /////////////////
    


    public function readpost()

    {
        $this->load->model('company_Model');
        $result=$this->company_Model->postsread();
        var_dump($result);
    } 





    ///////////////// END OF THE CLASS////////////////////////

 function company()
{
    $this->load->view("adminpanel/indexcompany");
}

 function managepost()
 {
    $this->load->view("adminpanel/manageposts");
 }

function companyaddpost()
    {
        $postform = $this->input->post(null, true);
        $this->load->model('company_Model');
        $this->company_Model->addPost($postform['title'], $_SESSION['id']);
        $posts = $this->company_Model->takePost();
        $this->load->view('adminpanel/manageposts', ['posts' => $posts]);
    }
 
}



?>