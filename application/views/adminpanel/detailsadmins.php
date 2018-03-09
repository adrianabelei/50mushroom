<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CONTROL PANEL</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
<body>
<hr />
                  

<div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-warning">
                             <strong>Welcome USER  </strong> 
                        </div>
                    
<br><br>
   </div>

<br>
<br>

   <table class="table table-striped table-hover table-users">
                
                        
                   
                   <thead>
                    <tr>
                        
                        <th class="hidden-phone">First Name<?= $results['first_name'] ?></th><br>
                        <th class="hidden-phone">Last Name<?= $results['last_name'] ?></th><br>
                        <th class="hidden-phone">Email<?= $results['email'] ?></th><br>
                        <th class="hidden-phone">Password<?= $results['password'] ?></th><br>

                        <th></th>
                    </tr>
                </thead>

                <a class="btn btn-inverse pull-left" type="submit" href="adminEdit/<?= $results['id'] ?>">Edit</button>
                    
                    <a href="/seeAdmin" class="pull-right"><i class="icon-arrow-left"></i>Back</a>
