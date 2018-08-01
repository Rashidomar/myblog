<?php

	include 'connect.php';

	session_start();

	if ($_POST['check'] == 'update') 
	{
		$cur_date = date('Y-m-d H:i:s');
		$user_id = $_SESSION['user_id'];

		if (isset($_POST['check']))
	  	{

			$query_1 = "UPDATE user SET last_activity = '$cur_date' WHERE user_id = '$user_id'";

			$result = mysqli_query($connection, $query_1);
	   	}

	}


		if ($_POST['check'] == 'check') 
		      {
		      	$query_1 = "SELECT * FROM user WHERE last_activity > DATE_SUB(NOW(), INTERVAL 30 SECOND)";

			  	$result_1 = mysqli_query($connection, $query_1);
	
			  	foreach ($result_1 as $row) 
	  			{
	  				echo "<ul>";
	  				echo "<li>" .$row['username'] .' ' .$row['last_activity'] ."</li>";
	  				echo "</ul>";
	  			}

		      }


?>