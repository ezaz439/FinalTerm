<?php	
	session_start();
	if(!isset($_SESSION['number'])){  
		header("location: Login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bus Information</title>
</head>
<body>

<center>
<table>
	
		
		
		<tr>
			<td><center><a href="homepage.php">Back</a></center></td>
			
			
		</tr>
		



	
</table>
</center>
</body>
</html>