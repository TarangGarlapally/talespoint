<?php
session_start();

include_once 'dbh.php';


$first = mysqli_real_escape_string($conn,$_POST['user_first']);
$last =mysqli_real_escape_string($conn,$_POST['user_last']);
$email=mysqli_real_escape_string($conn,$_POST['user_email']);
$uid =mysqli_real_escape_string($conn,$_POST['username']);
$pwd = mysqli_real_escape_string($conn,$_POST['user_pwd']);




if(empty($first) || empty($last) ||empty($email)||empty($uid)||empty($pwd)){
	header("Location: loginindex.php");
}
else{

$sql="insert into users(user_first,user_last,user_email,user_uid,user_pwd) 
values('$first','$last','$email','$uid','$pwd')";

mysqli_query($conn,$sql);

$_SESSION['user_first']=$first;
$_SESSION['user_last']=$last;
$_SESSION['user_email']=$email;
$_SESSION['username']=$uid;
$_SESSION['status']=1;


header("Location: ../index.php");
}