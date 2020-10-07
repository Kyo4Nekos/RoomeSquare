<!DOCTYPE html>
<?php	
    session_start();
    if (!(isset($_SESSION['username']) && ($_SESSION['pass'])))
        header ("Location: ../customerlogin/index.html");
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>K Boutique Hotel</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">K Boutique Hotel</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="booking/booking.php">Rooms</a>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="facility/facility.html">Facilities</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="booking/contactUs/contact.html">Contact Us</a></li>
						<li class="dropdown nav-item">
                		<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  		<div>
						My Info
                  		</div>
                  		
                		</a>
                		<ul class="dropdown-menu dropdown-navbar">
                  		<li class="nav-link"><a href="../Homepage_signIn/profile.php" class="nav-item dropdown-item">My Profile</a></li>
                          <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">My Booking</a></li>
                          
                          <li class="dropdown-divider"></li>
                          <li class="nav-link"><a href="booking/contactUs/feedback.html" class="nav-item dropdown-item">Feedback</a></li>
                  		<li class="nav-link"><a href="../Homepage_signIn/logout.php" class="nav-item dropdown-item">Log Out</a></li></ul>
              			</li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">K Boutique, Where cozy memory lasts</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Our hotel conveniently set in the town of Teluk Intan,
																		located along Jalan Sungai Manik. We are just a 10 minutes drive to town where the famous
																		tourist attraction leaning clock tower ‘Menara Condong’ is situated.</p>
																		
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0"> K BOUTIQUE HOTEL </h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4"> Welcome to K Boutique Hotel! Our hotel conveniently set in the town of Teluk Intan, located along Jalan Sungai Manik. We are just a 10 minutes drive to town where the famous tourist attraction leaning clock tower Menara Condong is situated.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">Our Service</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class='fas fa-wifi' style='font-size:48px;color:red'></i>
                            <h3 class="h4 mb-2">Free WiFi</h3> 
                            <p class="text-muted mb-0">Free wireless internet access!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class='fas fa-mug-hot' style='font-size:48px;color:red'></i>
                            <h3 class="h4 mb-2">Breakfast Available</h3>
                            <p class="text-muted mb-0">Served quite an array of breakfast foods ranging from hot items such as make your own 
							 waffles, scrambled eggs, bacon, and oatmeal to cold items such as cereal, fresh fruit salad, etc.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                           <i class='fas fa-smoking-ban' style='font-size:48px;color:red'></i>
                            <h3 class="h4 mb-2">Non-Smooking Rooms </h3>
                            <p class="text-muted mb-0">Guests are allowed to smoke on their room balcony, but not inside the hotel room</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class='fas fa-tshirt' style='font-size:48px;color:red'></i>
                            <h3 class="h4 mb-2">Laundry</h3>
                            <p class="text-muted mb-0">Services all laundry and dry cleaning of all hotel soft furnishing as well as staff uniforms and guest laundry/dry cleaning needs</p>
                        </div>
						</div>
					 <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fa fa-clock-o" style="font-size:48px;color:red"></i>
                            <h3 class="h4 mb-2">Front Desk Service 24 Hours</h3>
                            <p class="text-muted mb-0">If there are no instructions on or around the phone then you could probably just dial '0' for
							front desk and ask to be connected to restaurant room service</p>
                        </div>	
                    </div>
					<div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class='fas fa-luggage-cart' style='font-size:48px;color:red'></i>
                            <h3 class="h4 mb-2">Lugguage Storage</h3>
                            <p class="text-muted mb-0">The hotel will have a space you can leave your luggage and collect it later</p>
                        </div>	
                    </div>
                </div>
            </div>
        </section>

        
       
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - K Boutique</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>