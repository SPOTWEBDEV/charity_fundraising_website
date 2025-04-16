<?php include '../server/connection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Poora - Fundraising & Charity Template">

    <!-- ========== Page Title ========== -->
    <title><?php echo $sitename ?> || Event Page</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../assets/css/themify-icons.css" rel="stylesheet" />
    <link href="../assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="../assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="../assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="../assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="../assets/css/animate.css" rel="stylesheet" />
    <link href="../assets/css/bootsnav.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5/html5shiv.min.js"></script>
      <script src="../assets/js/html5/respond.min.js"></script>
    <![endif]-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        rel="stylesheet">

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top
    ============================================= -->
    <?php include '../include/nav.php' ?>
    <!-- End Header -->

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed padding-xl text-light"
        style="background-image: url(../assets/img/2.jpg);">
        <div class="container">
            <div class="breadcrumb-items">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>About us</h2>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Page</a></li>
                    <li class="active">About</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Event Area
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row align-center">

                <div class="col-lg-6 popular-causes">
                    <div class="causes-box">
                        <h4> <i class="fas fa-bolt"></i> Popular Causes</h4>
                        <div style="display: flex;gap:10px;" class="item">
                            <div class="thumb">
                                <img src="<?php echo $domain ?>assets/img/school-4.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <a href="<?php echo $domain ?>education/">
                                    <span class="cats">
                                        Education
                                    </span>
                                </a>
                                <h4>
                                    <a href="#">Empower Education in Africa</a>
                                </h4>
                                <!-- <div class="progress-box">
                                <p>Raised : $6,230 <span class="float-right">Goal : $8,400</span></p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="87"></div>
                                </div>
                                <span>Fund collected: 87%</span>
                            </div> -->
                            </div>
                        </div>
                        <div style="display: flex;gap:10px;" class="item">
                            <div class="thumb">
                                <img src="<?php echo $domain ?>assets/img/9.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <a href="<?php echo $domain ?>health/">
                                    <span class="cats">
                                        Healthcare
                                    </span>
                                </a>
                                <h4>
                                    <a href="#">Affordable Healthcare for All</a>
                                </h4>
                                <!-- <div class="progress-box">
                                <p>Raised : $970 <span class="float-right">Goal : $1,800</span></p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="55"></div>
                                </div>
                                <span>Fund collected: 55%</span>
                            </div> -->
                            </div>
                        </div>
                        <div style="display: flex;gap:10px;" class="item">
                            <div class="thumb">
                                <img src="<?php echo $domain ?>assets/img/1.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <a href="<?php echo $domain ?>housing/">
                                    <span class="cats">
                                        Housing
                                    </span>
                                </a>
                                <h4>
                                    <a href="#">Safe Housing for Vulnerable Families</a>
                                </h4>
                                <!-- <div class="progress-box">
                                <p>Raised : $2,400 <span class="float-right">Goal : $4,300</span></p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="77"></div>
                                </div>
                                <span>Fund collected: 77%</span>
                            </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 info">
                    <h5>About Us</h5>
                    <h2 class="text-blur">About</h2>
                    <h2 class="area-title">HEO Eziokwu Foundation Organization</h2>
                    <p>
                        HEO Eziokwu Foundation organisation is dedicated to bridging the opportunity gap for less
                        privileged communities, offering hope and resources that enable individuals to thrive. By
                        addressing critical needs, we aim to create a foundation of support that empowers families to
                        pursue better and more dignified lives. Our initiatives are tailored to connect families with
                        the resources they deserve, ultimately strengthening entire communities and fostering long-term
                        resilience.

                    </p>


                    <a class="btn circle btn-theme border btn-md" href="./payment">Sponsor us</a>
                </div>

            </div>
        </div>
    </div>

    <!-- End Event Area -->

    <!-- Start Footer
    ============================================= -->
    <?php include '../include/footer.php' ?>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="../assets/js/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/equal-height.min.js"></script>
    <script src="../assets/js/jquery.appear.js"></script>
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/modernizr.custom.13711.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/progress-bar.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/js/count-to.js"></script>
    <script src="../assets/js/YTPlayer.min.js"></script>
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/bootsnav.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>