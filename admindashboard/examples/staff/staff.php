<?php
//addNewCar function==================
function addNewCar()
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
 $custphoneno = $_POST['custphoneno'];
  
  $sql="INSERT INTO customer(userType, custusername,custname,custemail,custphoneno)
	VALUES ('$userType','$custusername','$custname','$custemail','$custphoneno')";
 
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

//searchByRegNumber function ==================
function findCarByRegNumber()
{
//create connection
$con=mysqli_connect("localhost","hotel","hotel","hoteldb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'SELECT * from customer where staffid ="'.$_POST['searchValue'].'"';
echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
//findCarByBrand function ==================
function findCarByBrand()
{
//create connection
$con=mysqli_connect("localhost","hotel","hotel","hoteldb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "SELECT * from staff where staffname like '%".$_POST['searchValue']."%'";
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
function updateCarInformation()
{
//create connection
$con=mysqli_connect("localhost","hotel","hotel","hoteldb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
//get the data to update
 $oldStaffId = $_POST['staffid'];
 $newStaffId = $_POST['newstaffId'];
 $staffname = $_POST['staffname'];
 $staffemail = $_POST['staffemail'];
 $staffnumber = $_POST['staffnumber'];
 $staffaddress = $_POST['staffaddress'];
 
$sql = 'UPDATE staff SET newstaffId ="'.$newStaffId.'", staffname = "'.$staffname.'", model = "'.$staffemail.'", 
staffnumber = "'.$staffnumber.'", staffaddress = "'.$staffaddress.'" WHERE staffid = "'.$oldStaffId.'"';
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