<?php
{
     session_start();
    $con = mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");

    if(!$con)
	{
	echo mysqli_connect_error();
	exit;
  }
  
  $message = "Thank you for your feedback! ";
 $message1 = "An Error Occured! Please try again. ";
 
 //collect data from post array
 $contactName = $_POST['contactName'];
 $contactEmail = $_POST['contactEmail'];
 $contactMessage = $_POST['contactMessage'];
  
  $sql="INSERT INTO contactus(contactName, contactEmail, contactMessage) VALUES ('$contactName','$contactEmail','$contactMessage')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
  if($qry){
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<meta http-equiv='refresh' content='0;url=./contact.php'>";
   }else{
    echo "<script type='text/javascript'>alert('$message1');</script>";
    echo "<meta http-equiv='refresh' content='0;url=./contact.php'>";
        }


  }
?>