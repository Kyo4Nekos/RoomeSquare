<?php

include "room.php";
echo '<h1>K Boutique Room List</h1>';

//add car menu
echo '<form action = "processRoom.php" method ="POST">';
	echo '<br><input type = "submit" name="addRoomButton" value ="Add New Room">';
echo '</form>';

//display car info	
echo '<table border=1>';
echo '<tr>
		<td>Room Type: </td>
		<td>Bed Type: </td>
		<td>Price per Night: </td>
		<td>Delete</td>
		<td>Update</td>
	</tr>';
while($row=mysqli_fetch_assoc($qry))//Display car information
  {

  echo '<tr>';
  echo '<td>'.$row['roomType'].'</td>';
  echo '<td>'.$row['bedType'].'</td>';
  echo '<td>'.$row['price'].'</td>';
  
  //delete menu
  echo '<td>';
			echo '<form action="processRoom.php" method="post" >';
			//echo "<input type='hidden' value='$userType' name='staffIdToDelete'>";
			echo '<input type="submit" name="deleteRoomButton" value="Delete">';
			echo '</form>';
  echo '</td>';
  //update menu
  echo '<td>';
			echo '<form action="updateStaffForm.php" method="post" >';
			//echo "<input type='hidden' value='$userType' name='staffIdToUpdate'>";
			echo '<input type="submit" name="updateRoomButton" value="Update">';
			echo '</form>';
  echo '</td>';
  echo '</tr>';  
  $i++;
  }
	  
echo '</table>';
?>