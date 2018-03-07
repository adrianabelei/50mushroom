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
                        </div>

<br><br>
   </div>

<br>
<br>
   <table class="table table-striped table-hover table-users">
                <thead>
                    <tr>
                        
                        <th class="hidden-phone">title</th>
                        <th class="hidden-phone">tag</th>
                        <th class="hidden-phone">date</th>
                        <th class="hidden-phone">details</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($results as $item ) {
                        # code...
                    ?>
                    <tr>
                        
                        <td ><?=$item['title'] ?></td>
                        <td><?=$item['tag'] ?></td>
                        <td><?=$item['created_at'] ?></td>
                        
                        <td > <span class="project-details"><a href="detailpost/<?= $item['id'] ?>">details</span></td>

                    <?php } ?>

<div class="form-group">
   
     <label for="exampleInputFile">Upload logo</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    
  </div>
                

                        <td><a class="btn mini blue-stripe" href="{site_url()}admin/editFront/1">Edit</a></td>

                        <td><a href="#" class="confirm-delete btn mini red-stripe" role="button" data-title="johnny" data-id="1">Delete</a></td>
                    </tr>
                   </tbody>

            </table>