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
    <title><?php echo $sitename ?> || Gallery Page</title>

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet">

</head>

<style>
    .we-do-area .item {
        padding: 5px 10px;
    }
</style>

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
                        <h2>Gallery</h2>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Page</a></li>
                    <li class="active">Gallery</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="we-do-area half-bg default-padding bottom-less bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">

                        <h2>
                            HEO Eziokwu Foundation <br> organisation
                        </h2>
                        <h5>Gallery</h5> <br>
                        <div class="heading-divider"></div>
                    </div>
                </div>
            </div>


            <div class="image-grid">
                <?php
                $images = [
                    '1.jpg',
                    '2.jpg',
                    '3.jpg',
                    '4.jpg',
                    '5.jpg',
                    '6.jpg',
                    '7.jpg',
                    '8.jpg',
                    '9.jpg',
                    'football-1.jpg',
                    'football-2.jpg',
                    'football-3.jpg',
                    'football-4.jpg',
                    'football-5.jpg',
                    'football-6.jpg',
                    'hospital.jpg',
                    'school-5.jpg',
                    'school-7.jpg',
                    'school-13.jpg',
                    'hospital-1.jpg',
                    'hospital-2.jpg',
                    'hospital-3.jpg',
                    'hospital-4.jpg',
                    'school-1.jpg',
                    'school-2.jpg',
                    'school-3.jpg',
                    'school-4.jpg',
                    'school-5.jpg',
                    'school-6.jpg'
                ];

                foreach ($images as $img) {
                    echo '
        <div class="single-item">
            <div class="item">
                <div class="thumb">
                    <a>
                        <img style="height: 270px; width: 100%;" src="' . $domain . 'assets/img/' . $img . '" alt="Thumb">
                    </a>
                </div>
            </div>
        </div>';
                }
                ?>
            </div>




            <style>
                .image-grid {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 16px;
                    padding: 20px;
                }

                .single-item {
                    width: 100%;
                    /* Ensure each item fills the column */
                }

                .single-item img {
                    height: 100%;
                    width: 100%;
                }

                .single-item .item {
                    width: 100%;
                }

                .single-item img {
                    width: 100%;
                }

                @media(max-width:850px) {
                    .image-grid {

                        grid-template-columns: repeat(2, 1fr);

                    }

                }

                @media(max-width:650px) {
                    .image-grid {

                        grid-template-columns: repeat(1, 1fr);

                    }

                }
            </style>


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