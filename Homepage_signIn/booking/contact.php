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
                <li><a href="../index.php">Home</a></li>
                <li><a href="../Homepage/booking/room.php">Rooms</a></li>
                <li class="active"><a href="booking/contact.php">Contact Us</a></li>
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
                                        <li><a href="./room.php">Rooms</a></li>
                                        <li><a href="../facility/facilities.php">Facility</a></li>
                                        <li class="active"><a href="./contact.php">Contact Us</a></li>
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
                        <h2>Our Contact</h2>
                        <div class="bt-option">
                            <a href="../index.php">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Contact Us</h2>
                        <p>Your feedback helps us change for the better. Got an idea that would help our website more? Have an opinion on one of our services?</p>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="c-o">Address:</td>
                                    <td>No 13A, Lorong Shahbandar 3, Pusat Perniagaan Intan Flora, 36000 Teluk Intan, Perak, Malaysia </td>
                                </tr>
                                <tr>
                                    <td class="c-o">Phone:</td>
                                    <td>+605-620 5833</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Email:</td>
                                    <td>info@kboutiquehotel.com.my</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Website:</td>
                                    <td>www.kboutiquehotel.com.my</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <form method="POST" action="contactSend.php" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your Name" name="contactName">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your Email" name="contactEmail">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Your Message"name="contactMessage"></textarea>
                                <button type="submit">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="map">
                <iframe
                    src="https://meet.google.com/linkredirect?authuser=0&dest=https%3A%2F%2Fwww.google.com%2Fmaps%2Fembed%3Fpb%3D!1m18!1m12!1m3!1d3980.047289741807!2d101.03763881423023!3d4.010697697083287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cb14c374e96d23%253A0x4e24bced15d9ac3!2sK%2520Boutique%2520Hotel!5e0!3m2!1sen!2smy!4v1602172238748!5m2!1sen!2smy"
                    height="470" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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
                            <li><a href="../privacypolicy/privacypolicy.php">Privacy Notice</a></li>
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