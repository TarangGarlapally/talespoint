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
	<a href="loginhome.php">login instead</a>
	<h1>Sign up</h1>
	<form action="signup.php" method="POST">
		<input type="text" name="user_first" placeholder="First name">
		<input type="text" name="user_last" placeholder="Last name">
		<input type="text" name="user_email" placeholder="E-mail">
		<input type="text" name="username" placeholder="Username">
		<input type="password" name="user_pwd" placeholder="Password">
		<button type="submit" name="submit" value="submit">sign up</button>
	</form>

    
  	<?php 
	/*
	$fullurl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if(strpos($fullurl, "signup=empty")){
		echo "<p class='error'>You did not fill in all the details</p>";
		exit();
	}
	elseif(strpos($fullurl, "signup=invalid-email")==true){
		echo "<p class='error'>You have entered an incorrect email</p>";
		exit();
	}
	elseif(strpos($fullurl, "signup=success")==true){
		echo "<p class='success'>signup successful<span class='checkmark'></span></p>";
		exit();
	}


	if (!isset($_GET['signup'])) {
		exit();
	}
	else{
		$signupcheck = $_GET['signup'];
		if($signupcheck=='empty'){
			echo "<p class='error'>You did not fill in all the details</p>";
		exit();
		}
		elseif($signupcheck=='invalid-email'){
			echo "<p class='error'>You have entered an incorrect email</p>";
		exit();
		}
		elseif ($signupcheck=='success') {
			echo "<p class='success'>signup successful<span class='checkmark'></span></p>";
		exit();
		}
	}
	*/
	?>
	

</body>
</html>