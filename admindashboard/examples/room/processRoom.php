<?php
include "room.php";
if(isSet($_POST['addRoomButton']))
	{
		echo "<script>";
	echo " alert('A new Room Record has been added.');
		</script>";
	header('Location: roomInfo.php');
	}
else if(isSet($_POST['saveNewRoomButton']))
	{
	addNewRoom();
	header('Location: roomList.php');
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
	echo "<script>";
	echo " alert('Room Record has been updated.');
		</script>";
	header( "refresh:1; url=roomList.php" );
	}


?>