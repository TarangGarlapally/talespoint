<?php

session_start();

if(isset($_POST['submit'])){
include_once 'dbh.php';



$uid =mysqli_real_escape_string($conn,$_POST['username']);
$pwd = mysqli_real_escape_string($conn,$_POST['user_pwd']);

$sql="select user_pwd from users where user_uid='".$uid."';";

$result=mysqli_query($conn,$sql);


$rows=mysqli_num_rows($result);
if($rows>0){
while($row=mysqli_fetch_assoc($result)){
if($pwd==$row['user_pwd']){

	$sql="select * from users where user_uid='".$uid."';";
	$udata=mysqli_query($conn,$sql);
	$nrows=mysqli_num_rows($udata);
    if($nrows>0){
    	while($row=mysqli_fetch_assoc($udata)){
    		$_SESSION['user_first']=$row['user_first'];
	        $_SESSION['user_last']=$row['user_last'];
	        $_SESSION['user_email']=$row['user_email'];
	        $_SESSION['username']=$row['user_uid'];
	        $_SESSION['status']=1;

	header("Location: ../index.php?login=success");
    	}
    }

	

}else{
	header("Location: loginhome.php?wrong-password");
}
}
}else{
	header("Location: loginhome.php?user-not-found");
}

}
else{
	header("Location: loginhome.php?fill-form");
}


