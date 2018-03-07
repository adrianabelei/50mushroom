<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Users Panel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url(); ?>assets/adminpanel/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url(); ?>assets/adminpanel/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url(); ?>assets/adminpanel/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="http://res.cloudinary.com/dwtoixcjm/image/upload/c_scale,w_189/v1520097047/vc_ypxqnf.png" />
                    </a>
                </div>
              
                 <span class="logout-spn" >
                  <a href="/logout" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
        <?php 
if(null !==($this->session->userdata('id_admin')) && null !==($this->session->userdata('email_admin')))
{
    echo '<center><h1>Hello :'.$this->session->userdata('email_admin').'</h1></center>';
}
?>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 
                <?php 
if(null !==($this->session->userdata('id_superAdmin')) && null !==($this->session->userdata('email_superAdmin')))
{
    echo '<center><h1>Hello :'.$this->session->userdata('email_superAdmin').'</h1></center>';

?>

                     <li >
                        <a href="indexadminpanel.php" ><i class="fa fa-desktop "></i>Dashboard </a>
                    </li>
                   
<?php 
}
?>
                    <li>
                        <a href="admin.php"><i class="fa fa-table "></i>Admin access </a>
                    </li>
                    


                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>USERS DASHBOARD </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <hr />
                  <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-warning">
                             <strong>Welcome USER  </strong> 
                        </div>

                            <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="seeUser" >

                    <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>See Companies</h4>

                   
                      </a>
                      </div>


                     </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="manageposts.php" >

 <i class="fa fa-lightbulb-o fa-5x"></i>
                      <h4>See Posts</h4>

                      </a>
                      </div>

                         
    </div>
             <!-- /. PAGE INNER  -->
    </div>
         <!-- /. PAGE WRAPPER  -->
        
    















     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
