<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <form class="login-form" action="Nextlogin1.php" method="post">
        <div class="thumbnail">
          <img src="images/logo.png" alt="logo">
          <hr>
        </div>
        <div class="row">
          <div class="form-group col-sm-6">
            <label>Firstname</label>
            <input type="text" class="form-control" name="fname" id="firstname" placeholder="Enter firstname">
          </div>
          <div class="form-group col-sm-6">
            <label>Lastname</label>
            <input type="text" class="form-control" id="lastname" name="lname" placeholder="Enter lastname">
          </div>

          <div class="form-group col-sm-6">
            <label>Username</label>
            <input type="text" class="form-control" id="username" name="Uname" placeholder="Enter Username">
          </div>

        </div>
        <div class="form-group">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="gender" value="male" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">Male</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="gender" value="female" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline2">Female</label>
          </div>
        </div>
        <div class="form-group">
          <label>Email address</label>
          <input type="email" class="form-control"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
        </div>
          <div class="form-group align-right" style="margin-top:40px;">
            <button type="submit" name="submit" class="btn btn-outline-success btn-lg">Next</button>
          </div>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="bootstrap.js"</script>


    <?php

    require_once("connection.php");

    session_start();


    ?>
  </body>
</html>
