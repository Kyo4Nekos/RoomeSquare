<?php
//<==================Add New Customer Account==================>
$con = mysqli_connect("localhost","hotel","hotel","hoteldb");
if(!$con)
	{
	echo 'Not connected to server';
	echo mysqli_connect_error();
	exit;
	}

if(!mysqli_select_db($con,'hoteldb'))
	{
	echo 'Database not selected';
	}

 //collect data from post array
 $custname = $_POST['fullname'];
 $custusername = $_POST['username'];
 $custemail = $_POST['email'];
 $custpass = $_POST['pass'];
 $custphoneno=$_POST['phone'];
 $userType = 'CUSTOMER';
  
  $sql1="INSERT INTO customer(custname, custusername,custemail,custpass,custphoneno,userType)
	VALUES ('$custname','$custusername','$custemail','$custpass','$custphoneno','$userType')"; 
  
  $sql2="INSERT INTO users(username,password,userType) 
  VALUES ('$custusername','$custpass','$userType')";
	
if(!mysqli_query($con,$sql1))
{
	echo 'Not Inserted.';
}
else
{
	echo 'Inserted.';
}

if(!mysqli_query($con,$sql2))
{
	echo ' Your username or Password was not inserted into the server.';
}
else
{
	echo 'Your username or Password has been inserted.';
}
 
 header("refresh:2; url=account_verify.php");

?>