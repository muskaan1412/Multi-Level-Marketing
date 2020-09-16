<?php
session_start();
require('php-includes/connect.php');
$userid = mysqli_real_escape_string($con,$_POST['userid']);
$password = mysqli_real_escape_string($con,$_POST['password']);

$query = mysqli_query($con,"select * from admin where userid='$userid' and password='$password'");
if(mysqli_num_rows($query)>0){
	$_SESSION['userid'] = $userid;
	$_SESSION['id'] = session_id();
	$_SESSION['login_type'] = "admin";
	
	echo '<script>alert("Login Success.");window.location.assign("home.php");</script>';
	
}
else{
	echo '<script>alert("Email id or password is worng.");window.location.assign("index.php");</script>';
}

?>