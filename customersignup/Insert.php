<?php
//<==================Add New Customer Account==================>
$con = mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");
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

$message ="Succesfully registered!";

 //collect data from post array
 $custname = $_POST['fullname'];
 $custusername = $_POST['username'];
 $custemail = $_POST['email'];
 $custpass = $_POST['pass'];
 $custphoneno=$_POST['phone'];
 $userType = 'CUSTOMER';
  
  $sql="INSERT INTO customer(custname, custusername,custemail,custpass,custphoneno,userType)
	VALUES ('$custname','$custusername','$custemail','$custpass','$custphoneno','$userType')"; 
  
if(!mysqli_query($con,$sql))
{
	echo 'Not Inserted.';
}
else
{
	echo "<script type='text/javascript'>alert('$message');</script>";
	header("refresh:2; url=account_verify.php");
} 
 

?>