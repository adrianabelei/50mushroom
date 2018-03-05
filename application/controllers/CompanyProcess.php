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
        $this->load->model('companyModel');
        $result['results']=$this->companyModel->postsread();
        $this->load->view("index",$result);
        var_dump($result);
        

    }


    //////// Login/Register Page /////////////
    public function joinpage()
    {
    $this->load->view('joinpage');

    }
    public function admin(){

        $this->load->view("adminpanel/adminlogin");

    }


    ///////////// Registeration///////////////
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
        $this->load->model('company_model');
        $this->company_model->insertCompany($regInfo);
        $message='You are successfully registirated, Please Login';
        $this->load->view('joinpage', array('errors' => $message));
        }
    }
 
    ////////////// Login /////////////////
    public function login()
	{

		$logInfo=$this->input->post(null,true);
		$this->load->model('company_model');
        $query=$this->company_model->loginChecker($logInfo);
        // $articles =$this->main_model->takeArticle();
		if($query)
		{
        $array_items = array(
            'id' => $query['id'],
            'company_name' => $query['company_name']);
            
        // $this->session->set_userdata($array_items);
        // $this->session->set_userdata('id',$query['id']);
        // $this->session->set_userdata('company_name',$query['company_name']);
        $this->load->view('adminpanel/indexcompany');
        // ,array('article' => $articles )
          
		
		}
		else
		{
			$errlog='Please insert VALID email address OR password!';
			$this->load->view('joinpage', array('errlog' => $errlog));
		}
    }

    public function readpost()

    {
        $this->load->model('company_Model');
        $result=$this->company_Model->postsread();
        var_dump($result);
    } 





    ///////////////// END OF THE CLASS////////////////////////

public function company()
{
    $this->load->view("adminpanel/indexcompany");
}

 
    
}




?>