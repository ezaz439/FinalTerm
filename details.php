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

// form data
$bus = $_POST['bus'];
$class = $_POST['class'];
$seat = $_POST['seat'];
$userEmail = $_POST['userEmail'];
$journeyDate = $_POST['journeyDate'];
$boarding = $_POST['boarding'];
$destination = $_POST['destination'];
$payment = $_POST['payment'];


// id for cancel
$last_id = NULL;

// db insert
$sql="insert into booking (bus,class,seat,userEmail,journeyDate,boarding,destination,payment) VALUES('$bus','$class','$seat','$userEmail','$journeyDate','$boarding','$destination','$payment')";
if(!mysqli_query($conn,$sql))
{
	echo 'Not Inserted';
}
else
{
	echo 'inserted';
	$last_id = mysqli_insert_id($conn);
}

echo $last_id;
mysqli_close($conn);
/*header("refresh:20;url=User.php");*/
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cancel</title>
</head>

<body>
    <center>
        <h1>Your Booking Has Done<h1>
                <table>
                    <tr>
                        <td>Bus:</td>
						<td>
                        <?php
							echo "$bus";
						?>
						</td>
                    </tr>
                    <tr>
                        <td>Chair class:</td>
                        <td><?php
							echo "$class";
						?></td>
                    </tr>
                    <tr>
                        <td>Seat:</td>
                        <td><?php echo "$seat"
						?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?=$userEmail?></td>
                    </tr>
                    <tr>
                        <td>Select Date:</td>
                        <td><?=$journeyDate?></td>
                    </tr>
                    <tr>
                        <td>Bording Point:</td>
                        <td><?=$boarding?></td>
                    </tr>
					<tr>
						<td>Destination:</td>
                        <td><?=$destination?></td>
					</tr>
                    <tr>
                        <td>Payment Method:</td>
                        <td><?=$payment?></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>Cancel Booking</td>
						<td>
							<form method="get" action="cancel.php">
							<input type="hidden" name="cancel_id" value="<?php echo (isset($last_id))?$last_id:'';?>">
							<button type="submit" style="color: red;">Cancel</button>
						</form>
						</td>
                    </tr>
					<tr>
						<td>Back to Booking page</td>
                        <td><button><a href="User.php" style="text-decoration: none; color: black;">Back</a></button></td>
                    </tr>
                    <tr>
                        <td>Print</td>
                        <td><input type='submit' name='' value='Print'></td>
                    </tr>
				</table>
</body>
</html>