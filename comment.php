<?php
		require 'connect.php';
		//when submit comment is clicked 
		if (isset($_POST['user_comment'])) 
	 	{
	 		$post_id = $_SESSION['post_id'];
	 		$user = $_SESSION['username'];
	 		$comment = $_POST['user_comment'];
	 		$date = date('Y-m-d H:i:s');

	 		//inserting comment into the database
	 		$insert = "INSERT INTO comments VALUES('','$post_id', '$user', '$comment', '$date')";

	 		//$results = $db->query($query);

			$results = mysqli_query($connection, $insert);

	 	}


	 	if ($_POST['data'] == 'update') 
		    {
		      	$query = "SELECT * FROM comments";

			  	$results = mysqli_query($connection, $query);
	
			  	foreach ($results as $result) 
	  			{
	  				echo "
	  						<div class='well well bs-component'>
		  					<div class='media'>
							<img class='media-object pull-left' src='/bootstrap/images/64.jpg' alt='Media Object'>
							<div class='media-body'>
							<h4 class='media-heading'>".$result['user_id']."</h4>
							".$result['comment']."
							</div>
							</div>
							</div>			
							";
	  			}

		     }
?>