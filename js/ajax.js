$(document).ready(function () {

		$('#post').click(function (e) {
		//stop or cancel the submission of form data
		e.preventDefault();

		var message = $('#comment').val();

		if (message == '') 
		{

			$("#comment").focus();
			return false;

		}
		else
		{

			//send user input to database
			$.ajax({
					type: "POST",
					url: "comment.php",
					//passing data to the server
					data: {
						//user_name :name,
						user_comment: message,
					 },
					
			});
		}
			
	});

	//load chat every 20000 millisecond
	setInterval(function () {update();},10);

	//load chat from database 
	function update() {
		$.ajax({
			type: 'POST',
			url: 'comment.php',
			data: {data :'update'},
			 success:function (data) {
						$('#comment_box').html(data);
					}
	
			});
	}

})




	

