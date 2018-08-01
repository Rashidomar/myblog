<?php
	require "../connect.php";

	$message = "";

	$query = "SELECT * FROM post";

	$results = mysqli_query($connection, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>All Post</title>
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
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">hello
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
<div class="panel panel-default">
<div class="panel-heading">
<h2> All posts </h2>
</div>


<?php
if (mysqli_num_rows($results) == 0) 
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
	echo 
	"
		<table class='table'>
		<thead>
		<tr>
		<th>ID</th>
		<th>user</th>
		<th>Title</th>
		<th>Created At</th>
		<th>Updated At</th>
		</tr>
		</thead>
		<tbody>	
	";

	foreach($results as $result)
 	{
 		echo 
 		"
 		<tr>
			<td>".$result['post_id']."</td>
			<td>
			<a href='#''>".$result['user_id']."</a>
			</td>
			<td>".$result['title']."</td>
			<td>".$result['post_date']."</td>
			<td>".$result['last_update']."</td>
		</tr>
 		";
 }

}
?>

<tr>
<td></td>
<td>
<a href="#"> </a>
</td>
<td></td>
<td></td>
<td></td>
</tr>

</tbody>
</table>

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