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
//updateStaffForm.php
include "staff.php";
$userType=$_POST['staffIdToUpdate'];
$qry = getCarInformation($userType);//call function to get detail car data
$row = mysqli_fetch_assoc($qry);

//assign data to variable
$custname = $row['custname'];
$custusername = $row['custusername'];
$custemail =$row['custemail'];
$custpass = $row['custpass'];
$custphoneno =$row['custphoneno'];


echo '<div id ="set" style="line-height: 1.8;">';
echo '<form action="processStaff.php" method="post">';
echo '<fieldset><legend>Staff Information Update:</legend>';


echo '<br>Staff Name :';
echo "<input type='text' name='custname' value='$custname'>";

echo '<br>Staff Username :';
echo "<input type='text' name='custusername' readonly value='$custusername'>";

echo '<br>Staff Email :';
echo "<input type='text' name='custemail' value='$custemail'>";

echo '<br>Staff Contact Number :';
echo "<input type='text' name='custphoneno' value='$custphoneno'>";

echo '<br>Staff Password :';
echo "<input type='text' name='custpass' value='$custpass'>";

echo '<br><br><input type="submit" name="updateStaffButton" value="Save">';
echo '<input type ="reset" name="resetButton" value="reset">';

echo '</fieldset>';
echo '</form>';
echo '</div>';
?>
