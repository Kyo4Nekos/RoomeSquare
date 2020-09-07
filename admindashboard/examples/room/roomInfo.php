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
//addnewStaff

echo '<div id ="set" style="line-height: 1.8;">';

echo '<form action="processRoom.php" method="post">';
echo '<fieldset><legend>Enter Staff Information:</legend>';
echo 'Room Type:';
echo '<input type="text" name="roomType" required>';
echo '<br>Bed Type:';
echo '<input type="text" name="bedType" required>';
echo '<br>Price:';
echo '<input type="text" name="price" required>';
echo '<br><br><input type="submit" name="saveNewCarButton" value="Save">';
echo '<input type ="reset" name="resetButton" value="reset">';

echo '</fieldset>';
echo '</form>';
echo '</div>';
?>