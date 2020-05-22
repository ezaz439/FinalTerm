<?php	
	session_start();
	// if(!isset($_SESSION['number'])){  
		// header("location: Login.php");
	// }
?>
	
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="homepagestyle.css">
</head>
<body>
	<?php
		require("../navbar/nav.php");
	?>

	
<center>

	<table>
		
<h1>Welcome home!</h1>

	
	<tr>
		<td>
			  
			<a href="UserInfo.php">User Profile</a>
		
		
		</td>
	</tr>
	<tr>
		<td>
			  
			<a href="BusInfo.php">Bus Info</a>
		
		
		</td>
	</tr>
	
	<tr>
		<td>
			  
			<a href="Payment.php">Payment</a>
		
		
		</td>
	</tr>
	<tr>
		<td>
			  
			<a href="registration.php">Add user</a>
		
		
		</td>
		
		
	

</table>
</center>
<!--Footer section-->
<?php require_once("../footer/index.php"); ?>
</body>
</html>
