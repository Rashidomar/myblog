<?php
	//connecting to the database server

	session_start();
	
	$servername = "localhost";
	$username = "root";
	$password  = "";
	$db_name = "blog";

	$connection = mysqli_connect($servername,$username, $password, $db_name );

	if($connection){
		
	}
	else
	{
		die(mysqli_error($connection));
	}

 ?>