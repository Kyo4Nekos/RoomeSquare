<?php

include "room.php";
echo '<h1>K Boutique Room List</h1>';

//===================== search form=====
displaySearchOption();
if(isSet($_POST['searchByRoomType']))
	$qry = findRoomByRoomType(); //call function in car.php
else
	$qry = getListOfRoom();//display all car

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
			echo "<input type='hidden' value='".$row['roomType']."' name='RoomToDelete'>";
			echo '<input type="submit" name="deleteRoomButton" value="Delete">';
			echo '</form>';
  echo '</td>';
  //update menu
  echo '<td>';
			echo '<form action="updateRoomForm.php" method="post" >';
			echo "<input type='hidden' value='".$row['roomType']."' name='RoomToUpdate'>";
			echo '<input type="submit" name="updateRoomButton" value="Update">';
			echo '</form>';
  echo '</td>';
  echo '</tr>'; 
  }
	  
echo '</table>';
?>

<?php
//to display the search menu
function displaySearchOption()
{
 echo '
<form action="" method="post">
<br>
<fieldset style ="width:70%;"><legend>Search Option</legend>
<table border=1>
<tr><td> Search Bar : </td><td><input type=text name=searchValue><br></td></tr>
<td></td><td>
<input type=submit name = searchByUsername value="By Username">
<input type=submit name = searchByName value="By Name">
<input type=submit name = displayAll value="Display All"></td>
</table>
</fieldset>
</form>';
}
?>