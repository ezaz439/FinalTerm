<?php
$con=mysqli_connect('127.0.0.1','root',' ','project_v');
$sql="select * from booking" ;
if(!$con)
{
	echo 'Not Connected To Server';
}
if(!mysqli_select_db($con,'Project_v'))
{
	echo 'databse not selceted';
}
$bus = $_POST['bus'];
$class = $_POST['class'];
$seat = $_POST['seat'];
$userEmail = $_POST['userEmail'];
$journeyDate = $_POST['journeyDate'];
$boarding = $_POST['boarding'];
$destination = $_POST['destination'];
$payment = $_POST['payment'];
$sql="insert into booking(bus,clss,seat,userEmail,journeyDate,boarding,destination,payment)VALUES{'$bus','$class','$seat','$userEmail','$journeyDate','$boarding','$destination','$payment')";
if(!mysqli_query($con,$sql))
{
	echo 'Not Inserted';
}
else
{
	echo 'inserted';
}
header("refresh:2;url=User.php");

?>