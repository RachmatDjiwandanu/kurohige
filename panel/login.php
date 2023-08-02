<?php
session_start();
if(isset($_SESSION['email'])) {
    echo '<script>window.location.replace("aksi.php");</script>';
} else {
?>
<center><h1>Silahkan Login Dahulu</h1>
<form action="aksi.php" method="post">
<input type="username" name="username" placeholder="Username" alt="username" required="required"/><br/>
<input type="password" name="password" placeholder="Password" alt="password" required="required"/><br/><br/>
<input type="submit" name="submit" value="Login" alt="submit" />
</form><br/>
<h4>Copyright &copy; <font color="red" alt="Danu">Danu</font></h4>
</center>
<?php } ?>

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
		
		input[type="username"],
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