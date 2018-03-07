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
            var_dump($loginfo);
            die();
            $this->load->model('admin_Model');
            $query = $this->admin_Model->logincheckeradmin($loginfo);
        
            $_SESSION['superadmin_id'] = $query['id'];
        
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

 





?>