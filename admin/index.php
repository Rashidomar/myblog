<?php
session_start();
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


	<div class="container" id="admin_panel">
		<div class="row banner">
			<div class="col-md-12">
				<div class="list-group">
					<div class="list-group-item">
						<div class="row-action-primary">
							<i class="mdi-social-person"></i>
						</div>
						<div class="row-content">
							<div class="action-secondary"><i class="mdi-social-info"></i></div>
							<h4 class="list-group-item-heading">Manage User</h4>
							<a href="users.php" class="btn btn-default btn-raised">All Users</a>
						</div>
					</div>
					<div class="list-group-separator"></div>
					<div class="list-group-item">
						<div class="row-action-primary">
							<i class="mdi-editor-border-color"></i>
						</div>
						<div class="row-content">
							<div class="action-secondary"><i class="mdi-material-info"></i></div>
							<h4 class="list-group-item-heading">Manage Posts</h4>
							<a href="allpost.php" class="btn btn-default btn-raised">All Posts</a>
							<a href="createpost.php" class="btn btn-primary btn-raised">Create A Post</a>
						</div>
					</div>
					<div class="list-group-separator"></div>
					<div class="list-group-item">
						<div class="row-action-primary">
							<i class="mdi-file-folder"></i>
						</div>
						<div class="row-content">
							<div class="action-secondary"><i class="mdi-material-info"></i></div>
							<h4 class="list-group-item-heading">Manage Categories</h4>
							<a href="#" class="btn btn-default btn-raised">All Categories</a>
							<a href="category.php" class="btn btn-primary btn-raised">New Category</a>
						</div>
						</div>
					<div class="list-group-separator"></div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>