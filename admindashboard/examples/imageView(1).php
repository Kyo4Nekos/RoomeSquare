<?php
    //create connection								
	$con=mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");
		if (!$con) {
			echo  mysqli_connect_error();
		exit;
		}

	$sql = "SELECT imageType,imageData FROM customer WHERE `custusername` = '". $_GET['custusername'] . "'";
	$result = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br>" . mysqli_error($con));
	$row = mysqli_fetch_array($result);
	header("Content-type: " . $row["imageType"]);

	echo $row["imageData"];
	mysqli_close($con);
?>		