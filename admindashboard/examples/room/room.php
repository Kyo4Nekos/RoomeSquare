<?php
//addNewRoom function==================
function addNewRoom()
{
$con = mysqli_connect("localhost","hotel","hotel","hoteldb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $roomType = $_POST['roomType'];
 $bedType = $_POST['bedType'];
 $price = $_POST['price'];
  
  $sql="INSERT INTO rooms(roomType, bedType,price) VALUES ('$roomType','$bedType','$price')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);
}

//getListOfCar function ==================
function getListOfRoom()
{
//create connection
$con=mysqli_connect("localhost","hotel","hotel","hoteldb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "SELECT * from rooms WHERE roomType='Room'";
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

//delete function ==================
function deleteRoom()
{
$con = mysqli_connect("localhost","hotel","hotel","hoteldb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}

 $roomType = $_POST['RoomToDelete'];//get selected regNumber to delete
  
  $sql="DELETE from rooms
		where roomType ='Room'";
		echo $sql;
	$qry = mysqli_query($con,$sql);

}

//================updateRoomInformation
function updateRoomInformation()
{
//create connection
$con=mysqli_connect("localhost","hotel","hotel","hoteldb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
//get the data to update
 $price = $_POST['price'];
 $bedType = $_POST['bedType'];
 
$sql = 'UPDATE rooms SET  price = "'.$price.'", bedType = "'.$bedType.'",  WHERE roomType = "Room"';
	echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

//getAvailableRoomOnTheseDate function ==================
function getAvailableRoomOnTheseDate($startDate ,$endDate)
{
//create connection
$con=mysqli_connect("localhost","hotel","hotel","hoteldb");
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
?>