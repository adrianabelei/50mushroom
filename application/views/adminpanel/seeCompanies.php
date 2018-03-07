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
                        
                        <th class="hidden-phone">Campany Name</th>
                        <th class="hidden-phone">Email</th>
                        <th class="hidden-phone">Adress</th>
                        <th class="hidden-phone">Details</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    
                   <?php foreach ($results as $item ) {
                        # code...
                    ?>
                    <tr>
                         
                        <td ><?=$item['company_name'] ?></td>
                        <td><?=$item['email'] ?></td>
                        <td><?=$item['adress'] ?></td>
                        <td > <span class="project-details"><a href="detailsCompany/<?= $item['id'] ?>">Click_me</span></td>
                        </tr>   
                    <?php } ?>
                   </tbody>

            </table>










</body>