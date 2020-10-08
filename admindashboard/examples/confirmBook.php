<?php
$con = mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");
if (!$con) {
	echo  mysqli_connect_error();
	exit;
}

if(isset($_POST['confirmBook'])){
	$message = "Booking Confirmed!";
	$bookConfirm = $_POST['BookConfirm'];
	
	$sql = "UPDATE `bookings` SET `bookingStatus`= 'Booking Confirmed' WHERE Booking_reference = '".$bookConfirm."'";
	$result = mysqli_query($con, $sql);
		if($result){
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<meta http-equiv='refresh' content='0;url=./dashboard.php'>";
		}else{
			//echo "<meta http-equiv='refresh' content='0;url=../Homepage/index.php'>";
			echo "Tak Jadii";
		}
} 

else if(isset($_POST['removeBook'])){
	$message = "Booking Removed!";
	$bookRemove = $_POST['removeConfirm'];
	$sql = "DELETE FROM `bookings`  WHERE Booking_reference = '".$bookRemove."'";
	$result = mysqli_query($con, $sql);
		if($result){
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<meta http-equiv='refresh' content='0;url=./dashboard.php'>";
		}else{
			//echo "<meta http-equiv='refresh' content='0;url=../Homepage/index.php'>";
			echo "Tak Jadii";
	}
}

?>