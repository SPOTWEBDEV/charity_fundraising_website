<?php

include('../server/connection.php');
include('../server/model.php');
include('../server/payment/index.php');





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Poora - Fundraising & Charity Template">

    <!-- ========== Page Title ========== -->
    <title><?php echo $siteshort ?> || Donation Page</title>

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

    <?php include('../include/nav.php') ?>



    <div class="donation-area text-light bg-gray default-padding">
            <!-- Fixed BG-->
            <div class="fixed-bg" style="background-image: url(<?php echo $domain ?>assets/img/9.jpg);"></div>
            <!-- End Fixed BG-->
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-12 info">
                        <h5>Donate Today</h5>
                        <h2 class="area-title">Your donations bring hope and change lives</h2>
                        <p>
                            Your generosity fuels projects that provide healthcare, education, and safe housing for those in need. Together, we can create a brighter future and uplift communities across the globe.
                        </p>
                        <div class="question">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info">
                                <h5>Have questions about donating?</h5>
                                <span>Call Now: +123 3456789</span>
                            </div>
                        </div>
                    </div>


                    <style>
                        .donation-area .donation-form span.input-group-addon {
                            padding: 6px 12px;
                            line-height: 38px;
                            border-radius: 0 5px 5px 0;
                            display: flex;
                            align-content: center;
                            justify-content: space-evenly;
                            flex-wrap: wrap;
                        }
                    </style>


                    <div class="col-lg-12 donation-form mt-5">
                        <div class="form-box">
                            <!-- <script src="https://js.paystack.co/v2/inline.js"> -->
                            <form method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required />
                                                <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required />
                                                <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required />
                                                <span class="input-group-addon"><i class="fas fa-phone"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                                                <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="country" name="country" placeholder="Country" required />
                                                <span class="input-group-addon"><i class="fas fa-flag"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount to be Donated" required />
                                                <span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <button class="btn btn-theme effect btn-md" name="donate_btn" type="submit">Donate Now</button>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>

      

        <?php include('../include/footer.php') ?>
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