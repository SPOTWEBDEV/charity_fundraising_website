<?php 

include('./server/connection.php');
include('./server/model.php');
include('./server/payment/index.php');





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
    <title><?php echo $siteshort ?> || Home Page</title>

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

    <?php include('./include/nav.php') ?>



    <div class="banner-area inc-shape inc-indicator content-less text-large">
        <div id="bootcarousel" class="carousel text-light slide carousel-fade animate_text" data-ride="carousel">

            <!-- Indicators for slides -->
            <div class="carousel-indicator">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ol class="carousel-indicators">
                                <li data-target="#bootcarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#bootcarousel" data-slide-to="1"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-cover" style="background-image: url(<?php echo $domain ?>assets/img/7.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                            <h4 data-animation="animated slideInDown">HEO EZIOKWU FOUNDATION ORGANIZATION</h4>
                                            <p data-animation="animated slideInRight">Was Founded on the 12th of June 2011, by High Chief Okoh Emmanuel Henry,who's from Ako-Nike Community in Enugu State, Nigeria,
                                                Heo Eziokwu Foundation is a dedicated non-profit organization committed to uplifting and empowering underprivileged families.</p>
                                            <a data-animation="animated fadeInUp" class="btn circle btn-theme border btn-md" href="#">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover" style="background-image: url(<?php echo $domain ?>assets/img/8.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                            <h4 data-animation="animated slideInDown">Get started today</h4>
                                            <p data-animation="animated slideInRight">Guided by the principles of compassion and empowerment, we work to create meaningful, positive impacts by providing essential support in three key areas: Education, Healthcare, and Housing.
                                            </p>
                                            <a data-animation="animated fadeInUp" class="btn circle btn-theme border btn-md" href="#">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

        </div>
    </div>
    <!-- End Banner -->

    <!-- Star About Area
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row align-center">

                <div class="col-lg-6 popular-causes">
                    <div class="causes-box">
                        <h4> <i class="fas fa-bolt"></i> Popular Causes</h4>
                        <div class="item">
                            <div class="thumb">
                                <img src="<?php echo $domain ?>assets/img/school-4.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <span class="cats">
                                    Education
                                </span>
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
                        <div class="item">
                            <div class="thumb">
                                <img src="<?php echo $domain ?>assets/img/9.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <span class="cats">
                                    Healthcare
                                </span>
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
                        <div class="item">
                            <div class="thumb">
                                <img src="<?php echo $domain ?>assets/img/1.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <span class="cats">
                                    Housing
                                </span>
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
                        HEO Eziokwu Foundation is committed to bridging the opportunity gap for underprivileged communities, offering hope and essential resources to help individuals thrive. By addressing the critical needs in education, healthcare, and housing, we aim to create a solid foundation of support that empowers families to pursue better and more dignified lives. Our initiatives are designed to connect families with the resources they deserve, strengthening entire communities and fostering long-term resilience.
                    </p>

                    <ul>
                        <li>
                            <h5>168K</h5>
                            <span>People Educated</span>
                        </li>
                        <li>
                            <h5>5M Ton</h5>
                            <span>Healthcare Aid Provided</span>
                        </li>
                        <li>
                            <h5>37K Sqmi.</h5>
                            <span>Housing for Families</span>
                        </li>
                    </ul>
                    <a class="btn circle btn-theme border btn-md" href="#">Become a Volunteer</a>
                </div>

            </div>
        </div>
    </div>

    <!-- End About Area -->

    <!-- Start What We Do 
    ============================================= -->
    <div class="we-do-area half-bg default-padding bottom-less bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>What</h5>
                        <h2>
                            HEO Eziokwu Foundation <br> organisation
                        </h2>
                        <h5>can offer</h5> <br>
                        <div class="heading-divider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="wedo-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <i style="color: #3bcf93;" class="fas fa-graduation-cap"></i>
                            <h4>Education empowerment</h4>
                            <p>
                                Supporting the education of over 500,000 students, from primary to university level, by covering tuition fees and supplying critical learning resources such as textbooks, exercise books, classroom furniture, smart boards, and other essential materials. Our aim is to ensure that every child has the resources needed to excel academically and reach their full potential.

                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->

                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <i class="fas fa-heartbeat"></i>
                            <h4>Healthcare Assistance </h4>
                            <p>
                                Providing financial support to cover essential medical expenses, helping underprivileged individuals and families access the healthcare services they need to lead healthy, fulfilling lives.

                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <i style="color: #3bcf93;" class="fas fa-house-user"></i>
                            <h4>Housing Support</h4>
                            <p>
                                Offering safe and stable housing solutions for vulnerable members of our community, including widows and widowers. By providing secure living environments, we enable individuals to rebuild their lives with dignity and hope.


                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End What We Do -->

    <!-- Start Our Mission 
    ============================================= -->
    <div class="mission-area half-bg default-padding-bottom bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 thumb-box">
                    <div class="thumb">
                        <div class="thumb-1">
                            <img src="<?php echo $domain ?>assets/img/3.jpg" alt="Thumb">
                        </div>
                        <div class="thumb-2">
                            <img src="<?php echo $domain ?>assets/img/2.jpg" alt="Thumb">
                            <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube light video-play-button item-center">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 info">
                    <h5>Our Mission</h5>
                    <h2 class="text-blur">Mission</h2>
                    <h2 class="area-title">We believe that we can save more lifes with you.</h2>
                    <p>
                        Our mission is to empower disadvantaged families by providing essential resources and sustained support in education, healthcare, and housing. Heo Eziokwu Foundation organisation is dedicated to building a society in Africa where everyone, regardless of their background, has a fair chance to succeed and a brighter future to look forward to.

                    </p>


                    <a class="btn circle btn-theme border btn-md" href="#">Join With Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Mission -->

    <!-- Start Causes 
    ============================================= -->
    <div class="causes-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-6 left-info">
                        <h5>Recent Causes</h5>
                        <h2>
                            Donate to empower communities in need across the globe.
                        </h2>
                    </div>
                    <div class="col-lg-6 right-info">
                        <p>
                            Join us in supporting vital causes that provide education, healthcare, and housing to underprivileged families, helping them build better futures.
                        </p>
                        <a class="btn circle btn-md btn-gradient wow fadeInUp" href="#">View All <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="causes-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="<?php echo $domain ?>assets/img/school-6.jpg" alt="Thumb">

                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Education empowerment</a>
                                </h4>
                                <p>
                                    Our mission is to provide quality education to underserved communities, empowering individuals to break the cycle of poverty and achieve their full potential.
                                </p>
                                <!-- <div class="progress-box">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="50">
                                            <span>50%</span>
                                        </div>
                                    </div>
                                    <p>Raised : $4200 <span>Goal : $8400</span></p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="<?php echo $domain ?>assets/img/football-5.jpg" alt="Thumb">
                                    <div class="trend">
                                        <i class="fas fa-bolt"></i> Trend
                                    </div>

                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Housing Support for Vulnerable Families</a>
                                </h4>
                                <p>
                                    Helping to provide safe and stable housing for vulnerable families, including widows and orphans, enabling them to rebuild their lives with dignity and security.
                                </p>


                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="<?php echo $domain ?>assets/img/3.jpg" alt="Thumb">

                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Healthcare Assistance for All</a>
                                </h4>
                                <p>
                                    Providing essential medical support and healthcare services to underprivileged communities, ensuring everyone has access to the care they need to lead healthy lives.
                                </p>

                                <div class="progress-box">

                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Causes -->

        <!-- Start Volunteer 
    ============================================= -->
        <div class="volunteer-area text-center default-padding">
            <!-- Fixed Shape -->
            <div class="shape-bottom">
                <img src="<?php echo $domain ?>assets/img/shape/7.png" alt="Shape">
            </div>
            <!-- Fixed Shape -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h5>Become a Volunteer</h5>
                        <h2 class="text-blur">Volunteer with Us</h2>
                        <h2 class="area-title">Join us in empowering communities through education, healthcare, and housing support.</h2>
                        <p>
                            Your support can help us create lasting change. By becoming a volunteer, you’ll be contributing to the well-being of underprivileged families around the world.
                        </p>
                        <form method="POST">
                            <input type="email" placeholder="Your Email" class="form-control" name="email">
                            <button type="submit">Join Now</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Volunteer -->

        <!-- Start Event Area 
    ============================================= -->
        <div class="event-area carousel-shadow default-padding bg-gray">
            <!-- Fixed Shape -->
            <div class="shape-bottom-left">
                <img src="<?php echo $domain ?>assets/img/8.jpg" alt="Shape">
            </div>
            <!-- Fixed Shape -->
            <div class="container">
                <div class="heading-left">
                    <div class="row">
                        <div class="col-lg-6 left-info">
                            <h5>Upcoming Events</h5>
                            <h2>
                                Be part of life-changing events making a difference worldwide.
                            </h2>
                        </div>
                        <div class="col-lg-6 right-info">
                            <p>
                                Explore opportunities to create impact through events focused on healthcare, sports, and education. Together, we can uplift lives and transform communities.
                            </p>
                            <a class="btn circle btn-md btn-gradient wow fadeInUp" href="#">View All <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="event-items event-carousel owl-carousel owl-theme">
                    <!-- Single Item  -->
                    <div class="item">
                        <div class="thumb">
                            <img src="<?php echo $domain ?>assets/img/7.jpg" alt="Thumb">
                            <div class="date">
                                12 <strong>Aug</strong>
                            </div>
                        </div>
                        <div class="info">
                            <div class="time"><i class="fas fa-clock"></i> 8:00 am - 16:00 pm</div>
                            <h4>
                                <a href="#">Healthcare Camps</a>
                            </h4>
                            <p>
                                Join us in offering free healthcare services to communities in need, ensuring they have access to essential medical care.
                            </p>
                            <a class="btn circle btn-theme border btn-md" href="#">Know More</a>
                        </div>
                    </div>
                    <!-- End Single Item  -->
                    <!-- Single Item  -->
                    <div class="item">
                        <div class="thumb">
                            <img src="<?php echo $domain ?>assets/img/football-4.jpg" alt="Thumb">
                            <div class="date">
                                25 <strong>Dec</strong>
                            </div>
                        </div>
                        <div class="info">
                            <div class="time"><i class="fas fa-clock"></i> 10:00 am - 17:30 pm</div>
                            <h4>
                                <a href="#">Charity Football Matches</a>
                            </h4>
                            <p>
                                Participate in thrilling football matches where every goal contributes to supporting housing and educational projects.
                            </p>
                            <a class="btn circle btn-theme border btn-md" href="#">Know More</a>
                        </div>
                    </div>
                    <!-- End Single Item  -->
                    <!-- Single Item  -->
                    <div class="item">
                        <div class="thumb">
                            <img src="<?php echo $domain ?>assets/img/school-5.jpg" alt="Thumb">
                            <div class="date">
                                18 <strong>Jul</strong>
                            </div>
                        </div>
                        <div class="info">
                            <div class="time"><i class="fas fa-clock"></i> 8:30 am - 16:45 pm</div>
                            <h4>
                                <a href="#">Educational Empowerment Workshops</a>
                            </h4>
                            <p>
                                Empower young minds through workshops aimed at improving access to quality education and life skills training.
                            </p>
                            <a class="btn circle btn-theme border btn-md" href="#">Know More</a>
                        </div>
                    </div>
                    <!-- End Single Item  -->
                </div>
            </div>
        </div>

        <!-- End Event Area -->


        <!-- Start Donation 
    ============================================= -->
        <div class="donation-area text-light bg-gray default-padding">
            <!-- Fixed BG-->
            <div class="fixed-bg" style="background-image: url(<?php echo $domain ?>assets/img/9.jpg);"></div>
            <!-- End Fixed BG-->
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-6 info">
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
                    <div class="col-lg-6 donation-form">
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

        <!-- End Donation Area -->

        <!-- Start Testimonials 
    ============================================= -->
        <div class="testimonials-area carousel-shadow bg-gray default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h5>Testimonials</h5>
                            <h2>
                                What People Say <br> About HEO Eziokwu Foundation
                            </h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-items testimonial-carousel owl-carousel owl-theme">
                            <!-- Single Item  -->
                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Grace Okafor</h4>
                                            <span>Beneficiary</span>
                                        </div>
                                    </div>
                                    <p>
                                        HEO Eziokwu Foundation has been a blessing to me and my children. With their support, my kids are now in school, and we no longer worry about basic needs. I am forever grateful for their kindness and compassion.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item  -->
                            <!-- Single Item  -->
                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Chinedu Eze</h4>
                                            <span>Volunteer</span>
                                        </div>
                                    </div>
                                    <p>
                                        Volunteering with the foundation has been a life-changing experience. Seeing the smiles on the faces of families we've helped reminds me of the importance of giving back and being part of something bigger.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item  -->
                            <!-- Single Item  -->
                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Mariam Bello</h4>
                                            <span>Community Leader</span>
                                        </div>
                                    </div>
                                    <p>
                                        HEO Eziokwu Foundation has transformed our community through education and healthcare support. They are truly making a difference and helping us build a brighter future for everyone.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Testimonials Area -->

        <!-- Start Gallery 
    ============================================= -->
        <div class="gallery-area default-padding">
            <div class="container">
                <div class="heading-left">
                    <div class="row">
                        <div class="col-lg-6 left-info">
                            <h5>Our Impact</h5>
                            <h2>
                                Transforming Lives Through <br> Our Key Projects
                            </h2>
                        </div>
                        <div class="col-lg-6 right-info">
                            <p>
                                See how our efforts are making a difference. From providing meals to building homes, we're committed to creating lasting change in communities.
                            </p>
                            <a class="btn circle btn-md btn-gradient wow fadeInUp" href="#">Explore All Projects <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="gallery-items-area inner-title">
                            <div class="gallery-content">
                                <div class="magnific-mix-gallery masonary">
                                    <div id="portfolio-grid" class="gallery-items colums-3">
                                        <div class="pf-item">
                                            <div class="item-inner">
                                                <img src="<?php echo $domain ?>assets/img/1.jpg" alt="Food Served" />
                                                <div class="overlay">
                                                    <h4><a href="#">Nourishing Lives</a></h4>
                                                    <span class="cats">Meal Programs</span>
                                                </div>
                                                <div class="view">
                                                    <a href="<?php echo $domain ?>assets/img/2.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pf-item wide">
                                            <div class="item-inner">
                                                <img src="<?php echo $domain ?>assets/img/school-2.jpg" alt="Water Access" />
                                                <div class="overlay">
                                                    <h4><a href="#">Access to Clean Water</a></h4>
                                                    <span class="cats">Water Initiatives</span>
                                                </div>
                                                <div class="view">
                                                    <a href="<?php echo $domain ?>assets/img/football-3.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pf-item">
                                            <div class="item-inner">
                                                <img src="<?php echo $domain ?>assets/img/football-3.jpg" alt="Blood Donation" />
                                                <div class="overlay">
                                                    <h4><a href="#">Blood Donation Drive</a></h4>
                                                    <span class="cats">Health Support</span>
                                                </div>
                                                <div class="view">
                                                    <a href="<?php echo $domain ?>assets/img/3.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pf-item">
                                            <div class="item-inner">
                                                <img src="<?php echo $domain ?>assets/img/8.jpg" alt="Education for Children" />
                                                <div class="overlay">
                                                    <h4><a href="#">Empowering Education</a></h4>
                                                    <span class="cats">For Future Generations</span>
                                                </div>
                                                <div class="view">
                                                    <a href="<?php echo $domain ?>assets/img/12.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pf-item">
                                            <div class="item-inner">
                                                <img src="<?php echo $domain ?>assets/img/school-7.jpg" alt="Helping the Homeless" />
                                                <div class="overlay">
                                                    <h4><a href="#">Helping the Homeless</a></h4>
                                                    <span class="cats">Shelter Projects</span>
                                                </div>
                                                <div class="view">
                                                    <a href="<?php echo $domain ?>assets/img/football-4.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pf-item">
                                            <div class="item-inner">
                                                <img src="<?php echo $domain ?>assets/img/football-4.jpg" alt="Home Rebuilding" />
                                                <div class="overlay">
                                                    <h4><a href="#">Rebuilding Homes</a></h4>
                                                    <span class="cats">For Stronger Communities</span>
                                                </div>
                                                <div class="view">
                                                    <a href="<?php echo $domain ?>assets/img/football-6.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Gallery Area -->

        <!-- Start Blog 
    ============================================= -->
        <div class="blog-area default-padding bottom-less bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h5>Latest News</h5>
                            <h2>
                                Stay Updated with Us on the Latest & Popular Causes by HEO Eziokwu Foundation
                            </h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="blog-items">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="single-item col-lg-4 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="blog-single-with-sidebar.html">
                                        <img src="<?php echo $domain ?>assets/img/blog/1.jpg" alt="Thumb">
                                        <span class="date">
                                            24 <strong>Aug</strong>
                                        </span>
                                    </a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="blog-single-with-sidebar.html">HEO Eziokwu Foundation Partners with Local Communities</a>
                                    </h4>
                                    <div class="meta">
                                        <ul>
                                            <li>By <a href="#">HEO Foundation</a></li>
                                            <li><a href="#"><i class="fas fa-comments"></i> 12 Comments</a></li>
                                        </ul>
                                    </div>
                                    <p>
                                        We are making strides towards a brighter future, collaborating with local communities to promote educational opportunities and better living conditions.
                                    </p>
                                    <a class="btn-more" href="blog-single-with-sidebar.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-lg-4 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="blog-single-with-sidebar.html">
                                        <img src="<?php echo $domain ?>assets/img/blog/2.jpg" alt="Thumb">
                                        <span class="date">
                                            18 <strong>Sep</strong>
                                        </span>
                                    </a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="blog-single-with-sidebar.html">HEO Eziokwu Foundation's Water Access Project</a>
                                    </h4>
                                    <div class="meta">
                                        <ul>
                                            <li>By <a href="#">HEO Foundation</a></li>
                                            <li><a href="#"><i class="fas fa-comments"></i> 26 Comments</a></li>
                                        </ul>
                                    </div>
                                    <p>
                                        Our Water Access initiative is helping underprivileged areas gain reliable access to clean drinking water, improving overall health and well-being.
                                    </p>
                                    <a class="btn-more" href="blog-single-with-sidebar.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-lg-4 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="blog-single-with-sidebar.html">
                                        <img src="<?php echo $domain ?>assets/img/blog/3.jpg" alt="Thumb">
                                        <span class="date">
                                            05 <strong>Jul</strong>
                                        </span>
                                    </a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="blog-single-with-sidebar.html">Empowering the Next Generation: Education for All</a>
                                    </h4>
                                    <div class="meta">
                                        <ul>
                                            <li>By <a href="#">HEO Foundation</a></li>
                                            <li><a href="#"><i class="fas fa-comments"></i> 05 Comments</a></li>
                                        </ul>
                                    </div>
                                    <p>
                                        Join us in the fight to ensure that every child receives quality education, as we work towards providing free learning resources in underserved regions.
                                    </p>
                                    <a class="btn-more" href="blog-single-with-sidebar.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>

        <?php include('./include/footer.php') ?>
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