<?php
include "staff.php";
if(isSet($_POST['addStaffButton']))
	{
	header('Location: staffInfo.php');
	}
else if(isSet($_POST['saveNewCarButton']))
	{
	addNewCar();
	header('Location: staffList.php');
	}
else if(isSet($_POST['deleteStaffButton']))
	{
	deleteStaff();
	echo "<script>";
	echo " alert('Staff Record has been deleted.');
		</script>";
	header( "refresh:1; url=staffList.php" );
	}
else if(isSet($_POST['updateStaffButton']))
	{
	updateStaffInformation();
	header( "refresh:1; url=staffList.php" );
	}


?>