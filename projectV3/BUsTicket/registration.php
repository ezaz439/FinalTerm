<?php	
	session_start();
	//if(!isset($_SESSION['number'])){  
	//	header("location: Login.php");
	//}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="registyle.css">
	<style>
		body{
	margin: 0;
	padding: 0;
	text-align: center;
	background: linear-gradient(rgba(0, 0, 50, 0.5),rgba(0,0,50,0.5)),url(registration.jpeg);
	background-size: auto;
	background-position: center;
	font-family: sans-serif;
	background-repeat: no-repeat;
	//background-color: yellow;
}
		
	</style>
</head>
<body>
	<?php
		require("../navbar/nav.php");
	?>
	<h1></h1>
	<form method="POST" action="registrationcheck.php">
	
		<legend>Registration</legend>
	<table>
		<tr>
			<td>Mobile Numer <br/><input type="text" id="phonenumber" name="phonenumber" value="" size="20" /></td>
			
		</tr>
		<tr>
			<td>Name <br/><input type="text" id="username" name="username" value="" size="20" /></td>
			
		</tr>
		<tr>
			<td>Password <br/> <input type="password" name="password" value=""/></td>
			
		</tr>
		<tr>
			<td>
			 	id <br/><input type="text" name="id" id="id" value=""/>
    	</td>
			
		</tr>
		<tr>
			
			<td>
				
				<label for="img">Select image:</label>
  				<input type="file" id="img" name="img" accept="image/*">
 				
				
			</td>
		</tr>
		<tr>
			
			<td>
				
				<input type="submit" name="submit" value="add"> 
				<input type="submit" name="update" value="Update">
				<input type="submit" name="delete" value="Delete">
				<input type="submit" name="search" value="Find">
				
			</td>
		</tr>
	</table>
	
	</form>
	 <script>
    document.querySelector("form").addEventListener("add", function(event) {
                
        if ( document.getElementById("phonenumber").value == "") { 
            alert("phone number ");
            event.preventDefault();
        }
    
    
    
                
       else if (document.getElementById("username").value == "" ){ 
            alert("empty username found ");
            event.preventDefault();
        }
        else if
        	(document.getElementById("password").value == "" ){ 
            alert("set a password ");
            event.preventDefault();
        }
        else if
        	(document.getElementById("id").value == "" ){ 
            alert("u must set an id ");
            event.preventDefault();
        }
    
    </script>
	<!--Footer section-->
<?php require_once("../footer/index.php"); ?>
</body>
</html>