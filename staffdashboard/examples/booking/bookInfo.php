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

echo '<form action="processBook.php" method="post">';
echo '<fieldset><legend>Enter Room Information:</legend>';
echo 'Room Type:';
echo '<input type="text" name="roomType" required>';
echo '<br>Bed Type:';
echo '<input type="text" name="bedType" required>';
echo '<br>Price:';
echo '<input type="text" name="price" required>';
echo '<br>Amount Due:RM ';
echo '<input type="text" name="amountDue" required>';
echo '<br>Start Date:';
echo '<input type="date" name="startDate" required>';
echo '<br>End Date:';
echo '<input type="date" name="endDate" required>';
echo '<br><br><input type="submit" name="saveNewBookButton" value="Save">';
echo '<input type ="reset" name="resetButton" value="reset">';

echo '</fieldset>';
echo '</form>';
echo '</div>';
?>