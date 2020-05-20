<!-- <?php
session_start ();
?> -->
<!DOCTYPE html>
<html>

<head>
	<title>Login Form</title>
</head>

<body>

	<div style="display: flex; justify-content: center;">
		<fieldset>
			<legend style="text-align: center;">
				<h1> Login</h1>
			</legend>
			<form id="login-form">
				<!-- <form method="POST" action="Main.php"></form> -->
				<table>
					<tr>
						<td> Username:</td>
						<td><input type="text" name="username" id="username"></td>
					</tr>
					<tr>
						<td> Password:</td>
						<td><input type="password" name="password" id="password"></td>
					</tr>
					<tr>
						<td></td>
						<!-- <td> Not yet a member <a href="Register.php">Register</a></td> -->
					</tr>
				</table>
				<div style="text-align: center;">
					<button id="login-button" onclick="loginFunc()" style="color: green;">Login</button>
				</div>
			</form>
		</fieldset>
	</div>
</body>

<script>
	function loginFunc() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		console.log(username);
		console.log(password);
		if (username === "" && password === "") {
			alert("Please enter valid Credentials")
		} else if (username === password) {
			location.href = "User.php";
		} else {
			alert("Credentials does not match!!!");
		}
	}

	document.querySelector("#login-form").addEventListener("submit", function (e) {
		e.preventDefault();    //stop form from submitting
		// if (!isValid) {

		// }
	});
</script>

</html>