<?php
//<==================addNewAccount function==================>
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
 
  
  $sql="INSERT INTO customer(custname, custusername,custemail,custpass)
	VALUES ('$custname','$custusername','$custemail','$custpass')";
	
if(!mysqli_query($con,$sql))
{
	echo 'Not Inserted';
}
else
{
	echo 'Inserted';
}
 

?>