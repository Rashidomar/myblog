<?php
	require 'connect.php';

	if (isset($_POST['submit'])) 
	{
		$join_date = date('Y-m-d H:i:s');
		$status = 1;
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

 		$query = "INSERT INTO users VALUES('','$name','$email','$password', '$join_date', '$status')";

 		$result = mysqli_query($connection, $query);

 		if ($result) 
 		{
 			$_SESSION['username'] = $name;
 			header('Location: index.php');	
 		}
 		else
 		{
 			header('Location: register.php');
 		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
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
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container col-md-6 col-md-offset-3" id="signup_container">
			<form class="form-horizontal" method="post">
				<legend><h3>Register an account</h3></legend>
					<div class="form-group">
						<label class="col-lg-2 control-label">Name</label>
						<span id="message"></span>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="name" name="name">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Email</label>
						<div class="col-lg-10">
							<input type="email" class="form-control" id="email" name="email">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Password</label>
						<div class="col-lg-10">
							<input type="password" class="form-control" name="password" id="password">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Confirm password</label>
						<div class="col-lg-10">
							<input type="password" class="form-control" name="password_confirmation" id="con_password">
						</div>
					</div>
					<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<button type="submit" class="btn btn-primary" id="reg" name="submit">Submit</button>
					</div>
			</form>
	</div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/valid.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>