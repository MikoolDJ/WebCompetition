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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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

.dislike{
	background:red;
}

.dislike:hover{
	background:darkred;
}

.space{
	margin-top:10px;
}

#form7{
	height:200px;
}

#comment-area{
	display:none;
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

				<div class="card">
					<h5 class="card-header"><img src="https://bit.ly/2WszwcK">&nbsp<?php
					require_once("connection.php");
					$id = isset($_GET['id']) ? $_GET['id'] : '';
					$sql = "select title from question where id='$id'";
					$qry = mysqli_query($con,$sql) or die(mysqli_error($con));
					$row = mysqli_fetch_array($qry);
					echo $row['title'];
					?></h5>
					<div class="card-body">
						<table class="table w-auto">
							<tbody>
								<h6>username: 	<?php
								require_once("connection.php");
								$sql = "select username from question where id='$id'";
								$qry = mysqli_query($con,$sql) or die(mysqli_error($con));
								$row = mysqli_fetch_array($qry);
								echo $row['username'];
								?></h6>
								<tr>
									<td>
										<img src="https://bit.ly/2WszwcK">
									</td>
									<td>
										<?php
										require_once("connection.php");
										$sql = "select description from question where id='$id'";
										$qry = mysqli_query($con,$sql) or die(mysqli_error($con));
										$row = mysqli_fetch_array($qry);
										echo $row['description'];
										?>
									</td>
								</tr>

							</tbody>
						</table>

					</div>

					<div class="card-footer text-muted">

						<button class="btn btn-primary" style="color:white;" onclick="document.getElementById('comment-area').style.display='block'">Comment</button>



						<a href="CheckLike.php?id=<?php echo $id ?>" class="btn btn-primary"><i class="far fa-thumbs-up"></i></a><span ><?php
						require_once("connection.php");

						$sql = "select likes from question where id='$id'";
						$qry = mysqli_query($con,$sql) or die(mysqli_error($con));
						$row = mysqli_fetch_array($qry);
						echo $row['likes'];
						?>
					</span>

					<a href="CheckdisLike.php?id=<?php echo $id ?>" class="btn btn-primary dislike"><i class="far fa-thumbs-down"></i></a><?php
					require_once("connection.php");
					$sql = "select dislikes from question where id='$id'";
					$qry = mysqli_query($con,$sql) or die(mysqli_error($con));
					$row = mysqli_fetch_array($qry);
					echo $row['dislikes'];
					?>

					<a href="Checkflag.php?id=<?php echo $id ?>" class="btn btn-primary"><i class="far fa-flag"></i></a><?php
					require_once("connection.php");
					$sql = "select flags from question where id='$id'";
					$qry = mysqli_query($con,$sql) or die(mysqli_error($con));
					$row = mysqli_fetch_array($qry);
					echo $row['flags'];
					?>

				</div>

			</div>

			<div id="result">

			</div>

			<form method="post" action="add_comment.php?id=<?php echo $id;?>">

				<div class="card space" id="comment-area">
					<div class="card-header">

						<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="document.getElementById('comment-area').style.display='none'">
							<span aria-hidden="true">&times;</span>
						</button>

						<h5>Enter your comment</h5>

					</div>


					<div class="card-body">

						<div class="md-form">
							<textarea type="text" id="form7" class="md-textarea form-control" rows="3" name="comm"></textarea>
							<label for="form7"></label>
						</div>

						<button type="submit" name="submit" class="btn btn-primary">Post</button>

					</form>



				</div>
			</div>

			<?php
			require_once("connection.php");

			$sql = "select * from comment_section where q_id='$id'";
			$qry = mysqli_query($con,$sql) or die(mysqli_error($con));

			while($row = mysqli_fetch_array($qry)){ ?>

				<div class="card space">
					<div class="card-header">
						<h5>Comment</h5>
					</div>
					<div class="card-body">

						<h6 class="card-title">Username: <?php echo $row['username'];?></h6>
						<p class="card-text"><?php echo $row['comment'];?></p>

					</div>
				</div>

			<?php } ?>


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
