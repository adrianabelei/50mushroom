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
      
         $this->load->model('Company_Model');
         $result['results']=$this->Company_Model->postsread();
          $this->load->view("index",$result);
    }


public function logout()
{
    session_destroy();
    $this->login;
}

    public function contact()
    {
        $this->load->view("companypanel/indexcompany");
    }
        
    

    //////// Login/Register Page /////////////
    public function joinpage()
    {
if($this->session->userdata('company_id'))
        {
            $this->load->view("companypanel/indexcompany");

        }
        else {
            {
$this->load->view('joinpage');  

            }
        }

    
    }
   public function companydetail()
   {
        $this->load->model('Company_Model');
         $result['results']=$this->Company_Model->companydetail();
         var_dump($result);
          $this->load->view("companypanel/companydetail",$result);
       
   }

    public function register()
    {
        $regInfo=$this->input->post(null, true);
        $this->load->library("form_validation");
        $this->form_validation->set_rules("name", "Company Name", "trim|required|alpha");
        $this->form_validation->set_rules("email", "email", "trim|required|min_length[4]|max_length[50]|valid_email");
        $this->form_validation->set_rules("password", "password", "trim|required|min_length[6]");
        $this->form_validation->set_rules("confirmPassword", "Confirm Password", "required|matches[password]");
    
        if ($this->form_validation->run() == FALSE)
        {
        $validationError = validation_errors();
        $this->load->view('joinpage', array('errors' => $validationError));
        }

    
        else 
        {
        $name=$this->input->post('name', true);
        $email=$this->input->post('email', true);
        $password=$this->input->post('password', true);
        $salt=sha1(openssl_random_pseudo_bytes(22));
        $encrypted_password = sha1($password . '' . $salt);
        $query=array(
            'company_name' => $name,
            'email' => $email,
            'password' => $encrypted_password,
            'salt_data' => $salt
        );
        $this->load->model('company_Model');
        $add_user=$this->company_Model->add_user($query);
        if($add_user){
            $message['success'] = "You are registered";       
            $this->load->view('joinpage', $message);
            } else{
                $error['error'] = validation_errors();
                $this->load->view('joinpage', $error); 
            }
        }
    }
    
   
  
    ////////////// Login /////////////////
    
    
    ///////////////// END OF THE CLASS////////////////////////

 
 
    ////////////// Login /////////////////
    public function login()
   {
       $email_login = $this->input->post('email', true);
       $password_login = $this->input->post('password', true);
       $this->load->model('company_Model');
       $user = $this->company_Model->get_user_by_email($email_login);
       $encrypted_password = sha1($password_login . '' . $user['salt_data']);
       if ($user && $user['password'] == $encrypted_password) {
           $user1 = array(
               'id' => $user['id'],
               'email' => $user['email'],
               'company_name' => $user['company_name'],
               
           );
           $this->session->set_userdata($user1);
           $this->session->set_userdata('company_id',$user1['id']);
           $this->load->view('companypanel/indexcompany', $user1);

       } else {
           $error['logerror'] = "Wrong password or email";
           $this->load->view('companypanel/indexcompany', $error);
       }
   }


    public function readpost()

    {
        $this->load->model('company_Model');
        $result=$this->company_Model->postsread();
        var_dump($result);
    } 




    
    ///////////////// END OF THE CLASS////////////////////////

 
 
    ////////////// Login /////////////////
    



    ///////////////// END OF THE CLASS////////////////////////

 function company()
{
    $this->load->view("companypanel/indexcompany");
}

 

function addpost()
    {
        $postform = $this->input->post(null, true);
        
        $image=$_FILES['image']['name'];
        $this->load->model('company_Model');
        $this->company_Model->addPost($postform,$image);
        $config['upload_path']= 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('image'))

                {
                    $data=0;
                        
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                }
       
        $this->load->view('companypanel/manageposts');
        
    }

    public function manage()
    {
        $this->load->view('companypanel/manageposts');
    }

    function detailpost($id)
    {
                
                $this->load->model('Company_Model');
                $result['results']=$this->Company_Model->postsOneRead($id);
                $this->load->view('show',$result);


    }


    public function seeposts()
    {
        $this->load->model('Company_Model');
        $result['results']=$this->Company_Model->postsOnecompany();
        $this->load->view("companypanel/seeposts",$result);;

    }

    

    public function detailpostcompany($id)
    {
         $this->load->model('Company_Model');
                $result['results']=$this->Company_Model->postsOneRead($id);
                $this->load->view('companypanel/seepostedit',$result);
        # code...
    }

    function editonepost($id){
        $this->session->set_userdata('company_updated_id', $id);
        $this->load->view('companypanel/editpost');


    }


     function companyeditpage(){
        
        $this->load->view('companypanel/companyedit');


    }

public function editonecompany()
{       $result=$this->input->post(null,false);
        $image=$_FILES['image']['name'];
        $id=$this->session->userdata('company_id');
        $this->load->model("Company_Model");
        $result2=$this->Company_Model->editonecompany($result,$id,$image);
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
                $this->load->view('companypanel/indexcompany');
}



     function editpost(){

        $result=$this->input->post(null,false);
        $image=$_FILES['image']['name'];
        $id=$this->session->userdata('company_upda
        ted_id');
        $this->load->model("Company_Model");
        $result2=$this->Company_Model->editone($result,$id,$image);
        
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
                $this->load->view('companypanel/indexcompany');

        


    }


 
}





?>