<?php	
	session_start();
	//if(!isset($_SESSION['number'])){  
	//	header("location: Login.php");
	//}
?>

<!DOCTYPE html>
<html>
<head>
<title>User info from database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
	<?php
		require("../navbar/nav.php");
	?>
<table>
<tr>
<th>Bus Number</th>

<th>Time</th>


</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "project");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT  Bus_Number,Time FROM businfo";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Bus_Number"]. "</td><td>" . $row["Time"] . "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
<table>
	<tr>
		<input type="button" id="time" name="button" value="change time">
		<a href="homepage.php">Back</a>
	</tr>
</table>
		



	

</center>
<!--Footer section-->
		<?php require_once("../footer/index.php"); ?>
</body>
</html>