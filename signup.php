<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Web dev session</title>
    <style>
      body{
        background-color: #7ee8fa;
        background-image: linear-gradient(315deg, #7ee8fa 0%, #80ff72 74%);


      }
      .navbar {
            background-color: brown;
            padding-top: 10px;
            padding-bottom: 10px;

      }
    </style>
  </head>
  <body>
      <!--Navbar starts-->
      <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href ="#" style="color:whitesmoke;font-family: 'Courier New', Courier, monospace;">MY DYP - RAIT</a>
          <ul class="navbar-nav ml-auto"> 
              <li class="navbar-item active mr-1"><a class="nav-link" href="#" style="color:whitesmoke">HOME</a></li>
              <li class="navbar-item mr-1"><a class="nav-link" href="#" style="color:whitesmoke">LOG IN</a></li>
              <li class="navbar-item mr-1"><a class="nav-link" href="#" style="color:whitesmoke">SIGN UP</a></li>
          </ul>
      </nav>
    
      <!--navbar ends-->
      
      <div class="container-fluid" style="margin-top: 10%;">
          <div class="row">
              <div class="col-3">
              </div>
              <div class="col-6 text-center">                 
                  <form method="POST" action="signup_back.php">
                      <div class="form-group">
                        <h1 class="mb-3">SIGN UP FORM</h1>
                          <input name="username" class="form-fields mb-2 form-control" type="text" placeholder="Enter your username ">
                          <br>
                          <input  name="password" class="form-fields mb-2 form-control" type="password"placeholder="Enter your password">
                          <br>
                          <input  name="email" class="form-fields mb-2 form-control" type="email"placeholder="Enter your email">
                          <br>
                          <input  name="telephone" class="form-fields mb-2 form-control" type="telephone"placeholder="Enter your telephone">
                          <br>
                          <input type="hidden" language="english">
                          <input class="form-fields btn btn-success btn-lg" type="submit" value="Sign up now" name="SIGN UP">
                      </div>
                  </form>
            </div>
            <div class="col-3">
            </div>
          </div>
      </div>
      
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>