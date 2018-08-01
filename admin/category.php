<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Creata A Post Category</title>
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

<fieldset>
<legend>Create a new category</legend>
<div class="form-group">
<label for="name" class="col-lg-2 control-label">Name</label>
<div class="col-lg-10">
<input type="text" class="form-control" id="name" name="name">
</div>
</div>
<div class="form-group">
<div class="col-lg-10 col-lg-offset-2">
<button type="reset" class="btn btn-default">Cancel</button>
<button type="submit" class="btn btn-primary">Submit</button>
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
