<?php 

class Companyprocess extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
    }
    
    public function index()
    {
        $this->load->view('index');
        
    }


    public function readpost()
{
    $this->load->model('companyModel');
    $result['results']=$this->companyModel->postsread();
    $this->load->view("index",$result);
    var_dump($result);
} 


    
}



?>