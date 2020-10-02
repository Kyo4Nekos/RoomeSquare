
<?php
session_start(); 
include "user.php";
$_SESSION['username']=$_POST['username'];  
$_SESSION['pass']=$_POST['pass'];  

// username and password sent from form 
$custusername=$_POST['username']; 
$custpass=$_POST['pass']; 


$isValidUser = validatePassword($custusername,$custpass);

if($isValidUser)
	{
	$userType=getUserType($custusername);
	if($userType =='ADMIN')
		header("location:../admindashboard/examples/dashboard.html"); // redirect to admin page
	else if($userType =='CUSTOMER')
		header("location:../Homepage_signin/index.php"); // redirect to customer menu page
	else
		header("location:../staffdashboard/examples/dashboard.html"); // redirect to staff menu page
	}
?>
	
