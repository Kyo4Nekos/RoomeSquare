<?php
$con = mysqli_connect("localhost","hotel","hotel","hoteldb");
if (!$con) {
	echo  mysqli_connect_error();
	exit;
}


$sql = "UPDATE `customer` SET `verifyAcc`= '1' WHERE custemail = '" . $_GET["email"] . "'";
$result = mysqli_query($con, $sql);
	if($result){
		echo "<meta http-equiv='refresh' content='0;url=../Homepage/index.html'>";
	}else{
		echo "<meta http-equiv='refresh' content='0;url=../Homepage/index.html'>";
	}
?>