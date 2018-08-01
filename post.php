<?php
	require "connect.php";

		if ($_REQUEST['id']) 
		{
			$post_id = $_REQUEST['id'];

			$query = "SELECT * FROM post where post_id = '$post_id'";

			$results = mysqli_query($connection, $query);

			$rows = mysqli_num_rows($results);
		}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Design</title>
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
					<li><a href="index.php">Blog</a></li>
					<li><a href="#">Contact</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php if(isset($_SESSION['username']))
						{
							echo 
								$_SESSION['username']."
								<span class='caret'></span></a>
								<ul class='dropdown-menu'>
								<li><a href='logout.php'>Logout</a></li>
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
    	<?php
    	if ($rows == 0) 
    	{
    		echo 
    		"
    			<div class='alert alert-danger'>
					<p> There is no post.</p>
				</div>
    		";
    	}
    	else
    	{
    		foreach($results as $result)
    		{
    			echo "<div class='panel panel-default'>";
    			echo "<div class='panel-heading header'><h3>".$result['title']."</h3></div>";
    			echo "<div class='panel-body'><p>".$result['content']."</p></div>";
    			echo "</div>";

    			if (isset($_SESSION['username'])) 
    			{
    				echo 

    				"		
						<div class='content' id='comment_box'>

						</div>

    					<div class='well well bs-component col-lg-6'>
						<form class='form-horizontal' method='post' action=''>
						<fieldset>
						<legend>Post Comment</legend>
						<div class='form-group'>
						<div class='col-lg-12'>
						<textarea class='form-control' rows='3' id='comment'></textarea>
						</div>
						</div>
						<div class='form-group'>
						<div class='col-lg-10'>
						<button type'submit' class='btn btn-primary' id='post'>Post</button>
						</div>
						</div>
						</fieldset>
						</form>
						

						</div>
    			";
    			}

    		}		
    	}
    	?>
		
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
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/ajax.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
