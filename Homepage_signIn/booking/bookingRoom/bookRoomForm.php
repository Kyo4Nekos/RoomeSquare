<!DOCTYPE html>
<style>
	body{
		 background-color:#ffffff;
	}
</style>
<head>
<link rel="stylesheet" href="../lib/w3.css">
<title>Room Book</title>
</head>
<script>
function validateForm() {
    var start = document.forms["bookingForm"]["startDate"].value;
	var end = document.forms["bookingForm"]["endDate"].value;
	
    if (start >= end) {
        alert("Start date is after/same as the end date. Select correct date");
        return false;
    }
}
</script>

<?php
session_start();
if (!(isset($_SESSION['username']) && ($_SESSION['pass']))){
	header ("Location: ../customerlogin/index.html");
}
//echo '<div class="w3-cell-row style="width:100%; margin:0 auto;">';

echo '<div class="w3-container" style="width:80%; margin:0 auto;">';

$custId = $_SESSION['username'];
echo '<div class="w3-container w3-cell" style="width:50%;" >';
echo '</div>';
if(isSet($_POST['searchByDate']))
	{
	$startDate = $_POST['startDate'];
	$endDate = $_POST['endDate'];
	$qryAvailable = getAvailableRoomOnTheseDate($startDate ,$endDate);
	if(mysqli_num_rows($qryAvailable) > 0)
		showAvailableRoomOnThisDate($qryAvailable);
	else
		echo 'No Rooms available between ' . $startDate .' and '. $endDate; 
	}
else
    {
	echo '<div class="w3-container w3-cell" style="width:50%;">';
	displayBookingDateOption();
	echo '<div >';
	}
echo '</div>';
echo '</div>'; 
?>

<?php

function displayBookingDateOption()
{
 //echo '<div style ="width:100%; float: right;">';
 echo '
<form action="" method="post" onsubmit="return validateForm()" name="bookingForm">
<fieldset ><legend>Select date to book</legend>
<table border=1>
<tr><td> Start Date : </td><td><input type=date name=startDate><br></td></tr>
<td> End Date : </td><td><input type=date name=endDate></td></tr>';
echo '</table>';
echo '<input class="w3-btn w3-light-blue" type="submit" name ="searchByDate" value="Show Available Room">
</fieldset>
</form>';
//echo '</div>';
}

function showAvailableRoomOnThisDate($qryAvailable)
{
$custId = $_SESSION['username'];//customerId
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];

//display car info	
echo '<div style="width:1000px; margin:0 auto;">';
echo '<br>Rooms available from '.$startDate. ' to '. $endDate;
echo '<table border=1 style="width:100%;" class="w3-table w3-bordered w3-striped w3-large w3-hoverable w3-card-4">';
echo '<tr class="w3-light-blue">
		<td>No</td>
		<td>Room Type</td>
		<td>Bed Type</td>
		<td>Room Price</td>
		<td>Book The Room</td>
	</tr>';
$i=1;
while($row=mysqli_fetch_assoc($qryAvailable))//Display car information
  {
   
  $roomType = $row['roomType'];
  $bedType = $row['bedType'];
  $price =$row['price'];
  echo '<tr class=" w3-hover-text-blue">';

  echo '<td>'.$i.'</td>';
  echo '<td>'.$row['roomType'].'</td>';
  echo '<td>'.$row['bedType'].'</td>';
  echo '<td>'.$row['price'].'</td>';
  //taxes
   $Rental_period=getDayDiff($startDate,$endDate);
   $total = $Rental_period *  $row['price'];
   $tax=0.06 * $total;
   $Amount_due = $tax + $total;
   /*echo '<td>Total RM:'.number_format($total,2).'<br>Tax RM:'.number_format($tax,2).'<br>Amount Due RM:'.number_format($Amount_due,2);*/
   echo '</td>';
   echo '<td>';
   echo '<form action="processBooking.php" method="post" >';
			echo "<input type='hidden' value='$roomType' name='roomTypeToBook'>";
			echo "<input type='hidden' value='$custId' name='custIdToBook'>";
			echo "<input type='hidden' value='$startDate' name='startDate'>";
			echo "<input type='hidden' value='$endDate' name='endDate'>";
			echo "<input type='hidden' value='$Amount_due' name='price'>";
			echo "<input type='submit' name='bookRoom'>";
			echo '</form>';  
   echo '</td>';
   echo '</tr>';  
  $i++;
  }
	  
echo '</table>'; 
echo '</div>';
}

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
?>

<?php
//getAvailableRoomOnTheseDate function ==================
function getAvailableRoomOnTheseDate($startDate ,$endDate)
{
$con = mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $sqlStr = "SELECT roomType,bedType,price FROM rooms
 WHERE roomType NOT IN(
	(SELECT DISTINCT roomType FROM bookings";
 $sqlStr .= " where Date_rent_start BETWEEN '".$startDate."' AND '".$endDate."'";
 $sqlStr .= " or Date_rent_end BETWEEN '".$startDate."' AND '".$endDate."'))";
 $result = mysqli_query($con,$sqlStr);
 return $result;//if no room available, result will be empty

}
?>