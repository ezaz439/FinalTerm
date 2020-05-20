<?php
session_start();
// DB conn
$servername="localhost";
$username="root";
$password="";
$db="project_v";
$conn=mysqli_connect($servername,$username,$password,$db);
$sql="select * from booking" ;
if(!$conn)
{
	echo 'Not Connected To Server';
}
if(!mysqli_select_db($conn,'project_v'))
{
	echo 'databse not selceted';
}
$id = $_GET['cancel_id'];
if($id != ""){
	$sql="delete from booking where id='$id'";
	if(!mysqli_query($conn,$sql))
	{
		echo 'Not deleted';
	}
	else
	{
		echo 'deleted';
	}
} else {
	echo 'Error Id is invalid';
}
/*header("refresh:20;url=User.php");*/
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cancel</title>
</head>

<body>
	<?php
		require("../navbar/nav.php");
	?>
    <center>
        <h1>Your Booking Has Cancelled<h1>
                <table>
                    <tr>
                        <td><button><a href="User.php" style="text-decoration: none; color: blue;">Back</a></button></td>
                        </td>
                    </tr>
				</table>
				<!--Footer section-->
				<?php require_once("../footer/index.php"); ?>
</body>
</html>