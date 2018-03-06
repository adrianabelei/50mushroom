<?php 


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

    
public function login()
	{

		$logInfo=$this->input->post(null,true);
		$this->load->model('admin_model');
        $query=$this->admin_model->loginChecker($logInfo);
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

}






?>