<?php

include "staff.php";
echo '<h1>K Boutique Staff List</h1>';

//===================== search form=====
displaySearchOption();
if(isSet($_POST['searchByUsername']))
	$qry = findStaffByUsername(); //call function in car.php
else if(isSet($_POST['searchByName']))
	$qry = findStaffByName(); //call function in car.php
else
	$qry = getListOfStaff();//display all car

//add car menu
echo '<form action = "processStaff.php" method ="POST">';
	echo '<br><input type = "submit" name="addStaffButton" value ="Add New Staff">';
echo '</form>';

//display car info	
echo '<br>Number of Staff:'.mysqli_num_rows($qry);
echo '<table border=1>';
echo '<tr>
		<td>Index</td>
		<td>Staff Username</td>
		<td>Staff Name</td>
		<td>Staff Email</td>
		<td>Phone Number</td>
		<td>Delete</td>
		<td>Update</td>
	</tr>';
$i=1;
while($row=mysqli_fetch_assoc($qry))//Display car information
  {

  echo '<tr>';
  echo '<td>'.$i.'</td>';
  echo '<td>'.$row['custusername'].'</td>';
  echo '<td>'.$row['custname'].'</td>';
  echo '<td>'.$row['custemail'].'</td>';
  echo '<td>'.$row['custphoneno'].'</td>';
  $userType = $row['userType'];
  //delete menu
  echo '<td>';
			echo '<form action="processStaff.php" method="post" >';
			echo "<input type='hidden' value='$userType' name='staffIdToDelete'>";
			echo '<input type="submit" name="deleteStaffButton" value="Delete">';
			echo '</form>';
  echo '</td>';
  //update menu
  echo '<td>';
			echo '<form action="updateStaffForm.php" method="post" >';
			echo "<input type='hidden' value='$userType' name='staffIdToUpdate'>";
			echo '<input type="submit" name="updateStaffButton" value="Update">';
			echo '</form>';
  echo '</td>';
  echo '</tr>';  
  $i++;
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