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
echo 'ID Number:';
echo '<input type="text" name="staffId" required>';
echo '<br>Brand:';
echo '	<select name = "brand">
	  <option value="Proton">Proton</option>
	  <option value="Perodua">Perodua</option>
	  <option value="Toyota">Toyota</option>
	  <option value="Nissan">Nissan</option>
	  <option value="Others">Others</option>
	</select>';
echo '<br>Model :';
echo '<input type="text" name="model">';

echo '<br>Date of registration :';
echo '<input type="date" name="regDate">';
echo '<br>Price :';
echo '<input type="number" name="price">';
echo '<br><br><input type="submit" name="saveNewCarButton" value="Save">';
echo '<input type ="reset" name="resetButton" value="reset">';

echo '</fieldset>';
echo '</form>';
echo '</div>';
?>