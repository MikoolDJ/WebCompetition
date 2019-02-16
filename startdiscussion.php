<?php
session_start();

if (isset($_SESSION['login']) && $_SESSION["login"] == "OK") {
  $use = true;
}

else{
  $use = false;
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Ask a question</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark sticky-top">
    <div class="container">
      <a class="navbar-brand thumbnail" href="homepage.php">
        <img src="images/logo-no-bg.png" height="35" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="all post.php">Discussions</a>
          </li>
        </ul>
        <div class="nav-item" id="Login">
          <a class="nav-link format-text" href="login1.php">Login</a>
        </div>

        <div class="nav-item" id="signUp">
          <a class="nav-link format-text" href="signup-page.php">Sign Up</a>
        </div>

        <?php
        if($use == true)
        {

          echo '<div class="nav-item" id="Logout" onclick="change1();">
          <a class="nav-link format-text" href="logout.php">Logout</a>
          </div>';

          echo "<script type='text/javascript'>

          document.getElementById('Login').style.display = 'none';
          document.getElementById('signUp').style.display = 'none';

          </script>";
        }
        ?>


      </div>
    </div> <!-- end of container class for navbar contents -->
  </nav>


  <div class="container upper-margin">

    <form action="add_question.php" method="post">

      <div class="card">
        <h5 class="card-header">Ask your question</h5>
        <div class="card-body">
          <div class="form-group">
            <h5 class="card-title">Title</h5>
            <input type="text" name="qutitle" placeholder="Enter question title" class="form-control" required>
          </div>
          <div class="form-group">
            <h5 class="card-title">Description</h5>
            <textarea class="form-control" name="description" id="qudescription" rows="5" placeholder="Enter description" required></textarea>
          </div>
          <div class="form-group">
            <h5 class="card-title">Choose topics related to your question</h5>
            <div class="alphabet-link-container">
              <a class="alphabet-link" href="#a1">A</a>
              <a class="alphabet-link" href="#b1">B</a>
              <a class="alphabet-link" href="#c1">C</a>
              <a class="alphabet-link" href="#d1">D</a>
              <a class="alphabet-link" href="#e1">E</a>
              <a class="alphabet-link" href="#f">F</a>
              <a class="alphabet-link" href="#g">G</a>
              <a class="alphabet-link" href="#h">H</a>
              <a class="alphabet-link" href="#i">I</a>
              <a class="alphabet-link" href="#j">J</a>
              <a class="alphabet-link" href="#k">K</a>
              <a class="alphabet-link" href="#l">L</a>
              <a class="alphabet-link" href="#m">M</a>
              <a class="alphabet-link" href="#n">N</a>
              <a class="alphabet-link" href="#o">O</a>
              <a class="alphabet-link" href="#p">P</a>
              <a class="alphabet-link" href="#q">Q</a>
              <a class="alphabet-link" href="#r">R</a>
              <a class="alphabet-link" href="#s">S</a>
              <a class="alphabet-link" href="#t">T</a>
              <a class="alphabet-link" href="#u">U</a>
              <a class="alphabet-link" href="#v">V</a>
              <a class="alphabet-link" href="#w">W</a>
              <a class="alphabet-link" href="#x">X</a>
              <a class="alphabet-link" href="#y">Y</a>
              <a class="alphabet-link" href="#z">Z</a>
            </div>
          </div>
          <hr>
          <div class="login-form login-form-lg no-margin">
            <div class="form-group">
              <form class="login-form login-form-lg" action="add_question.php" method="post">
                <h3 id="a">A</h3>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="artificial intelligence" id="a1">
                      <label class="form-check-label" for="a1">
                        Artificial Intelligence
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="android" id="a2">
                      <label class="form-check-label" for="a2">
                        Android
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="accounting" id="a3">
                      <label class="form-check-label" for="a3">
                        Accounting
                      </label>
                    </div>
                  </div>

                </div> <!--  alphabet A ends here -->

                <hr>
                <h3 id="b">B</h3>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="business" id="b1">
                      <label class="form-check-label" for="b1">
                        Business
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="blockchain" id="b2">
                      <label class="form-check-label" for="b2">
                        Blockchain
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="bitcoin" id="b3">
                      <label class="form-check-label" for="b3">
                        Bitcoin
                      </label>
                    </div>
                  </div>

                </div>


                <hr>
                <h3 id="c">C</h3>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Computer Science" id="c1">
                      <label class="form-check-label" for="g1">
                        Computer Science
                      </label>
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Crptocurrency" id="c2">
                      <label class="form-check-label" for="g1">
                        Crptocurrency
                      </label>
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="C++" id="c3">
                      <label class="form-check-label" for="g1">
                        C++
                      </label>
                    </div>
                  </div>
                </div>

                <hr>
                <h3 id="d">D</h3>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="database" id="d1">
                      <label class="form-check-label" for="p1">
                        Database
                      </label>
                    </div>
                  </div>


                  <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Developer" id="d2">
                      <label class="form-check-label" for="p1">
                        Developers
                      </label>
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="data mining" id="d3">
                      <label class="form-check-label" for="p1">
                        Data mining
                      </label>
                    </div>
                  </div>
                </div>

                <hr>
                <h3 id="e">E</h3>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Engineering" id="e1">
                      <label class="form-check-label" for="t1">
                        Engineering
                      </label>
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="E-commerce" id="e2">
                      <label class="form-check-label" for="t1">
                        E-Commerce
                      </label>
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Encryption" id="e3">
                      <label class="form-check-label" for="t1">
                        Encryption
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group align-right upper-margin">
            <button type="submit" name="submit" class="btn btn-primary">Submit question</button>
          </div>

        </div>
      </form>
    </div>  <!-- end of container class -->



    <!-- Footer -->
<footer class="page-footer font-small dark-background upper-margin">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="homepage.php"> DRC</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


  </body>
  </html>
