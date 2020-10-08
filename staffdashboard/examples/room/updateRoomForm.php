<style>
	body{
		 background-color:#e6fff2;
	}
	#set {
	 margin:auto;
	 width:50%;
	 text-align:center;

	 }
</style>

<?php
//updateRoomForm.php
include "room.php";
$roomType=$_POST['RoomToUpdate'];
$qry = getRoomInformation($roomType);
$row = mysqli_fetch_assoc($qry);
//assign data to variable
$roomType = $row['roomType'];
$bedType = $row['bedType'];
$price =$row['price'];

echo '<div id ="set" style="line-height: 1.8;">';
echo '<form action="processRoom.php" method="post">';
echo '<fieldset><legend>Room Information Update:</legend>';


echo '<br>Room Type :';
echo "<input type='text' name='roomType' value='$roomType'><input type='hidden' name='roomTypePrevious' value='$roomType'>";

echo '<br>Bed Type :';
echo "<input type='text' name='bedType' value='$bedType'>";

echo '<br>Price per night :';
echo "<input type='text' name='price' value='$price'>";

echo '<br><br><input type="submit" name="updateRoomButton" value="Save">';
echo '<input type ="reset" name="resetButton" value="reset">';

echo '</fieldset>';
echo '</form>';
echo '</div>';
?>