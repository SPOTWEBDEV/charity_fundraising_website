<?php include('../server/connection.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Poora - Fundraising & Charity Template">

    <!-- ========== Page Title ========== -->
    <title><?php echo $siteshort ?> || Event Page</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="<?php echo $domain ?>assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="<?php echo $domain ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $domain ?>assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo $domain ?>assets/css/themify-icons.css" rel="stylesheet" />
    <link href="<?php echo $domain ?>assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="<?php echo $domain ?>assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="<?php echo $domain ?>assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo $domain ?>assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?php echo $domain ?>assets/css/animate.css" rel="stylesheet" />
    <link href="<?php echo $domain ?>assets/css/bootsnav.css" rel="stylesheet" />
    <link href="<?php echo $domain ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo $domain ?>assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php echo $domain ?>assets/js/html5/html5shiv.min.js"></script>
      <script src="<?php echo $domain ?>assets/js/html5/respond.min.js"></script>
    <![endif]-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <?php include('../include/nav.php') ?>
    <!-- End Header -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed padding-xl text-light" style="background-image: url(<?php echo $domain ?>assets/img/2.jpg);">
        <div class="container">
            <div class="breadcrumb-items">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Latest Event</h2>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Page</a></li>
                    <li class="active">Event</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Event Area 
    ============================================= -->
    <div class="event-area carousel-shadow default-padding bg-gray">
        <div class="container">
            <div class="event-grid-items">
                <!-- Single Item  -->
                <div class="item">
                    <div class="row">
                        <div class="thumb col-lg-5" style="background-image: url(<?php echo $domain ?>assets/img/school-3.jpg);">
                            <div class="date">
                                12 <strong>Aug</strong>
                            </div>
                        </div>
                        <div class="info col-lg-7">
                            <h4>
                                <a href="#">Educational Empowerment</a>
                            </h4>
                            <p>
                                The HEO Eziokwu Foundation is hosting an event to support educational initiatives. The foundation is focused on providing access to education for underprivileged children and empowering them with skills that will shape their future.
                            </p>
                            <ul class="date">
                                <li>
                                    <i class="fas fa-clock"></i> 10:00 AM - 18:00 PM
                                </li>
                                <li>
                                    <i class="fas fa-calendar-alt"></i> 800 Loring Ave, Estancia
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Item  -->
                <!-- Single Item  -->
                <div class="item">
                    <div class="row">
                        <div class="thumb col-lg-5" style="background-image: url(<?php echo $domain ?>assets/img/6.jpg);">
                            <div class="date">
                                05 <strong>Sep</strong>
                            </div>
                        </div>
                        <div class="info col-lg-7">
                            <h4>
                                <a href="#">Health Care for Vulnerable Communities</a>
                            </h4>
                            <p>
                                The HEO Eziokwu Foundation is providing medical services to underserved populations, ensuring that everyone has access to essential health care, regardless of their background or financial status.
                            </p>
                            <ul class="date">
                                <li>
                                    <i class="fas fa-clock"></i> 08:30 AM - 17:45 PM
                                </li>
                                <li>
                                    <i class="fas fa-calendar-alt"></i> 800 Loring Ave, Estancia
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Item  -->
                <!-- Single Item  -->
                <div class="item">
                    <div class="row">
                        <div class="thumb col-lg-5" style="background-image: url(<?php echo $domain ?>assets/img/football-3.jpg);">
                            <div class="date">
                                29 <strong>Dec</strong>
                            </div>
                        </div>
                        <div class="info col-lg-7">
                            <h4>
                                <a href="#">Football for Youth Development</a>
                            </h4>
                            <p>
                                The HEO Eziokwu Foundation is hosting a football event for youth development. This initiative aims to teach life skills through sports, empowering the youth with values such as teamwork, discipline, and leadership.
                            </p>
                            <ul class="date">
                                <li>
                                    <i class="fas fa-clock"></i> 09:45 AM - 15:30 PM
                                </li>
                                <li>
                                    <i class="fas fa-calendar-alt"></i> 800 Loring Ave, Estancia
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Item  -->
            </div>
            <!-- Paginatin -->
            <div class="donation-pagi text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="navigation">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Paginatin -->
        </div>
    </div>


    <!-- End Event Area -->

    <!-- Start Footer 
    ============================================= -->
    <?php include('../include/footer.php') ?>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="<?php echo $domain ?>assets/js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/popper.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/equal-height.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.appear.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/modernizr.custom.13711.js"></script>
    <script src="<?php echo $domain ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/wow.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/progress-bar.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/count-to.js"></script>
    <script src="<?php echo $domain ?>assets/js/YTPlayer.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/bootsnav.js"></script>
    <script src="<?php echo $domain ?>assets/js/main.js"></script>

</body>

</html>