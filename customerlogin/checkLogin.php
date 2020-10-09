
<?php
session_start(); 
include "user.php";
$_SESSION['username']=$_POST['username'];  
$_SESSION['pass']=$_POST['pass'];  

// username and password sent from form 
$custusername=$_POST['username']; 
$custpass=$_POST['pass']; 
$message = "Wrong Username or Password!";

$isValidUser = validatePassword($custusername,$custpass);

if($isValidUser)
	{
	$userType=getUserType($custusername);
	if($userType =='ADMIN')
		header("location:../admindashboard/examples/dashboard.php"); // redirect to admin page
	else if($userType =='CUSTOMER')
		header("location:../Homepage_signin/index.php"); // redirect to customer menu page
	else if($userType =='STAFF')
		header("location:../staffdashboard/examples/dashboard.php"); // redirect to staff menu page
		}
	else{
		echo "<script type='text/javascript'>alert('$message');</script>";
   		 echo "<meta http-equiv='refresh' content='0;url=./index.html'>";
	}
?>
	
