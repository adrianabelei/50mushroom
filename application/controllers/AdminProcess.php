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
            $this->load->model('admin_Model');
            $query = $this->craiglistmodel->logincheckeradmin($loginfo);
    
            if ($query) {
                $this->session->set_userdata('id', $query['id']);
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
    }

 





?>