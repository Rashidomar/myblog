<?php
 	require 'connect.php';

 	$message = "";

 if (isset($_POST['logIn'])) 
 {
 	$name = $_POST['name'];
 	$password = $_POST['password'];

 	$query = "SELECT * FROM users WHERE name = '$name' AND password = 
 	'$password' ";

 	$results = mysqli_query($connection, $query);

 	$rows = mysqli_num_rows($results);

 	if ($rows == 1) 
 	{
 		foreach ($results as $result) 
 		{
 			$_SESSION['user_id'] = $result['user_id'];
 			$_SESSION['username'] = $result['name'];
 			//$_SESSION['last_activity'] = $result['last_activity'];
 		}

 			header("Location: index.php");
 	
 	}
 	else
 	{
 		header("Location: login.php");

 		$message = "Wrong details.. Try agin";
 	}
 }

  if (isset($_POST['admin'])) 
 {
 	$username = $_POST['name'];
 	$password = $_POST['password'];

 	$query = "SELECT * FROM admin WHERE username = '$username' AND password = 
 	'$password' ";

 	$results = mysqli_query($connection, $query);

 	$rows = mysqli_num_rows($results);

 	if ($rows == 1) 
 	{
 		foreach ($results as $result) 
 		{
 			$_SESSION['admin_id'] = $result['admin_id'];
 			$_SESSION['admin'] = $result['username'];
 		}

 			header("Location: index.php");
 	
 	}
 	else
 	{
 		header("Location: login.php");

 		$message = "Wrong details.. Try agin";
 	}
 }



?>

<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container col-md-6 col-md-offset-3" id="login_container">
			<form class="form-horizontal" method="post">
				<legend><h3>Log In</h3></legend>
					<div class="form-group">
						<label class="col-lg-2 control-label">Name</label>
						<span id="message"></span>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="name" name="name">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Password</label>
						<div class="col-lg-10">
							<input type="password" class="form-control" name="password" id="password">
						</div>
					</div>
					<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<button type="submit" class="btn btn-primary" id="login" name="logIn" >login</button>
						<button type="submit" class="btn btn-primary" id="login" name="admin" >login as Admin</button>
					</div>
			</form>
	</div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/valid.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>