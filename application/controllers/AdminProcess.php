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


    
<<<<<<< HEAD
            $this->load->view('adminlogin'); 
<<<<<<< HEAD
=======
>>>>>>> 25da7d171af8ea88f795e638cf76872f913ab694



    public function bringadminpanel()
	{
if (isset($_SESSION['superadmin_id'])) {
    $this->load->view('adminpanel/indexadminpanel');
} else {
    echo "you are not logged in";
}
       
        }


        public function loginadmin()
        {
            $loginfo = $this->input->post(null, true);
  
            $this->load->model('admin_Model');
            $query = $this->admin_Model->logincheckeradmin($loginfo);
            $_SESSION['superadmin_id'] = $query['id'];
echo $_SESSION['superadmin_id'];
            if ($query) {
                $array_items=array(
                    'id' => $query['id'],
                    'first-name' => $query['first_name']);
                
                $this->load->view('adminpanel/indexadminpanel');
            } else {
                $errorlog = "Please check your information!";
                $this->load->view('adminpanel/adminlogin', array('logerror' => $errorlog));
            }
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







    }

<<<<<<< HEAD
=======
    }
>>>>>>> abbi
=======
 
>>>>>>> 25da7d171af8ea88f795e638cf76872f913ab694

    
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