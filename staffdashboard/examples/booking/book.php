<?php
//book.php
//addNewRoom function==================
function addNewBook()
{
$con = mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","id14806959_hoteldb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $roomType = $_POST['roomType'];
 $bedType = $_POST['bedType'];
 $price = $_POST['price'];
 $amountDue = $_POST['amountDue'];
 $startDate = $_POST['startDate'];
 $endDate = $_POST['endDate'];
  
  $sql="INSERT INTO rooms(roomType, bedType, price, amountDue, startDate, endDate) VALUES ('$roomType','$bedType','$price', '$amountDue', '$startDate','$endDate')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);
 return $qry;
}

//getListOfBook function ==================
function getListOfBook()
{
//create connection
$con=mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","id14806959_hoteldb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "SELECT * from rooms";
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

//delete function ==================
function deleteBook()
{
$con = mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","id14806959_hoteldb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}

 $roomType = $_POST['BookToDelete'];//get selected regNumber to delete
  
  $sql="DELETE from rooms
		where roomType ='".$roomType."'";
		echo $sql;
	$qry = mysqli_query($con,$sql);

}


function getBookInformation($roomType)
{
//create connection
$con=mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","id14806959_hoteldb");
if(!$con)
    {
    echo  mysqli_connect_error(); 
    exit;
    }
$sql = "select * from rooms where roomType = '".$roomType."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}


//================updateBookInformation
function updateBookInformation()
{
//create connection
$con=mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","id14806959_hoteldb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
//get the data to update
 $roomType = $_POST['roomType'];
 $price = $_POST['price'];
 $bedType = $_POST['bedType'];
 $amountDue = $_POST['amountDue'];
 $startDate = $_POST['startDate'];
 $endDate = $_POST['endDate'];
 $previous = $_POST['roomTypePrevious'];
$sql = 'UPDATE rooms SET price= "'.$price.'", bedType = "'.$bedType.'", roomType = "'.$roomType.'"  WHERE roomType= "'.$previous.'"';
	echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

//getAvailableBookOnTheseDate function ==================
function getAvailableBookOnTheseDate($startDate ,$endDate)
{
//create connection
$con=mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","id14806959_hoteldb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}

$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];

 $sqlStr = "select roomType,bedType, price from rooms where roomType not in ((SELECT distinct roomType from bookings";
 $sqlStr .= " where startDate BETWEEN '".$startDate."' AND '".$endDate."'";
 $sqlStr .= " or endDate BETWEEN '".$startDate."' AND '".$endDate."'))";
 echo $sqlStr;
 $result = mysqli_query($con,$sqlStr);
 return $result;
 //if no room available, result will be empty

}

//searchByName function ==================
function findBookByName()
{
//create connection
$con=mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","id14806959_hoteldb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$sql = "SELECT * from rooms where roomType like '%".$_POST['searchValue']."%'";
echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
?>