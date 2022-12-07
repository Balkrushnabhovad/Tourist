<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once 'Includes/connect.php'; ?>
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.php">home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a class="" href="travel_destination.php">Destination</a></li>
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="destination_details.php">Saintmartine Iceland</a></li>
                                                    <li><a href="admin.php">Admin</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.php">Our Blogs</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">
                                        <p> <i class="fa fa-phone"></i>+91 70301 80360</p>
                                    </div>
                                    <div class="social_links d-none d-xl-block">
                                        <ul>
                                            <li><a href="https://instagram.com"> <i class="fa fa-instagram"></i> </a></li>
                                            <li><a href="https://linkedin.com"> <i class="fa fa-linkedin"></i> </a></li>
                                            <li><a href="https://facebook.com"> <i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="https://googleplus.com"> <i class="fa fa-google-plus"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="seach_icon">
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Admin navigation</h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="sample-text-area">
        <div class="container box_1170">
            <h3 class="text-heading">Booking details</h3>
            <div class="section-top-border">
                <h3 class="mb-30">Table</h3>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="country">Name</div>
                            <div class="country">Package</div>
                            <div class="visit">Phone Number</div>
                            <div class="percentage">Message</div>
                        </div>
                        <?php
                        $sql = "SELECT * FROM booking;";
                        $results = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($results);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($results)) {
                                echo '<div class="table-row">
    <div class="serial">0' . $row["id"] .'</div><div class="country">'.$row['name'].'</div><div class="country">Package-0' . $row["packageid"] . '</div>
    <div class="visit">'.$row['number'].'</div>
    <div class="percentage">'.$row['msg'].'</div>
    </div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sample-text-area">
        <div class="container box_1170">
            <h3 class="text-heading">Contact Us</h3>
            <div class="section-top-border">
                <h3 class="mb-30">Table</h3>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="country">Name</div>
                            <div class="visit">E-Mail</div>
                            <div class="percentage">Subject</div>
                            <div class="percentage">Message</div>
                        </div>
                        <div class="table-row">
                            <div class="serial">01</div>
                            <div class="country">Canada</div>
                            <div class="visit">bunny@travel.com</div>
                            <div class="percentage">
                                Saintmartine Iceland
                            </div>
                            <div class="percentage">
                                Saintmartine Iceland
                            </div>
                        </div>
                        <?php
                        $sql = "SELECT * FROM contactus;";
                        $results = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($results);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($results)) {
                                echo '<div class="table-row">
    <div class="serial">0' . $row["id"] .'</div><div class="country">'.$row['name'].'</div>
    <div class="visit">' . $row["email"] . '</div>
    <div class="percentage">'.$row['sub'].'</div>
    <div class="percentage">'.$row['msg'].'</div>
    </div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sample-text-area">
        <div class="container box_1170">
            <h3 class="text-heading">E-Mail Subscription</h3>
            <div class="section-top-border">
                <h3 class="mb-30">Table</h3>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="country">Name</div>
                            <div class="visit">Active Status</div>
                        </div>
                        <?php
                        $sql = "SELECT * FROM subscribe;";
                        $results = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($results);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($results)) {
                                echo '<div class="table-row">
    <div class="serial">0' . $row["id"] . '</div><div class="country">' . $row["email"] . '</div> <div class="confirm-switch">
    <input type="checkbox" id="confirm-switch" checked>
    <label for="confirm-switch"></label>
</div></div>';
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
    </section>


    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p>Anand Vishwa Gurukul <br> Raghunath Nagar ,Wagle Estate,<br>Thane, Maharashtra 400082 <br>
                                <a href="#">+91 70301 80360</a> <br>
                                <a href="#">bunny@travel.com</a>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul class="links">
                                <li><a href="travel_destination.php">Pricing</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="gallery.php"> Gallery</a></li>
                                <li><a href="contact.php"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Popular destination
                            </h3>
                            <ul class="links double_links">
                                <li><a href="travel_destination.php">Indonesia</a></li>
                                <li><a href="travel_destination.php">America</a></li>
                                <li><a href="travel_destination.php">India</a></li>
                                <li><a href="travel_destination.php">Switzerland</a></li>
                                <li><a href="travel_destination.php">Italy</a></li>
                                <li><a href="travel_destination.php">Canada</a></li>
                                <li><a href="travel_destination.php">Franch</a></li>
                                <li><a href="travel_destination.php">England</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Instagram
                            </h3>
                            <div class="instagram_feed">
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/1.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/2.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/3.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/4.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/5.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/6.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- Modal -->
    <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="serch_form">
                    <input type="text" placeholder="Search">
                    <button type="submit">search</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>