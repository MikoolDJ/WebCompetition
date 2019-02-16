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
	<title></title>

	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="style.css">


</head>


<style>

	.navbar .dropdown-menu a:hover {
		color: #616161 !important;
	}
	.darken-grey-text {
		color: #2E2E2E;
	}

	.dark {
		background: lightblue;
		color:black;
	}

	.dark a{
	color:black;
	}


</style>

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


	<div class="container-fluid upper-margin">
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<div class="card limit-height">
					<h5 class="card-header">Latest Post</h5>
					<div class="card-body">
						<table class="table">
							<tbody>

								<?php
								require_once("connection.php");
								$sql = "SELECT * FROM question ORDER BY id DESC";
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
		</div>
	</div>

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
