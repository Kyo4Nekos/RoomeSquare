<?php
     session_start();
	if (isset($_POST['updateButton'])) {
		$con = mysqli_connect("localhost","hotel","hotel","hoteldb");
        if (!$con) {
            echo  mysqli_connect_error();
            exit;
        }

        
        $sql = "UPDATE `customer` SET 
		`custname` = '".$_POST['fullname']."', 
		`custemail` = '".$_POST['email']."', 
		`custusername` = '".$_POST['username']."', 
		`custphoneno` = '".$_POST['phone']."'
        WHERE `customer`.`custusername` = '".$_SESSION['username']."'";
        $result = mysqli_query($con, $sql);
		
		echo $sql;
		
		$sql2 = "UPDATE `users` SET 
		`username` = '".$_POST['username']."'
        WHERE `username` = '".$_SESSION['username']."'";
        $result2 = mysqli_query($con, $sql2);

        echo $sql2;
		
		//update session
		$_SESSION['username'] = $_POST['username'];

      
        print_r($_SESSION);
        header("Refresh:2; url=user.php");

    }
?>




