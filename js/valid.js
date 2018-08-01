$(document).ready(function(){
	$("#reg").click(function()
	{
		var name = $("#name").val();
		var email = $("#email").val();
		var password = $("#password").val();
		var confirm_password = $("#con_password").val();


	if (name == "" && email == "" && password == "")
	 {
	 	$("#message").text("All fields are required").css("color" , "red");
		$("#name").focus().css("color" , "red");
		return false;	 
	 }
	 else if(name == "" )
	 {
	 	$("#message").text("Name Please").css("color" , "red");
		$("#name").focus();
		return false;		
	 }
	 else if(email == "" )
	 {
	 	$("#message").text("Email Please").css("color" , "red");
		$("#email").focus();
		return false;		
	 }
	 else if(password == "" )
	 {
	 	$("#message").text("Password Please").css("color" , "red");
		$("#password").focus();
		return false;		
	 }
	 else if(password != confirm_password)
	 {
	 	$("#message").text("Password dont match !!!").css("color" , "red");
		$("#name").focus();
		return false;		
	 }
	
	});

})