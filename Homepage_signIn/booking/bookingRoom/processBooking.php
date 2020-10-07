<?php
session_start();
if(isSet($_POST['bookRoom']))//customer selected a room
	{
		header('Location: ../../../payment/test.php?price='.$_POST['price'].'&roomType='.$_POST['roomTypeToBook'].'&startDate='.$_POST['startDate'].'&endDate='.$_POST['endDate'].'&Cust_no='.$_POST['custIdToBook'].'');
 	 }
?>
