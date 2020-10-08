<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>My Profile</title>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
<link href="css/updatestyle.css" rel="stylesheet" />
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
<script type='text/javascript'></script>
</head>
<?php
//create connection								
$con=mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");
if (!$con) {
	echo  mysqli_connect_error();
	exit;
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$custusername=$_SESSION['username'];

?>
<body>
	<!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">K Boutique Hotel</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="booking/booking.html">Rooms</a>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#facilities">Facilities</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="booking/contact.html">Contact Us</a></li>
						<li class="dropdown nav-item">
                		<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  		<div class = "photo">
						<?php echo '<img src="imageView(2).php?custusername='. $_SESSION['username'].'" class="avatar1 img-circle img-thumbnail" >'; ?>
                  		</div>
                  		
                		</a>
                		<ul class="dropdown-menu dropdown-navbar">
                  		<li class="nav-link"><a href="../Homepage_signIn/profile.php" class="nav-item dropdown-item">My Profile</a></li>
                  		<li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">My Booking</a></li>
                  		<li class="dropdown-divider"></li>
                  		<li class="nav-link"><a href="../Homepage_signIn/logout.php" class="nav-item dropdown-item">Log Out</a></li></ul>
              			</li>
                  		
                  		<p class="d-lg-none">Log out</p>
                		</a>
                		<ul class="dropdown-menu dropdown-navbar">
                  		<li class="nav-link"><a href="../Homepage_signIn/profile.html" class="nav-item dropdown-item">My Profile</a></li>
                  		<li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">My Booking</a></li>
                  		<li class="dropdown-divider"></li>
                  		<li class="nav-link"><a href="../Homepage/index.php" class="nav-item dropdown-item">Log out</a></li>
                		</ul>
              			</li>
                    </ul>
                </div>
            </div>
        </nav>
	<br>
	<br>
	<br>
    <div class="container rounded bg-white mt-5">
    <div class="row">
	<div class="col-md-4">
        <div class="card card-user">
            <div class="card-body">
			<?php
				if (isset($_POST['upload'])) {

				$conn = mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");

				if (count($_FILES) > 0) {
					if (is_uploaded_file($_FILES['image']['tmp_name'])) {
						//require_once "db.php";
						$imgData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
						$imageProperties = getimagesize($_FILES['image']['tmp_name']);

						$sql = "UPDATE `customer` SET `imageData` = '{$imgData}', imageType = '{$imageProperties['mime']}' WHERE `customer`.`custusername` = '" . $_SESSION['username'] . "'";

						$current_id = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($con));
						if (isset($current_id)) {

							//mysqli_close($con);     
						}
							//mysqli_close($con); 
						}
					}
				}
			?>

<style>
.avatar {
  vertical-align: middle;
  width: 100px;
  height: 100px;
  border-radius: 50%;
}

.avatar1 {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
</style>

            <p class="card-text">
                <div class="author">
				<form method="POST" action="" enctype="multipart/form-data">
					<div class="text-center">
						<?php echo '<img src="imageView(2).php?custusername=' . $_SESSION['username'] . '" class="avatar img-circle img-thumbnail">'; ?>
						<br><br>

						<input type="file" name="image" class="text-center center-block file-upload"> <br><br>
						<div class="form-group">

						<input type='submit' name='upload' class='btn btn-primary  vertical-center' style="background-color: #c9c9a3; border-color: #bfbf9d">

						</div>
					</div><br>
				</form>
                </div>
            </p>
            </div>
    </div>
    </div>
        <!--<div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://i.imgur.com/0eg0aG0.jpg" width="90"><span class="font-weight-bold">John Doe</span><span class="text-black-50">john_doe12@bbb.com</span><span>United States</span></div>
        </div>-->
        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <h6>Back to home</h6>
                    </div>
                    <h6 class="text-right">Edit Profile</h6>
                </div> 
				 <table class="table">
				<?php
					$sql = 'SELECT * FROM `customer` WHERE custusername = "' . $_SESSION['username'] . '"';
					$result = mysqli_query($con, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($con), E_USER_ERROR);
					while ($row = mysqli_fetch_assoc($result)) {

					echo '<form action= "update.php" method= "POST">';
					
					
					echo '<div class="row mt-3">';
					echo '<div class="col-md-6"><input type="text" size="50" class="form-control" name="username" value="'.$row['custusername'].'" placeholder="Username"></div>';
					echo '<div class="col-md-6"><input type="text" size="50" class="form-control" name="fullname" value="'.$row['custname'].'" placeholder="Full Name"></div>';
					
					echo '</div>';
					echo '<div class="row mt-3">';

					echo '<div class="col-md-6"><input type="text" size="50" class="form-control" name="email" value="'.$row['custemail'].'" placeholder="Email"></div>';
					echo '<div class="col-md-6"><input type="text" size="50" class="form-control" name="phone" value="'.$row['custphoneno'].'" placeholder="Phone Number"></div>';
					echo '</div>';
					echo '<div class="mt-5 text-right"><button type="submit" class="btn btn-primary profile-button" name="updateButton">Save Profile</button></div>';
					echo '</form>';
						}
				
				?>


				</table>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>