<?php
//addNewRoom function==================
function addNewRoom()
{
$con = mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");
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
 return $qry;
}

//getListOfCar function ==================
function getListOfRoom()
{
//create connection
$con=mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");
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
function deleteRoom()
{
$con = mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}

 $roomType = $_POST['RoomToDelete'];//get selected regNumber to delete
  
  $sql="DELETE from rooms
		where roomType ='".$roomType."'";
		echo $sql;
	$qry = mysqli_query($con,$sql);

}


function getRoomInformation($roomType)
{
//create connection
$con=mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");
if(!$con)
    {
    echo  mysqli_connect_error(); 
    exit;
    }
$sql = "select * from rooms where roomType = '".$roomType."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}


//================updateRoomInformation
function updateRoomInformation()
{
//create connection
$con=mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
//get the data to update
 $roomType = $_POST['roomType'];
 $price = $_POST['price'];
 $bedType = $_POST['bedType'];
 $previous = $_POST['roomTypePrevious'];
$sql = 'UPDATE rooms SET price= "'.$price.'", bedType = "'.$bedType.'", roomType = "'.$roomType.'"  WHERE roomType= "'.$previous.'"';
	echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

//getAvailableRoomOnTheseDate function ==================
function getAvailableRoomOnTheseDate($startDate ,$endDate)
{
//create connection
$con=mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");
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
function findStaffByName()
{
//create connection
$con=mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");
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