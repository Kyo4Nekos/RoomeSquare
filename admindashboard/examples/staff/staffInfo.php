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
//carInfo.php

echo '<div id ="set" style="line-height: 1.8;">';

echo '<form action="processStaff.php" method="post">';
echo '<fieldset><legend>Enter Staff Information:</legend>';
echo 'User Type:';
echo '<input type="text" name="userType" required>';
echo '<br>Staff Name:';
echo '<input type="text" name="custname" required>';
echo '<br>Staff Username:';
echo '<input type="text" name="custusername" required>';
echo '<br>Staff Email:';
echo '<input type="text" name="custemail">';
echo '<br>Password:';
echo '<input type="text" name="custpass">';
echo '<br>Phone Number:';
echo '<input type="text" name="custphoneno">';
echo '<br><br><input type="submit" name="saveNewCarButton" value="Save">';
echo '<input type ="reset" name="resetButton" value="reset">';

echo '</fieldset>';
echo '</form>';
echo '</div>';
?>