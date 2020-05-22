<?php	
	session_start();
	//if(!isset($_SESSION['number'])){  
	//	header("location: Login.php");
	//}
?>
<!DOCTYPE html>
<html>
<head>
	<title>payment Information</title>
</head>
<body>
	<?php
		require("../navbar/nav.php");
	?>
<center>
<table border="1" cellspacing="0" height="200" width="100">
	
		
		<tr>
			<td>Transaction ID</td>
			<td>Passenger Name</td>
			<td>date</td>
			<td>Amount</td>
			<td>Claim Payment</td>
			
		</tr>
		<tr>
			<td>0001</td>
			<td>abc</td>
			<td>20/01/20</td>
			<td>500</td>
			<td><input type="submit" name="" value="claim"></td>
			
		</tr>
		<tr>
			<td>0002</td>
			<td>def</td>
			<td>05/07/20</td>
			<td>450</td>
			<td><input type="submit" name="" value="claim"></td>
			
		</tr>
		<tr>
			<td>0003</td>
			<td>geh</td>
			<td>15/07/20</td>
			<td>450</td>
			<td><input type="submit" name="" value="claim"></td>
			
		</tr>
		<tr>
			<td colspan="5"><center><a href="homepage.php">Back</a></center></td>
			
			
		</tr>
		



	
</table>
</center>
<!--Footer section-->
<?php require_once("../footer/index.php"); ?>
</body>
</html>