
<?php
session_start(); 
include "user.php";
$_SESSION['username']=$_POST['username'];  
$_SESSION['pass']=$_POST['pass'];  

// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['pass']; 


$isValidUser = validatePassword($username,$password);

if($isValidUser)
	{
	$userType=getUserType($username);
	if($userType =='ADMIN')
		header("location:../admindashboard/examples/dashboard.html"); // redirect to admin page
	else if($userType =='CUSTOMER')
		header("location:../Homepage_signin/index.html"); // redirect to customer menu page
	else
		header("location:../staffdashboard/examples/dashboard.html"); // redirect to staff menu page
	}
?>
	
