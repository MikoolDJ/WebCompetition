<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <form class="login-form" action="validatelogin.php" method="post">
        <div class="thumbnail">
          <img src="images/logo.png" alt="logo">
          <hr>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" placeholder="Enter username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" placeholder="Enter password" class="form-control">
        </div>
        <div class="row">
          <div class="col-6">
            <small class="form-text text-muted"><a href="#">Forgot password</a></small>
          </div>
          <div class="col-6">
            <div class="form-group align-right">
              <input type="submit" name="submit" value="submit" class="btn btn-primary">
            </div>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
