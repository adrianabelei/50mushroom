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
                  

<div class="row" style="margin-left:40px;">
                    <div class="col-lg-12 ">
                        <div class="alert alert-warning">
                             <strong>Welcome USER  </strong> 
                             <a href="/index" class="pull-right"><i class="icon-arrow-left"></i>Back</a>
                        </div>
                    
<br><br>
   </div>

<br>
<br>
   <table class="table table-striped table-hover table-users">
                
                        
                   
                   <thead>
                    <tr>
                        
                        <th class="hidden-phone">Company Name</th>
                        <th class="hidden-phone">Email</th>
                        <th class="hidden-phone">Address</th>
                        <th class="hidden-phone">Delete</th>
                        <th class="hidden-phone">Decide</th>
                        <th class="hidden-phone">Details</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                   
                   <?php
                    if ($results){
                   foreach ($results as $item ) {
                                if ($item['isdecided']!=1){

                                                    # code...
                    ?>
                    <tr>
                         
                        <td ><?=$item['company_name'] ?></td>
                        <td><?=$item['email'] ?></td>
                        <td><?=$item['adress'] ?></td>
                        <td> <span class="project-details"><a href="deleteCompany1/<?= $item['id'] ?>">Delete</span></td>
                        <td> <span class="project-details"><a href="acceptCompany/<?= $item['id'] ?>">Accept</span></td>
                        <td> <span class="project-details"><a href="detailsCompany/<?= $item['id'] ?>">Details</span></td>
                        </tr>   
                    <?php
                                }  
                    else{


                    }
                }
            }
            else{


            }
                    
                    ?>
                   </tbody>

            </table>










</body>