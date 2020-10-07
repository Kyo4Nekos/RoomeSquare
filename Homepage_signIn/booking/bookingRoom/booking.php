<?php

//getDayDiff function==================
function getDayDiff($Date_rent_start,$Date_rent_end)
{
	$date1=date_create($Date_rent_start);
	$date2=date_create($Date_rent_end);
	$diff=date_diff($date1,$date2);
	$x = $diff->format("%R%a");//R - -ve and +ve symbol
	if($x >= 1)
		$x = $diff->format("%a");
	return $x;
}

//addNewBookingRecord function==================
function addNewBookingRecord()
{
$con = mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array or system 
 
 $Cust_no = $_SESSION['name'];
 $roomType = $_POST['roomTypeToBook'];
 $Date_Reserved = date("Y-m-d");
 $Date_rent_start = $_POST['startDate'];
 $Booking_reference=$Cust_no.$roomType.$Date_rent_start;
 $Date_rent_end= $_POST['endDate'];
 $Rental_period=getDayDiff($Date_rent_start,$Date_rent_end);
 $total = $Rental_period * $_POST['price'];
 $tax=0.06 * $total;
 $Amount_due = $tax + $total;
 
  
  $sql="INSERT INTO bookings(Booking_reference,Cust_no, Reserved_by,Date_Reserved,Date_rent_start, Date_rent_end,
  roomType,Rental_period, Amount_due )
	VALUES ('$Booking_reference','$Cust_no','$Cust_no','$Date_Reserved','$Date_rent_start','$Date_rent_end','$roomType','$Rental_period','$Amount_due')";
	$qry = mysqli_query($con,$sql); 
	if(mysqli_affected_rows($con) !=0)
		return true;
	else
		return false;
}
//getListOfFutureBookingByCustomer function==================
function getListOfFutureBookingByCustomer($custId)
{
//create connection
$con=mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
//get list of future or active booking, sort by date start
$sql = "SELECT * FROM bookings WHERE Cust_no = '".$custId."'";      
$sql .= " and (Date_rent_start >= CURDATE() or Date_rent_end >= CURDATE())";
$sql .= " order by Date_rent_start";
$qry = mysqli_query($con,$sql);//run query
return $qry; 

}
?>