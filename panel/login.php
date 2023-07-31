<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
    <!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
		}
		
		h1 {
			text-align: center;
			margin-top: 50px;
			color: #333333;
		}
		
		form {
			background-color: #ffffff;
			border-radius: 5px;
			padding: 20px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			width: 400px;
			margin: 0 auto;
			margin-top: 50px;
		}
		
		label {
			display: block;
			margin-bottom: 10px;
			color: #666666;
		}
		
		input[type="text"],
		input[type="password"] {
			padding: 10px;
			border-radius: 5px;
			border: none;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
			width: 100%;
			margin-bottom: 20px;
		}
		
		input[type="submit"] {
			background-color: #fa0000;
			color: #ffffff;
			border: none;
			padding: 10px;
			border-radius: 5px;
			cursor: pointer;
		}
		
		input[type="submit"]:hover {
			background-color: #06e5f5;
		}
		
		.error {
			color: #ff0000;
			font-weight: bold;
			margin-bottom: 10px;
		}
	</style>
    <!-- akhir css -->
	<script type="text/javascript">
		function validateForm() {
			var username = document.forms["loginForm"]["username"].value;
			var password = document.forms["loginForm"]["password"].value;
			var error = document.getElementById("error");

			if (username == "" || password == "") {
				error.innerHTML = "Username and password harus diisi!!";
				return false;
			}//jika user dan pass tidak diisi
			else if (username == "admin" && password == "tahu") {
				alert("Login berhasil");
				return true;
			}//jika login berhasil
			else {
				error.innerHTML = "username atau password salah";
				return false;
			}//jika user dan pass salah
		}
	</script>
</head>
<body>
	<h1>Login</h1>
	<form name="loginForm" onsubmit="return validateForm()" method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username">
		<label for="password">Password:</label>
		<input type="password" id="password" name="password">
		<input type="submit" value="Login">
		<div id="error" class="error"></div>
	</form>
</body>
</html>