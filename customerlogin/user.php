<?php
//user.php
//=================== validatePassword
function validatePassword($custusername,$custpass)
{
$con=mysqli_connect("localhost","hotel","hotel","hoteldb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql= "SELECT * FROM customer where custusername = '".$custusername ."' and custpass ='".$custpass."'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result); //check how many matching record - should be 1 if correct
if($count == 1){
	return true;//username and password is valid
}
else
	{
	return false; //invalid password
	}
	}

//=================== getUserType
function getUserType($custusername)
{
$con=mysqli_connect("localhost","hotel","hotel","hoteldb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql= "SELECT * FROM customer where custusername = '".$custusername ."'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result); //check how many matching record - should be 1 if correct
if($count == 1){
	$row = mysqli_fetch_assoc($result);
	$userType=$row['userType'];
	return $userType;
	}
 }


?>