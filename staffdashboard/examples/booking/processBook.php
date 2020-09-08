<?php
include "book.php";
if(isSet($_POST['addBookButton']))
	{
	header('Location: bookInfo.php');
	}
else if(isSet($_POST['saveNewBookButton']))
	{
	addNewBook();
	header('Location: bookList.php');
	}
else if(isSet($_POST['deleteBookButton']))
	{
	deleteBook();
	echo "<script>";
	echo " alert('Booking Record has been deleted.');
		</script>";
	header( "refresh:1; url=bookList.php" );
	}
else if(isSet($_POST['updateBookButton']))
	{
	updateBookInformation();
	header( "refresh:1; url=bookList.php" );
	}


?>