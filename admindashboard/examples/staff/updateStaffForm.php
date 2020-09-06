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
//updateCarForm.php
include "staff.php";
$staffid=$_POST['staffIdToUpdate'];
$qry = getCarInformation($staffid);//call function to get detail car data
$row = mysqli_fetch_assoc($qry);
//assign data to variable
$staffname = $row['staffname'];
$staffemail =$row['staffemail'];
$staffnumber =$row['stuffnumber'];
$stufaddress = $row['stufaddress'];

echo '<div id ="set" style="line-height: 1.8;">';
echo '<form action="processStaff.php" method="post">';
echo '<fieldset><legend>Staff Information Update:</legend>';

echo 'ID Number:';
echo "<input type='text' name='newStaffId' value='$staffid' required>";
echo "<input type='hidden' name='staffid' value='$staffid' >";

echo '<br>Staff Name :';
echo "<input type='text' name='model' value='$staffname'>";

echo '<br>Staff Email :';
echo "<input type='date' name='regDate' value='$staffemail'>";

echo '<br>Staff Contact Number :';
echo "<input type='number' name='price' value='$staffnumber'>";

echo '<br>Staff Address :';
echo "<input type='number' name='price' value='$staffaddress'>";

echo '<br><br><input type="submit" name="updateStaffButton" value="Save">';
echo '<input type ="reset" name="resetButton" value="reset">';

echo '</fieldset>';
echo '</form>';
echo '</div>';
?>
