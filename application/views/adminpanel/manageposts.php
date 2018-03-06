<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CONTROL PANEL</title>
  <!-- BOOTSTRAP STYLES-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
     
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
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

 
 <form action="/addpost" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleTextarea">Post</label>
    <textarea name = "title" class="form-control" id="exampleTextarea" rows="1" placeholder="Title"></textarea><br>

    <textarea name ="description" class="form-control" id="exampleTextarea" rows="4" placeholder="Description"></textarea><br>
    <div class="form-group row">
  <div class="col-10">
  <label for="basic-url">Your URL</label>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon3"></span>
  <input type="text" name="link" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="www.website.com">
</div>
  
<div class="form-group">
    <label for="exampleInputFile">Upload image</label>
    <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    
  </div>
  </div>
</div>
      

<div class="form-group">
    <label for="exampleSelect1">Type of content</label>
    <select class="form-control" id="exampleSelect1">
    <option>Highlighted content</option>
      <option>Standard content</option>
      </select>
      </div>
     

  <div class="form-group">
    <label for="exampleSelect1">Tags</label>
    <select name ="tag" class="form-control" id="exampleSelect1">
    <option>Growth</option>
      <option>International</option>
      <option>City</option>
      <option>Talent</option>
      <option>Community</option>
      <option>Resilience</option>
      <option>Culture</option>
      <option>Digital</option>
      <option>Energy</option>
      <option>Inspiration</option>
    </select>
  </div>

  <div class="form-group row">
  <div class="col-10">
  <label for="example-number-input" class="col-2 col-form-label">Open positions</label>
 
    <input class="form-control" name ="vacancies" type="number"  id="example-number-input">
  <label for="example-number-input" class="col-2 col-form-label">Filled positions</label>
    <input class="form-control" name ="fiiled_position" type="number"  id="example-number-input">
  </div>
  </div>

  <br><br><br>

<button type="submit" class="btn btn-secondary btn-sm">Add</button>
<br><br>


</form>
</body>
