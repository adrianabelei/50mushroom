<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CONTROL PANEL</title>
  <!-- BOOTSTRAP STYLES-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="assets/adminpanel/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
     
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/adminpanel/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <style>
        body {
            width: 1000px;
            margin: auto;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
</style>

</head>


<body>
  
 <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-warning">
                             <strong>Welcome USER  </strong> 
                        </div>

 
 <form action="/editonecompany" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleTextarea">Company Name</label>
    <textarea name = "company_name" class="form-control" id="exampleTextarea" rows="1" placeholder="Name"></textarea><br>
</div>
      
  <div class="form-group row">
  <div class="col-10">
  <label for="example-number-input" class="col-2 col-form-label">Email</label>
 
    <textarea name = "email" class="form-control" id="exampleTextarea" rows="1" placeholder="Email"></textarea><br>
   <label for="exampleInputFile">Upload Logo</label>
    <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
  </div>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Type</label>
    <textarea name = "type" class="form-control" id="exampleTextarea" rows="1" placeholder="Type"></textarea><br>
 <label for="exampleTextarea">Phone Number</label>
    <textarea name = "phonenumber" class="form-control" id="exampleTextarea" rows="1" placeholder="Phone Number"></textarea><br>
    <textarea name ="adress" class="form-control" id="exampleTextarea" rows="4" placeholder="adress"></textarea><br>
    <div class="form-group row">
  <div class="col-10">


  <br><br><br>

<button type="submit" class="btn btn-secondary btn-sm">Add</button>
<a href="login" class="pull-right"><i class="icon-arrow-left"></i>Back</a>
<br><br>


</form>
</body>