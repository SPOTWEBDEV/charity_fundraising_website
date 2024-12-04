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
    <title><?php echo $siteshort ?> || Contact Page</title>

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
    <div class="breadcrumb-area text-center shadow dark bg-cover padding-xl text-light" style="background-image: url(<?php echo $domain ?>assets/img/banner/23.jpg);">
        <div class="container">
            <div class="breadcrumb-items">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Page</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact 
    ============================================= -->
    <div class="contact-form-area default-padding">
        <div class="container">
            <div class="row align-center">
                <!-- Start Contact Form -->
                <div class="col-lg-7 contact-forms">
                    <div class="content">
                        <div class="heading">
                            <h3>Let’s make the world better, together</h3>
                        </div>
                        <form action="<?php echo $domain ?>assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Contact Form -->
                <div class="col-lg-5 address-info">
                    <div class="address-items">
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <p>
                                    Our Location
                                    <span>Alexima, NT 456678</span>
                                </p>
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                <p>
                                    Send Us Mail
                                    <span><?php echo $siteemail ?></span>
                                </p>
                            </li>
                            <li>
                                <i class="fas fa-mobile-alt"></i>
                                <p>
                                    Call Us
                                    <span><?php echo $sitenumber ?></span>
                                    <span><?php echo $sitenumberF ?></span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Google Maps 
    ============================================= -->
    <div class="maps-area">
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
        </div>
    </div>
    <!-- End Google Maps -->

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