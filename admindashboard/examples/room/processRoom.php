<?php
include "rooms.php";
if(isSet($_POST['addRoomButton']))
	{
	header('Location: staffInfo.php');
	}
else if(isSet($_POST['saveNewRoomButton']))
	{
	addNewRoom();
	header('Location: staffList.php');
	}
else if(isSet($_POST['deleteRoomButton']))
	{
	deleteRoom();
	echo "<script>";
	echo " alert('Room Record has been deleted.');
		</script>";
	header( "refresh:1; url=roomList.php" );
	}
else if(isSet($_POST['updateRoomButton']))
	{
	updateRoomInformation();
	header( "refresh:1; url=RoomList.php" );
	}


?>