<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    K Boutique Hotel Staff
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>
<?php
//create connection								
$con=mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","id14806959_hoteldb");
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
<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            KBH
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            K Boutique Hotel
          </a>
        </div>
        <ul class="nav">		  
          <li class="active ">
            <a href="./dashboard.html">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./icons.html">
              <i class="tim-icons icon-notes"></i>
              <p>Room</p>
            </a>
          </li> 
          <li>
            <a href="./custbooking.html">
              <i class="tim-icons icon-bullet-list-67"></i>
              <p>Customer Booking Details</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Staff Profile</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <?php echo '<img src="imageView.php?custusername=' . $_SESSION['username'] . '" class="avatar img-circle img-thumbnail">'; ?>
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link"><a href="user.html" class="nav-item dropdown-item">Profile</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="logout.php" class="nav-item dropdown-item">Log out</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
              
              <?php
					$sql = 'SELECT * FROM `customer` WHERE custusername = "' . $_SESSION['username'] . '"';
					$result = mysqli_query($con, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($con), E_USER_ERROR);
					while ($row = mysqli_fetch_assoc($result)) {

				/*	echo '<form action= "update.php" method= "POST">';
					echo '<div class="row">';
						echo        '<div class="column">';
						
					//echo '<div class="row mt-3">';
					echo '<div class="col-md-6"><input type="text" size="50" class="form-control" name="username" value="'.$row['custusername'].'" placeholder="Username"></div>';
					echo '<div class="col-md-6"><input type="text" size="50" class="form-control" name="fullname" value="'.$row['custname'].'" placeholder="Full Name"></div>';
					//echo '</div>';
					//echo '<div class="row mt-3">';
					echo '<div class="col-md-6"><input type="text" size="50" class="form-control" name="email" value="'.$row['custemail'].'" placeholder="Email"></div>';
					echo '<div class="col-md-6"><input type="text" size="50" class="form-control" name="phone" value="'.$row['custphoneno'].'" placeholder="Phone Number"></div>';
					echo '</div>';
          echo '</form>';*/
          
          echo '<form action= "update.php" method= "POST">';
          echo   '<div class="row">';
          echo    '<div class="col-md-5 pr-md-1">';
          echo       '<div class="form-group">';
          echo          '<label>Company (disabled)</label>';
          echo          '<input type="text" class="form-control" disabled="" placeholder="Company" value="K Boutique Hotel">';
          echo        '</div>';
          echo      '</div>';
          echo     '<div class="col-md-3 px-md-1">';
          echo        '<div class="form-group">';
          echo          '<label>Username</label>';
          echo          '<input type="text" class="form-control" value="'.$row['custusername'].'" placeholder="Username" name="username">';
          echo        '</div>';
          echo      '</div>';
          
          echo    '</div>';
				  echo '<div class="row">';
          echo      '<div class="col-md-6 pr-md-1">';
          echo        '<div class="form-group">';
          echo          '<label>Email Address</label>';
          echo         '<input type="email" class="form-control" value="'.$row['custemail'].'" placeholder="Email" name="email">';
          echo        '</div>';
          echo      '</div>';
          echo    '</div>';
          echo    '<div class="row">';
          echo      '<div class="col-md-6 pr-md-1">';
          echo        '<div class="form-group">';
          echo          '<label>Full Name</label>';
          echo          '<input type="text" class="form-control" value="'.$row['custname'].'" placeholder="Name" name="fullname">';
          echo        '</div>';
          echo      '</div>';
          echo    '</div>';
          echo    '<div class="row">';
          echo      '<div class="col-md-6 pr-md-1">';
          echo       '<div class="form-group">';
          echo          '<label>Phone</label>';
          echo          '<input type="text" class="form-control" value="'.$row['custphoneno'].'" placeholder="Phone Number" name="phone">';
          echo        '</div>';
          echo      '</div>';
          echo    '</div>';
          echo    '<div class="card-footer">';
          echo  '<button type="submit" name="updateButton" class="btn btn-primary profile-button">Save</button>';
          echo '</div>';
          echo  '</form>';
            }
            
				?>
              </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="card-body">
			  <?php
					if (isset($_POST['upload'])) {

					$conn = mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","id14806959_hoteldb");

					if (count($_FILES) > 0) {
						if (is_uploaded_file($_FILES['image']['tmp_name'])) {
							//require_once "db.php";
							$imgData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
							$imageProperties = getimagesize($_FILES['image']['tmp_name']);

							$sql = "UPDATE `customer` SET `imageData` = '{$imgData}', imageType = '{$imageProperties['mime']}' WHERE `customer`.`custusername` = '" . $_SESSION['username'] . "'";
							//$sql = "INSERT INTO admin(imageType ,imageData) VALUES('{$imageProperties['mime']}', '{$imgData}')";
							$current_id = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($con));
							if (isset($current_id)) {

								//mysqli_close($con);     
							}
								//mysqli_close($con); 
							}
						}
					}
			?>
                <p class="card-text">
                  <div class="author">
                    <div class="block block-one"></div>
                    <div class="block block-two"></div>
                    <div class="block block-three"></div>
                    <div class="block block-four"></div>
					<form method="POST" action="" enctype="multipart/form-data">
						<div class="text-center">
							<?php echo '<img src="imageView.php?custusername=' . $_SESSION['username'] . '" class="avatar img-circle img-thumbnail">'; ?>
							<br><br>

							<input type="file" name="image" class="text-center center-block file-upload"> <br><br>
							<div class="form-group">

							<input type='submit' name='upload' class='btn btn-primary  vertical-center' style="background-color: #c9c9a3; border-color: #bfbf9d">

							</div>
						</div><br>
					</form>
					<!-- <input type="file" name="image" class="text-center center-block file-upload"> <br><br>
					<div class="form-group">

					<input type='submit' name='upload' class='btn btn-primary  vertical-center' style="background-color: #c9c9a3; border-color: #bfbf9d">

					</div>
                    <a href="javascript:void(0)">
					  
						<br><br>
                      <img class="avatar" src="../assets/img/emilyz.jpg" alt="...">
                      <h5 class="title">Delila Ahmad</h5>
                    </a> 
                    <p class="description">
                      Staff 
                    </p>-->
                  </div>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>2020 made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">K Boutique Hotel</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
		  </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
</body>

</html>