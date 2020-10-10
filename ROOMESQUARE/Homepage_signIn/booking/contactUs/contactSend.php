<?php
{
     session_start();
    $con = mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");

    if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $contactName = $_POST['contactName'];
 $contactEmail = $_POST['contactEmail'];
 $contactMessage = $_POST['contactMessage'];
  
  $sql="INSERT INTO contactus(contactName, contactEmail, contactMessage) VALUES ('$contactName','$contactEmail','$contactMessage')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
 return $qry;

    }
?>