<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Prac</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Log in</h1>
	<form action="login.php" method="POST">
		<input type="text" name="username" placeholder="Username">
		<input type="password" name="user_pwd" placeholder="Password">
		<button type="submit" name="submit" value="submit">log in</button>
	</form>
</body>
</html>