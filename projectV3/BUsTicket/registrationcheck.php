 <?php

if( isset($_POST['submit'])){
		$phonenum = $_POST['phonenumber'];
		$password = $_POST['password'];
		$username = $_POST['username'];
		$id = $_POST['id'];}
		
		if(empty(trim($phonenum)) || empty(trim($password)) ||empty(trim($username)) || empty($id)){
			echo "Null submission found!";
		}else{

			$con = mysqli_connect("localhost", "root","", "project");
		
		$sql = "INSERT INTO users values('$username','$id','$password','$phonenum')";
		if(mysqli_query($con, $sql)){
			header("location: Userinfo.php");
		}else{
			echo "Error";

		}
	}



?>

