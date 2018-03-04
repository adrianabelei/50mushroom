<!DOCTYPE html>
<html>

   
   <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log In|Registration</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href=style.css rel="stylesheet"> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>




<body>
  <div class="container">
    <div class="col-md-6">
   
    <div id="logbox1">
      <form id="signup" method="post" action="/signup">
        <h1>Create an account</h1>
        <input name="name" type="text" placeholder="Company name" class="input pass"/>
        <input name="password" type="password" placeholder="Choose a password" class="input pass"/>
        <input name="password" type="password" placeholder="Confirm password" class="input pass"/>
        <input name="email" type="email" placeholder="Email address" class="input pass"/>
        <input type="submit" value="Sign me up!" class="inputButton"/>
        <div class="text-center">
            <p>Already have an account? <a href="#" id="login_id">Log In</a></p>
        </div>
      </form>
    </div>
   </div>
  
    
   <div class="col-md-6">
    <div id="logbox2">
      <form id="signup" method="post" action="/signup">
        <h1>Log In</h1>
        <input name="email" type="email" placeholder="Enter your email" class="input pass"/>
        <input name="password" type="password" placeholder="Enter your password" class="input pass"/>
        <input type="submit" value="Sign me in!" class="inputButton"/>
        <div class="text-center"">
                    <p><a href="#" id="">Create an account</a> - <a href="#" id="">Forgot password?</a></p>
                </div>
      </form>
    </div>
    </div>
  </div>

</body>
</html>
