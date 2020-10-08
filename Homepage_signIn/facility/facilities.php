<!DOCTYPE html>
<?php	
    session_start();
    if (!(isset($_SESSION['username']) && ($_SESSION['pass'])))
        header ("Location: ../customerlogin/index.html");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>K Boutique Hotel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <img src="img/flag.jpg" alt="">
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                </div>
            </div>
            <a href="#" class="bk-btn">Booking Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="../Homepage/booking/room.html">Rooms</a></li>
                <li><a href="booking/contact.html">Contact Us</a></li>
                <li><a href="facility/facility.html">Facility</a></li>
                <li><a href="./pages.php">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./room-details.php">Room Details</a></li>
                        <li><a href="#">Deluxe Room</a></li>
                        <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li>
                    </ul>
                </li>
                <li><a href="./blog.php">News</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> +605-620 5833</li>
            <li><i class="fa fa-envelope"></i> info@kboutiquehotel.com.my</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> +605-620 5833</li>
                            <li><i class="fa fa-envelope"></i> info@kboutiquehotel.com.my</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                        <li><a href="../index.php">Home</a></li>
                                        <li><a href="..//booking/room.php">Rooms</a></li>
                                        <li class="active"><a href="./facilities">Facility</a></li>
                                        <li><a href="../booking/contact.php">Contact Us</a></li>
                                        <?php
                                            echo ' <li><a href="#">'.$_SESSION['username'].'</a>';
                                        ?>
                                       
                                        <ul class="dropdown">
                                            <li><a href="../profile.php">My Profile</a></li>
                                            <li><a href="../logout.php">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    
        <!-- Breadcrumb Section Begin -->
        <div class="breadcrumb-section">
            <div class="container">
               <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Our Facilities</h2>
                        <div class="bt-option">
                            <a href="../index.php">Home</a>
                            <span>Facilities</span>
                            <br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Breadcrumb Section End -->

    <!-- Facility Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/facility-5.jpg" height="250" width="250" alt="">
                        <div class="ri-text">
                            <h4>Conference Room</h4>
                            <table>
                                    <p>Enjoy the wonders of minimalist design while having a meeting in one of our conference room. The room is outfitted with modern meeting equipment and supplies.</p>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/facility-6.jpg" height="250" width="250" alt="">
                        <div class="ri-text">
                            <h4>Bean & Butter Cafe</h4>
                            <table>
                                    <p>Have a break in our partner cafe while breathing the smell of brewed coffee.  Either you are looking for an eatery for some relax meal or a busy business traveller, you may just grab some quick brunch with some of our menu choices. Do feel welcome and drop by this notable cafe when you're nearby!</p>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/facility-1.jpg" height="250" width="250" alt="">
                        <div class="ri-text">
                            <h4>Love Gift Shop</h4>
                            <table>
                                    <p>Need to buy a souviner need for your love ones? The Love Gift Shop would be the place to buy those colourful sundries and local souviners to take back home!</p>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/facility-2.jpg" height="250" width="250" alt="">
                        <div class="ri-text">
                            <h4>Rooftop Swimming Pool</h4>
                            <table>
                                    <p>Desire a place to kickback and relax? Just head on upstairs to our rooftop pool and swim away! The only boutique hotel in Teluk Intan to have a pool; on the rooftop too!</p>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/facility-3.jpg" height="250" width="250" alt="">
                        <div class="ri-text">
                            <h4>Minimalist Spa</h4>
                            <table>
                                    <p>Need a selfcare time to yourself? Enjoy your time at our Spa that will rejuvenate yoruself back to health in the design of minimalist. Rest assure, you are in the hands of professional masseurs.</p>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/facility-4.jfif" height="250" width="250" alt="">
                        <div class="ri-text">
                            <h4>K Corner</h4>
                            <table>
                                    <p>Need a time to take a break to browse the web? Enjoy the corner that we have provided with sitting areas to browse on your smartphone and laptops. We also provide computers that guests can use. Always up to date to latest security patch, you won't feel unsecured!</p>
                            </table>
                        </div>
                    </div>
                </div>
    </section>
    <!-- Rooms Section End -->

     <!-- Footer Section Begin -->
     <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                               
                            </div>
                            <p>We inspire and reach millions of travelers<br /> across 90 local websites</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>+605-620 5833</li>
                                <li>info@kboutiquehotel.com.my</li>
                                <li>No 13A, Lorong Shahbandar 3, Pusat Perniagaan Intan Flora, 36000 Teluk Intan, Perak, Malaysia</li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="./privacypolicy/privacypolicy.html">Privacy Notice</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

  

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>