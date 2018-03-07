<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>CONTROL PANEL</title>
        <!-- BOOTSTRAP STYLES-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminpanel/css/bootstrap.css"/>
        <!-- FONTAWESOME STYLES-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminpanel/css/font-awesome.css" />
        <!-- CUSTOM STYLES-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminpanel/css/custom.css"/>
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        
        <style>
        body {
            width: 1000px;
            margin: auto;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        #contain {
            width: 1000px;
        }

        #header {
            padding: 10px;
        }

        .form-row {
            margin: 20px;
        }
    </style>
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

               </div>
            </div>
            <br><br><br>
            <!-- /. LOGIN FORM  -->
            <?php if(isset($errlog)){
            echo $errlog;
           
        }
         ?>
  
  <form action="login_admin" id="signup" method="post" > 
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-secondary">Submit</button>
</form>
</body>
</html>
    