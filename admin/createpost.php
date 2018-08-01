<?php

require '../connect.php';

	if (isset($_POST['submit'])) 
	{
		$message = "";
		$title = $_POST['title'];
		$content = $_POST['content'];
		$user = "admin";
		$cur_date = date('Y-m-d H:i:s');
		$last_date = date('Y-m-d H:i:s');


		$query = "INSERT INTO post VALUES('','$user','$title','$content', '$cur_date', '$last_date')";

 		$result = mysqli_query($connection, $query);

 		if ($result) 
 		{
 			$_SESSION['username'] = $user;
 			header('Location: createpost.php');
 			$message = "Post was a success";	
 		}
 		else
 		{
 			header('Location: createpost.php');
 			$message = "sorry post failed";
 		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="						#bs-example-navbar-collapse-1" aria-expanded="false">
        	<span class="sr-only">Toggle navigation</span>
        	<span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
      	</button>
			<div class="navbar-header">
				<a href="#" class="navbar-brand"></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php">Blog</a></li>
					<li><a href="#">Contact</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php if(isset($_SESSION['admin']))
						{
								echo 
							  	 $_SESSION['admin'].
							  	 "
								<span class='caret'></span></a>
								<ul class='dropdown-menu'>
								<li><a href='../logout.php'>Logout</a></li>
								</ul>

							";	
						}
						else
						{
							echo 
							"
								<span class='caret'></span></a>
								<ul class='dropdown-menu'>
								<li><a href='login.php'>Login</a></li>
								<li><a href=register.php'>Signup</a></li>
								</ul>

							";	
						}
						?>
					</li>
				</ul>
			</div>
		</div>
	</nav>



	<header class="bg-primary text-white">
      <div class="container text-center">
        <h1>WELCOME</h1>
      </div>
    </header>
  
<div class="container col-md-8 col-md-offset-2">
	<div class="well well bs-component">
		<form class="form-horizontal" method="post">
			<?php
			/* <p class="alert alert-danger"><?php //echo $error ?></p>

			<div class="alert alert-success">
			<?php echo $success?>
			</div>
			*/
			?>
			<fieldset>
				<legend>Create a new post</legend>
				<div class="form-group">
					<label for="title" class="col-lg-2 control-label">Title</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" placeholder="Title" name="title">
					</div>
				</div>

				<div class="form-group">
					<label for="content" class="col-lg-2 control-label">Content</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3" name="content" style="width: 785px; height: 392px;"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<button type="reset" class="btn btn-default">Cancel</button>
						<button type="submit" class="btn btn-primary" name="submit">Submit</button>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>


	<footer class="footer">
			<div class="small-print">
			<div class="container">
				<h3></h3>
				<p p class="m-0 text-center text-white">Copyright &copy; 2018</p>
			</div>
		</div>
	</footer>		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>
