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
if(!mysqli_select_db($conn, $db))
{
	echo 'databse not selceted';
}
/*header("refresh:20;url=User.php");*/
?>
<! DOCTYPE html>
	<html>

	<head>
		<title>User</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	</head>

	<body>
		<div style="display: flex; justify-content: center;">
			<fieldset>
				<legend style="text-align: center;">
					<h1> User</h1>
				</legend>

				<form action="details.php" method="post" id="booking-form">
					<table>
						<tr>
							<td>Select Bus:</td>
							<td>
								<select name="bus">
									<option>Green Line</option>
									<option>Egale</option>
									<option>Shohagh</option>
									<option>Ena</option>
								</select>
							</td>
						</tr>
						<tr>

							<td>Select Chair class:</td>
							<td>
								<select name="class">
									<option>AC</option>
									<option>Non AC</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>Select Seat:</td>
							<td>
								<select name="seat">
									<option>A1</option>
									<option>A2</option>
									<option>A3</option>
									<option>A4</option>
									<option>B1</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Email:</td>
							<td><input type="email" name="userEmail" value="" required/></td>
						</tr>
						<tr>
							<td>Select Date:</td>
							<td><input type="date" name="journeyDate" value="" required/></td>
						</tr>
						<tr>
							<td>Select Bording Point:</td>
							<td>
								<select name="boarding">
									<option>Abdullahapur</option>
									<option>Malibagh</option>
									<option>Gabtoli</option>
									<option>Kallyanpur</option>
									<option>Kolabagan</option>
								</select>
							</td>
							<td>Select Destination:</td>
							<td>
								<select name="destination">
									<option>Khulna</option>
									<option>Jashore</option>
									<option>Chottogram</option>
									<option>Cox's Bazar</option>
									<option>Tangail</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Select Payment Method:</td>
							<td>
								<select name="payment">
									<option>Bkash</option>
									<option>Rocket</option>
									<option>Credit Card</option>
									<option>Debit Card</option>
								</select>
							</td>
						</tr>
					</table>
					<div style="display: flex; justify-content: space-around;">
						<button type="submit" style="color: green;">Booking</button>
						<button type="reset" name="">Reset</button>
					</div>
				</form>
			</fieldset>
		</div>
		<div style="text-align: center;">
			<h1>Booking List</h1>
			<table class="table table-bordered table-hover">
				<tr>
					<th>Bus</th>
					<th>Chair class</th>
					<th>Seat</th>
					<th>Email</th>
					<th>Select Date</th>
					<th>Bording Point</th>
					<th>Destination</th>
					<th>Payment Method</th>
				</tr>
				<?php 
				// get rows
				$rowSql="select * from booking";

				$result = mysqli_query($conn, $rowSql);

				if (mysqli_num_rows($result) > 0) {
				  // output data of each row
				  while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>"."<td>".$row["bus"]."</td>"."<td>".$row["class"]."</td>"."<td>".$row["seat"]."</td>"."<td>".$row["userEmail"]."</td>"."<td>".$row["journeyDate"]."</td>"."<td>".$row["boarding"]."</td>"."<td>".$row["destination"]."</td>"."<td>".$row["payment"]."</td>"."</tr>";
				  }
				}
				?>
			</table>
		</div>
	</body>
	<script>
		// <a style="text-decoration: none; color: green;"></a>
		// onclick="submitUserSelection()"
		//  href="Cancel.html"
		// function submitUserSelection() {
			// var formElement = document.getElementById("booking-form");
			
			// console.log(formElement);

			// // var username = .value;
			// // var password = document.getElementById("password").value;
			// // console.log(username);
			// // console.log(password);
			// // if (username === "" && password === "") {
			// // 	alert("Please enter valid Credentials")
			// // } else if (username === password) {
			// // 	location.href = "User.html";
			// // } else {
			// // 	alert("Credentials does not match!!!");
			// // }
		// }

		// function alertFunc(msg) {
			// alert(msg);
		// }

		// var bookingForm = document.querySelector("#booking-form");
	
		// bookingForm.addEventListener("submit", function (e) {
			// // e.preventDefault();    //stop form from submitting
			// // if (!isValid) {
	
			// // }
			// var formData = new FormData(bookingForm);

			// // var formElems = ["bus", "class", "seat", "userEmail", "journeyDate", "boarding", "destination", "payment"];

			// // for(var i = 0; i < formElems.length; i++){
			// // 	var elem = document.getElementById(formElems[i]);
			// // 	if(elem.value === null || elem.value === "") {
			// // 		alertFunc("please input "+elem.name);
			// // 		break;
			// // 	} else {
			// // 		// console.log(formElems[i]); .toString()
			// // 		// console.log(elem.value);
			// // 		formData.append(formElems[i], elem.value);
			// // 	}
			// // }
			// for (var key of formData.entries()) {
				// console.log(key[0] + ', ' + key[1]);
			// }
		// });
	</script>
	</html>
<?php
mysqli_close($conn);
?>