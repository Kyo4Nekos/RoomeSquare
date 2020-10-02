<?php
$con = mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");
if (!$con) {
	echo  mysqli_connect_error();
	exit;
}


$sql = "UPDATE `customer` SET `custpass`= '" . $_GET["password"] . "' WHERE custemail = '" . $_GET["email"] . "'";
$result = mysqli_query($con, $sql);
	if($result){
		echo "<meta http-equiv='refresh' content='0;url=../Homepage/index.html'>";
	}else{
		echo "<meta http-equiv='refresh' content='0;url=../Homepage/index.html'>";
	}
?>