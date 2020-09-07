<?php
//addNewStaff function==================
function addNewRoom()
{
$con = mysqli_connect("localhost","hotel","hotel","hoteldb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $userType = $_POST['userType'];
 $custusername = $_POST['custusername'];
 $custname = $_POST['custname'];
 $custemail = $_POST['custemail'];
 $custpass = $_POST['custpass'];
 $custphoneno = $_POST['custphoneno'];
  
  $sql="INSERT INTO customer(userType, custusername,custname,custemail,custpass,custphoneno)
	VALUES ('$userType','$custusername','$custname','$custemail','$custpass','$custphoneno')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);
}

//getListOfCar function ==================
function getListOfStaff()
{
//create connection
$con=mysqli_connect("localhost","hotel","hotel","hoteldb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "SELECT * from customer WHERE userType='STAFF'";
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

//delete function ==================
function deleteStaff()
{
$con = mysqli_connect("localhost","hotel","hotel","hoteldb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}

 $regNumber = $_POST['staffIdToDelete'];//get selected regNumber to delete
  
  $sql="DELETE from customer
		where userType ='STAFF'";
		echo $sql;
	$qry = mysqli_query($con,$sql);

}

//searchByName function ==================
function findStaffByName()
{
//create connection
$con=mysqli_connect("localhost","hotel","hotel","hoteldb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$sql = "SELECT * from customer where userType = 'STAFF' AND custname like '%".$_POST['searchValue']."%'";
echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
//findCarByUsername function ==================
function findCarByUsername()
{
//create connection
$con=mysqli_connect("localhost","hotel","hotel","hoteldb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "SELECT * from customer where custusername like '%".$_POST['searchValue']."%'";
echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
function findCarByModel()
{
//create connection
$con=mysqli_connect("localhost","web2","web2","cardb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from car where model like '%".$_POST['searchValue']."%'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
//============getCarInformation
function getCarInformation($regNum)
{
//create connection
$con=mysqli_connect("localhost","web2","web2","cardb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from car where regNumber = '".$regNum."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
//================updateCarInformation
function updateStaffInformation()
{
//create connection
$con=mysqli_connect("localhost","hotel","hotel","hoteldb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
//get the data to update
 $custname = $_POST['custname'];
 $custusername = $_POST['custusername'];
 $custemail = $_POST['custemail'];
 $custpass = $_POST['custpass'];
 $custphoneno = $_POST['custphoneno'];
 
 
$sql = 'UPDATE customer SET  custname = "'.$custname.'", custusername = "'.$custusername.'", 
custemail = "'.$custemail.'", custpass = "'.$custpass.'", custphoneno = "'.$custphoneno.'" WHERE userType = "STAFF"';
	echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
//getAvailableCarOnTheseDate function ==================
function getAvailableCarOnTheseDate($startDate ,$endDate)
{
$con = mysqli_connect('localhost','web2','web2','cardb');
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $sqlStr = "select regNumber,brand, model,price from car
where regNumber not in(
(SELECT distinct regNumber from bookings";
 $sqlStr .= " where Date_rent_start BETWEEN '".$startDate."' AND '".$endDate."'";
 $sqlStr .= " or Date_rent_end BETWEEN '".$startDate."' AND '".$endDate."'))";
 echo $sqlStr;
 $result = mysqli_query($con,$sqlStr);
 return $result;//if no car available, result will be empty

}
?>