<?php

include './server/connection.php';
include './server/model.php';
include './server/payment/index.php';

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
    <title><?php echo $sitename ?> || Home Page</title>

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
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        .causes-items .row {
            display: flex;
            flex-wrap: wrap;
            /* gap: 20px; */
        }

        .single-item {
            display: flex;
        }

        .item {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .info {
            flex-grow: 1;
        }



        .testimonial-items {
            display: flex;
            flex-direction: column;
            /* Stack items vertically */
            gap: 10px;
            /* Adds spacing between items */
        }

        .owl-dots {
            display: none
        }
    </style>

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>

    <?php include './include/nav.php' ?>








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
                    <div class="slider-thumb bg-cover"
                        style="background-image: url(<?php echo $domain ?>assets/img/7.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                            <h4 data-animation="animated slideInDown">HEO EZIOKWU FOUNDATION
                                                ORGANIZATION</h4>
                                            <p data-animation="animated slideInRight">Was Founded on the 12th of June
                                                2011, by High Chief Okoh Emmanuel Henry,who's from Ako-Nike Community in
                                                Enugu State, Nigeria,
                                                Heo Eziokwu Foundation is a dedicated non-profit organization committed
                                                to uplifting and empowering underprivileged families.</p>
                                            <!-- <a data-animation="animated fadeInUp" class="btn circle d-none btn-theme border btn-md" href="#">Discover More</a> -->
                                            <a class="btn circle btn-theme border btn-md" id="discoverBtn">Discover
                                                More</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover"
                        style="background-image: url(<?php echo $domain ?>assets/img/8.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                            <h4 data-animation="animated slideInDown">Get started today</h4>
                                            <p data-animation="animated slideInRight">Guided by the principles of
                                                compassion and empowerment, we work to create meaningful, positive
                                                impacts by providing essential support in three key areas: Education,
                                                Healthcare, and Housing.
                                            </p>


                                            <a class="btn circle btn-theme border btn-md" id="discoverBtn">Discover
                                                More</a>

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
                                    <a href="<?php echo $domain ?>education/">Empower Education in Africa</a>
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
                                    <a href="<?php echo $domain ?>health/">Affordable Healthcare for All</a>
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
                                    <a href="<?php echo $domain ?>housing/">Safe Housing for Vulnerable Families</a>
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
                <div class="container">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="item" style="height: 520px; display: flex; flex-direction: column; justify-content: space-between;">
                                <i style="color: #3bcf93;" class="fas fa-graduation-cap fa-3x"></i>
                                <h4>Education Empowerment</h4>
                                <p>
                                    Supporting the education of over 500,000 students, from primary to university level, by covering tuition fees and supplying critical learning resources such as textbooks, exercise books, classroom furniture, smart boards, and other essential materials. Our aim is to ensure that every child has the resources needed to excel academically and reach their full potential.
                                </p>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class=" col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="item" style="height: 520px; display: flex; flex-direction: column; justify-content: space-between;">
                                <i style="color: #3bcf93;" class="fas fa-heartbeat fa-3x"></i>
                                <h4>Healthcare Assistance</h4>
                                <p>
                                    Providing financial support to cover essential medical expenses, helping underprivileged individuals and families access the healthcare services they need to lead healthy, fulfilling lives.
                                </p>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="item" style="height: 520px; display: flex; flex-direction: column; justify-content: space-between;">
                                <i style="color: #3bcf93;" class="fas fa-user fa-3x"></i>
                                <h4>Housing Support</h4>
                                <p>
                                    Offering safe and stable housing solutions for vulnerable members of our community, including widows and widowers. By providing secure living environments, we enable individuals to rebuild their lives with dignity and hope.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End What We Do -->

    <!-- Start Our Mission
    ============================================= -->
    <div class="mission-area half-bg default-padding-bottom bg-gray" style="padding:10px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 thumb-box">
                    <div class="thumb">
                        <div class="thumb-1">
                            <img src="<?php echo $domain ?>assets/img/3.jpg" alt="Thumb">
                        </div>
                        <div class="thumb-2">
                            <img src="<?php echo $domain ?>assets/img/2.jpg" alt="Thumb">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 info">
                    <h5>Our Mission</h5>
                    <h2 class="text-blur">Mission</h2>
                    <h2 class="area-title">We believe that we can save more lifes with you.</h2>
                    <p>
                        Our mission is to empower disadvantaged families by providing essential resources and sustained
                        support in education, healthcare, and housing. Heo Eziokwu Foundation organisation is dedicated
                        to building a society in Africa where everyone, regardless of their background, has a fair
                        chance to succeed and a brighter future to look forward to.


                    </p>


                    <a class="btn circle btn-theme border btn-md" href="./payment/">Join Us</a>
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
                            Join us in supporting vital causes that provide education, healthcare, and housing to
                            underprivileged families, helping them build better futures.
                        </p>
                        <a class="btn d-none circle btn-md btn-gradient wow fadeInUp" href="./event/">View All <i
                                class="fas fa-angle-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="causes-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6">
                        <div style="" class="item">
                            <div class="thumb">
                                <a>
                                    <img src="<?php echo $domain ?>assets/img/school-6.jpg" alt="Thumb">

                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a>Education empowerment</a>
                                </h4>
                                <p>
                                    Our mission is to provide quality education to underserved communities, empowering
                                    individuals to break the cycle of poverty and achieve their full potential.
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
                    <div class=" col-lg-4 col-md-6">
                        <div style="" class="item">
                            <div class="thumb">
                                <a>
                                    <img style="width:fit-content; "
                                        src="<?php echo $domain ?>assets/img/football-5.jpg" alt="Thumb">
                                    <!-- <div class="trend">
                                        <i class="fas fa-bolt"></i> 
                                    </div> -->

                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a>Housing Support for Vulnerable Families</a>
                                </h4>
                                <p>
                                    Helping to provide safe and stable housing for vulnerable families, including widows
                                    and orphans, enabling them to rebuild their lives with dignity and security.
                                </p>


                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=" col-lg-4 col-md-6">
                        <div style="" class="item">
                            <div class="thumb">
                                <a>
                                    <img src="<?php echo $domain ?>assets/img/3.jpg" alt="Thumb">

                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a>Healthcare Assistance for All</a>
                                </h4>
                                <p>
                                    Providing essential medical support and healthcare services to underprivileged
                                    communities, ensuring everyone has access to the care they need to lead healthy
                                    lives.
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
                        <h2 class="area-title">Join us in empowering communities through education, healthcare, and
                            housing support.</h2>
                        <p>
                            Your support can help us create lasting change. By becoming a volunteer, you’ll be
                            contributing to the well-being of underprivileged families around the world.
                        </p>

                        <style>
                            .nice-select {
                                display: none
                            }
                        </style>
                        <?php

                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
                            $email = $connection->real_escape_string($_POST['email']);

                            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";

                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                echo "<script>Swal.fire('Error', 'Invalid email format', 'error');</script>";
                            } else {
                                $insertQuery = "INSERT INTO newsletter (email) VALUES ('$email')";

                                if ($connection->query($insertQuery) === true) {
                                    echo "<script>Swal.fire('Success', 'Successfully subscribed!', 'success');</script>";
                                } else {
                                    echo "<script>Swal.fire('Error', 'Email already subscribed or error occurred.', 'error');</script>";
                                }
                            }
                        }

                        ?>
                        <a href="<?php echo $domain ?>contact/">
                            <form>
                                <input type="email" placeholder="" class="form-control" name="email" readonly>
                                <button>Join Now</button>
                            </form>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Volunteer -->

        <!-- Start Event Area
    ============================================= -->
        <div class="event-area carousel-shadow default-padding bg-gray">
            <!-- Fixed Shape -->
            <!-- <div class="shape-bottom-left">
                <img src="<?php echo $domain ?>assets/img/8.jpg" alt="Shape">
            </div> -->
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
                                Explore opportunities to create impact through events focused on healthcare, sports, and
                                education. Together, we can uplift lives and transform communities.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="event-items event-carousel owl-carousel owl-theme">
                    <!-- Single Item  -->
                    <div style="height: fit-content;" class="item">
                        <div class="thumb">
                            <img src="<?php echo $domain ?>assets/img/7.jpg" alt="Thumb">
                            <div class="date">
                                12 <strong>Aug</strong>
                            </div>
                        </div>
                        <div class="info">
                            <div class="time"><i class="fas fa-clock"></i> 8:00 am - 16:00 pm</div>
                            <h4>
                                <a>Healthcare Camps</a>
                            </h4>
                            <p>


                                Healthcare camps are organized events aimed at providing free or low-cost medical
                                services to underserved communities, especially those with limited access to healthcare
                                facilities. These camps are often set up in rural or remote areas, where healthcare
                                resources are scarce or difficult to reach. The primary goal is to deliver essential
                                medical care, offer preventive health screenings, and raise awareness about health
                                issues.




                        </div>
                    </div>
                    <!-- End Single Item  -->
                    <!-- Single Item  -->
                    <div style="height: fit-content;" class="item">
                        <div class="thumb">
                            <img src="<?php echo $domain ?>assets/img/football-4.jpg" alt="Thumb">
                            <div class="date">
                                25 <strong>Dec</strong>
                            </div>
                        </div>
                        <div class="info">
                            <div class="time"><i class="fas fa-clock"></i> 10:00 am - 17:30 pm</div>
                            <h4>
                                <a>Charity Football Matches</a>
                            </h4>
                            <p>


                                Charity football matches have become a popular and meaningful way for people to support
                                various causes while enjoying the excitement of the beautiful game. These events are
                                often organized with the goal of raising funds for charitable organizations, supporting
                                local communities, or raising awareness for important social issues.



                            </p>

                        </div>
                    </div>
                    <!-- End Single Item  -->
                    <!-- Single Item  -->
                    <div style="height: fit-content;" class="item">
                        <div class="thumb">
                            <img src="<?php echo $domain ?>assets/img/school-5.jpg" alt="Thumb">
                            <div class="date">
                                18 <strong>Jul</strong>
                            </div>
                        </div>
                        <div class="info">
                            <div class="time"><i class="fas fa-clock"></i> 8:30 am - 16:45 pm</div>
                            <h4>
                                <a>Educational Empowerment Workshops</a>
                            </h4>
                            <p>


                                Educational empowerment workshops are programs designed to provide individuals with the
                                knowledge, skills, and confidence needed to improve their personal and professional
                                lives. These workshops are often focused on specific areas such as literacy, financial
                                management, career development, leadership, or social skills. The goal is to equip
                                participants with the tools they need to succeed and break down barriers to education
                                and economic opportunities.





                            </p>

                        </div>
                    </div>
                    <!-- End Single Item  -->
                </div>
            </div>
        </div>

        <!-- End Event Area -->


        <!-- Start Donation
    ============================================= -->


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
                        <div style="display: flex; flex-direction: column;"
                            class="testimonial-items testimonial-carousel owl-carousel owl-theme">
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
                                        HEO Eziokwu Foundation has been a blessing to me and my children. With their
                                        support, my kids are now in school, and we no longer worry about basic needs. I
                                        am forever grateful for their kindness and compassion.
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
                                        Volunteering with the foundation has been a life-changing experience. Seeing the
                                        smiles on the faces of families we've helped reminds me of the importance of
                                        giving back and being part of something bigger.
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
                                        HEO Eziokwu Foundation has transformed our community through education and
                                        healthcare support. They are truly making a difference and helping us build a
                                        brighter future for everyone.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Amina Yusuf</h4>
                                            <span>Small Business Owner</span>
                                        </div>
                                    </div>
                                    <p>
                                        With their financial assistance, I was able to expand my business. Now, I can
                                        support my family and even create job opportunities for others in need.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Emeka Nwankwo</h4>
                                            <span>Community Organizer</span>
                                        </div>
                                    </div>
                                    <p>
                                        Their food relief programs have drastically reduced hunger in our neighborhood.
                                        Their generosity has brought smiles to many faces.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Mercy Uzo</h4>
                                            <span>High School Graduate</span>
                                        </div>
                                    </div>
                                    <p>
                                        Without their scholarship program, I wouldn’t have finished high school. Now, I
                                        have a bright future ahead, thanks to their generosity.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Gabriel Anene</h4>
                                            <span>Social Worker</span>
                                        </div>
                                    </div>
                                    <p>
                                        The work of HEO Eziokwu Foundation is truly remarkable. They have transformed
                                        the lives of so many families in need. I am honored to support their mission.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Nkechi Opara</h4>
                                            <span>Artist</span>
                                        </div>
                                    </div>
                                    <p>
                                        Their arts and crafts program helped me turn my passion into a career. Now, I
                                        sell my artwork and inspire others to follow their dreams.
                                    </p>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div style="display: flex; flex-direction: column;"
                            class="testimonial-items testimonial-carousel owl-carousel owl-theme">

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Amara Nwosu</h4>
                                            <span>Mother & Entrepreneur</span>
                                        </div>
                                    </div>
                                    <p>
                                        HEO Eziokwu Foundation gave me the opportunity to rebuild my life. Their support
                                        helped me start a small business, which now provides for my family. I am forever
                                        grateful for their kindness and commitment to uplifting others.
                                    </p>
                                </div>
                            </div>

                            <!-- Single Item  -->

                            <!-- End Single Item  -->
                            <!-- Single Item  -->

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Michael Adeyemi</h4>
                                            <span>Teacher</span>
                                        </div>
                                    </div>
                                    <p>
                                        The support from HEO Eziokwu Foundation has given my students a chance at a
                                        brighter future. Their dedication to education and community welfare is truly
                                        life-changing. I am proud to witness the impact they make every day.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Chinwe Uche</h4>
                                            <span>Single Mother</span>
                                        </div>
                                    </div> I
                                    <p>
                                        HEO Eziokwu Foundation helped me start over. With their support, I can now
                                        provide food and education for my children. Their kindness has changed our lives
                                        forever.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Joseph Okorie</h4>
                                            <span>Healthcare Worker</span>
                                        </div>
                                    </div>
                                    <p>
                                        Their healthcare programs have saved countless lives in our village. We now have
                                        access to free medical checkups and life-saving treatments.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Fatima Bello</h4>
                                            <span>Widow</span>
                                        </div>
                                    </div>
                                    <p>
                                        After my husband passed away, I struggled to make ends meet. The foundation
                                        stepped in and gave me a fresh start. I will forever be grateful.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Abdulrahman Musa</h4>
                                            <span>Farmer</span>
                                        </div>
                                    </div>
                                    <p>
                                        Their agricultural support programs helped me increase my farm’s yield. Now, I
                                        can feed my family and contribute to food security in my village.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Janet Onu</h4>
                                            <span>Nurse</span>
                                        </div>
                                    </div>
                                    <p>
                                        The foundation provided essential medical supplies for our clinic. Thanks to
                                        their generosity, we can now save more lives.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Collins Okeke</h4>
                                            <span>Entrepreneur</span>
                                        </div>
                                    </div>
                                    <p>
                                        Their business grants gave me the opportunity to expand my startup. I am now
                                        able to employ others and help my community grow economically.
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div style="display: flex; flex-direction: column;"
                            class="testimonial-items testimonial-carousel owl-carousel owl-theme">
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
                                        HEO Eziokwu Foundation has been a blessing to me and my children. With their
                                        support, my kids are now in school, and we no longer worry about basic needs. I
                                        am forever grateful for their kindness and compassion.
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
                                        Volunteering with the foundation has been a life-changing experience. Seeing the
                                        smiles on the faces of families we've helped reminds me of the importance of
                                        giving back and being part of something bigger.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Samuel Eze</h4>
                                            <span>Youth Mentor</span>
                                        </div>
                                    </div>
                                    <p>
                                        Thanks to the foundation, many young people in our community now have access to
                                        quality education and career opportunities. Their work is truly inspiring.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Blessing Anaba</h4>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                    <p>
                                        Before HEO Eziokwu Foundation stepped in, I had no hope of furthering my
                                        education. Now, I am studying to become a doctor and make a difference.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Okechukwu Dike</h4>
                                            <span>Volunteer</span>
                                        </div>
                                    </div>
                                    <p>
                                        Working with HEO Eziokwu Foundation has been the most fulfilling experience of
                                        my life. Seeing the lives we impact daily is truly humbling.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Chidera Nnamdi</h4>
                                            <span>Engineer</span>
                                        </div>
                                    </div>
                                    <p>
                                        Their vocational training programs helped me land my dream job. Today, I can
                                        provide for my family and give back to my community.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="info">
                                    <div class="top-info">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="provider">
                                            <h4>Esther Obi</h4>
                                            <span>Orphan</span>
                                        </div>
                                    </div>
                                    <p>
                                        HEO Eziokwu Foundation became my family when I had none. They provided me with
                                        shelter, education, and most importantly, love.
                                    </p>
                                </div>
                            </div>

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
                                See how our efforts are making a difference. From providing meals to building homes,
                                we're committed to creating lasting change in communities.
                            </p>

                        </div>
                    </div>
                </div>
            </div>

</div>



            <div class="image-grid">
                <div class="single-item">
                    <div class="item">


                        <img style="height: 270px; width: 100%;" src="<?php echo $domain ?>assets/img/3.jpg" alt="Thumb">


                    </div>
                </div>

                <div class="single-item">
                    <div class="item">


                        <img style="height: 270px; width: 100%;" src="<?php echo $domain ?>assets/img/3.jpg" alt="Thumb">


                    </div>
                </div>

                <div class="single-item">
                    <div class="item">
                        <div class="thumb">
                            <a>
                                <img style="height: 270px;" src="<?php echo $domain ?>assets/img/school-5.jpg" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="single-item">
                    <div class="item">
                        <div class="thumb">
                            <a>
                                <img style="height: 270px;" src="<?php echo $domain ?>assets/img/school-7.jpg" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="single-item">
                    <div class="item">
                        <div class="thumb">
                            <a>
                                <img style="height: 270px;" src="<?php echo $domain ?>assets/img/school-13.jpg" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="single-item">
                    <div class="item">
                        <div class="thumb">
                            <a>
                                <img style="height: 270px;" src="<?php echo $domain ?>assets/img/football-6.jpg" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="single-item">
                    <div class="item">
                        <div class="thumb">
                            <a>
                                <img style="height: 270px;" src="<?php echo $domain ?>assets/img/football-8.jpg" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="single-item ">
                    <div class="item">
                        <div class="thumb">
                            <a>
                                <img style="height: 270px;" src="<?php echo $domain ?>assets/img/football-9.jpg" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
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
                            <div class=" col-lg-4 col-md-6">
                                <div class="item">
                                    <div class="thumb">
                                        <a>
                                            <img src="<?php echo $domain ?>assets/img/1.jpg" alt="Thumb">
                                            <span class="date">
                                                24 <strong>Aug</strong>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h4>
                                            <a>HEO Eziokwu Foundation Partners with
                                                Local Communities</a>
                                        </h4>
                                        <div class="meta">
                                            <ul>
                                                <li>By <a>HEO Foundation</a></li>
                                                <li><a><i class="fas fa-comments"></i> 12 Comments</a></li>
                                            </ul>
                                        </div>
                                        <p>
                                            We are making strides towards a brighter future, collaborating with local
                                            communities to promote educational opportunities and better living
                                            conditions.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class=" col-lg-4 col-md-6">
                                <div class="item">
                                    <div class="thumb">
                                        <a>
                                            <img src="<?php echo $domain ?>assets/img/2.jpg" alt="Thumb">
                                            <span class="date">
                                                18 <strong>Sep</strong>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h4>
                                            <a>HEO Eziokwu Foundation's Water
                                                Access Project</a>
                                        </h4>
                                        <div class="meta">
                                            <ul>
                                                <li>By <a>HEO Foundation</a></li>
                                                <li><a><i class="fas fa-comments"></i> 26 Comments</a></li>
                                            </ul>
                                        </div>
                                        <p>
                                            Our Water Access initiative is helping underprivileged areas gain reliable
                                            access to clean drinking water, improving overall health and well-being.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->

                             <style>
                                .info{
                                    padding: 10px;
                                }
                             </style>
                            <div class=" col-lg-4 col-md-6">
                                <div class="item">
                                    <div class="thumb">
                                        <a>
                                            <img src="<?php echo $domain ?>assets/img/3.jpg" alt="Thumb">
                                            <span class="date">
                                                05 <strong>Jul</strong>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h4>
                                            <a>Empowering the Next Generation:
                                                Education for All</a>
                                        </h4>
                                        <div class="meta">
                                            <ul>
                                                <li>By <a>HEO Foundation</a></li>
                                                <li><a><i class="fas fa-comments"></i> 05 Comments</a></li>
                                            </ul>
                                        </div>
                                        <p>
                                            Join us in the fight to ensure that every child receives quality education,
                                            as we work towards providing free learning resources in underserved regions.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>

            <?php include('./include/footer.php') ?>
            <script>

            </script>
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


            <script>
                let discoverBtn = document.querySelectorAll('#discoverBtn')

                discoverBtn.forEach(el => {
                    el.onclick = function() {

                        window.location.href = 'videos.php'

                    }
                })
            </script>

</body>

</html>