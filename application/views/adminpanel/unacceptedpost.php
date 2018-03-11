<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CONTROL PANEL</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/adminpanel/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/adminpanel/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/adminpanel/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>


<body>
<hr />
                  <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-warning">
                             <strong>Welcome USER  </strong>
                             <a href="/index" class="pull-right"><i class="icon-arrow-left"></i>Back</a> 
                        </div>

<br><br>
   </div>

<br>
<br>
   <table class="table table-striped table-hover table-users" style="margin-left:30px;">
                <thead>
                    <tr>
                       
                        <th class="hidden-phone">title</th>
                        <th class="hidden-phone">tag</th>
                        <th class="hidden-phone">date</th>
                        <th class="hidden-phone">accept</th>
                        <th class="hidden-phone">delete</th>
                        <th class="hidden-phone">details</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    
                    foreach ($results as $item ) {
                    if ($item['is_decided']!=1)
                    {    # code...
                    ?>
                    <tr>
                         
                        <td ><?=$item['title'] ?></td>
                        <td><?=$item['tag'] ?></td>
                        <td><?=$item['created_at'] ?></td>
                        
                         <td > <span class="project-details"><a href="acceptposts/<?= $item['id'] ?>">Click</span></td>
                         <td > <span class="project-details"><a href="deletepost1/<?= $item['id'] ?>">Click</span></td>
                        <td > <span class="project-details"><a href="detailpostcompany2/<?= $item['id'] ?>">Click_me</span></td>
                        </tr>   
                    <?php  
                    }
                else{


                }
                
                }
                
                ?>

                

                        
                    
                   </tbody>

            
            </table>
