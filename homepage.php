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
  <title>Find jobs, learning resources, ...</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="bootstrap.css">
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

  <!-- END OF NAVIGATION -->
  <div class="container upper-margin">
    <div class="row">

      <!-- <div class="col-lg-3">

        <div class="card h-100" style="width: 18rem;">
          <img src="images/mauritius.jpg" class="card-img-top" alt="">
          <div class="card-body mx-auto">
            <p class="card-text"><a class="btn btn-primary" id="qu" href="CheckButton.php" role="button">Start a discussion</a></p>
          </div>
        </div>

      </div> -->

      <div class="col-lg-8" >

        <div class="card h-100">
          <h5 class="card-header">Latest Post · <a class="btn btn-primary" id="qu" href="CheckButton.php" role="button">Start a discussion</a></h5>
          <div class="card-body mx-auto">
            <table class="table">
              <tbody>

                <?php
                require_once("connection.php");
                $sql = "SELECT * FROM question ORDER BY id DESC LIMIT 0, 5";
                $qry = mysqli_query($con,$sql) or die(mysqli_error($con));
                while($row = mysqli_fetch_array($qry)){
                  ?>

                  <tr>
                    <td>
                      <img src="https://bit.ly/2WszwcK">
                    </td>
                    <td>
                      <a href="message.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a>
                    </td>
                  </tr>
                <?php	} ?>

              </tbody>
            </table>
            <!-- <a href="" class="btn btn-primary">Next page</a> -->
          </div>
        </div>

      </div>
      <!-- posts end here -->

      <div class="col-lg-4">
        <div class="card h-100">
          <div class="card-body card-mauritius-background">
            <h1><label class="search-job-heading">FIND JOBS IN MAURITIUS</label></h1>

            <form class="form-style-4" action="" method="post">
              <div class="form-group">
                <label for="field1">
                  <span>Job Title</span><input class="form-control" type="text" name="field1" required="true" />
                </label>
              </div>

              <div class="form-group">
                <select class="form-control" name="Location"><option value="">Location</option>
                  <option value="92">Black River</option>
                  <option value="93">Flacq</option>
                  <option value="94">Grand Port</option>
                  <option value="95">Moka</option>
                  <option value="97">Pamplemousses</option>
                  <option value="98">Plaine Wilhems</option>
                  <option value="99">Port Louis</option>
                  <option value="100">Riviere du Rempart</option>
                  <option value="189">Rodrigues</option>
                  <option value="101">Savanne</option>
                  <option value="0">------------</option>
                  <option value="440">Mauritius</option>
                  <option value="96">Overseas</option>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control"><option value=""> Categories</option>
                  <option value="24">Accounting</option>
                  <option value="24">Finance</option>
                  <option value="25">Administrative</option>
                  <option value="27">Agriculture</option>
                  <option value="28">Banking</option>
                  <option value="29">Call Centers</option>
                  <option value="30">Construction</option>
                  <option value="30">Architecture</option>
                  <option value="32">Education </option>
                  <option value="33">Engineering</option>
                  <option value="33">Electronics</option>
                  <option value="33">Mechanics</option>
                  <option value="37">Medical</option>
                  <option value="38">HR / Recruiting</option>
                  <option value="43">Logistics</option>
                  <option value="44">Management</option>
                  <option value="45">Manufacturing</option>
                  <option value="46">Marketing</option>
                  <option value="48">Science</option>
                  <option value="50">Public Sector</option>
                  <option value="55">Sports / Arts</option>
                  <option value="57">Textile</option>

                </select>
              </div>
              <div class="form-group">
                <label>
                  <span> </span><input class="form-control" type="submit" value="search" />
                </label>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- start of top news -->

    <div class="top-news">
      <h4 >Latest top news</h4>
      <div class="row quotes">
        <div class="col-md-4 add-padding">
          <h2>
            Pepper in Mauritius
          </h2>
          <p>
            Meet pepper the friendly humanoid robot at PrimeCafe, NexTeracom Building, Ebene.
          </p>
          <p>
            <a class="btn btn-info" href="https://www.lexpress.mu/article/346713/intelligence-artificielle-robot-pepper-maurice-ce-mardi">View details</a>
          </p>
        </div>

        <div class="col-md-4 add-padding">
          <h2>
            5 credits for lower six
          </h2>
          <p>
            Read more about this new communique from the ministry. Are you affected by it?
          </p>
          <p>
            <a class="btn btn-info" href="https://www.lexpress.mu/article/346399/examens-jeunes-bloques-au-niveau-sc">View details</a>
          </p>
        </div>

        <div class="col-md-4 add-padding">
          <h2>
            Sophia
          </h2>
          <p>
            The first time an AI robot coming in mautitius.
          </p>
          <p>
            <a class="btn btn-info" href="https://www.lexpress.mu/article/343625/robot-sophia-world-ai-show-mo-mari-kontan-mo-moris">View details</a>
          </p>
        </div>
      </div>
    </div>

    <!-- start of quotes -->
    <h4 style="margin-top: 4%">What people says about us</h4>
    <div class="row quotes">
      <div class="col-md-4 h-50">
        <blockquote class="blockquote text-right">
          <p class="mb-0">"Since I introduced my students to this website, I noticed a major positive change in their performance thanks to the website readily available resources."</p>
          <footer class="blockquote-footer">Dr. Abubakr, <cite title="Source Title">MIT Lecturer</cite></footer>
        </blockquote>
      </div>
      <div class="col-md-4 h-50">
        <blockquote class="blockquote text-right">
          <p class="mb-0">"Easy. Intuitive. All rounded. The place to be for learning."</p>
          <footer class="blockquote-footer">Michael Didier, <cite title="Source Title">UoM student</cite></footer>
        </blockquote>
      </div>
      <div class="col-md-4 h-50">
        <blockquote class="blockquote text-right">
          <p class="mb-0">"The student website which was missing on the internet."</p>
          <footer class="blockquote-footer">Dr. Oumeir, <cite title="Source Title">CEO DreamWeb</cite></footer>
        </blockquote>
      </div>
    </div>

  </div>
  <!-- end of container class -->

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
