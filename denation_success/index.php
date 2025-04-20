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
    <title><?php echo $siteshort ?> || Donation_success Page</title>

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

     <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>

    <?php include('../include/nav.php') ?>





    <!-- <div class="w-full flex items-center justify-center h-full">
        <div  class="flex align-center flex-col gap-2 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

            <i  class="fas fa-check-circle text-green-500 text-4xl"></i>
            <h2 class="font-semibold">Success!</h2>
            <!-- <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p> -->



    </div>
    <!-- </div> -->

    <div class="flex align-center justify-center flex-col w-full max-w-md mx-auto my-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
        <div class="flex align-center justify-center flex-col">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check-circle-fill " viewBox="0 0 16 16" style="font-size: 20px;">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
            <h2 style="font-size:20px;" class="font-bold mt-2">Thank You for Your Generous Support!</h2>
        </div>
        <p style="font-size:15px;" class="mt-2 text-sm items-center">
        We are incredibly grateful for your kindness and belief in our mission. Thank you for being a part of the change!
        </p>
    </div>



    <!-- <div class="w-full flex items-center justify-center h-full">
        <div  class="flex align-center flex-col gap-2 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

            <i  class="fas fa-check-circle text-green-500 text-4xl"></i>
            <h2 class="font-semibold">Success!</h2>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p> -->
    <!-- <span class="font-semibold">Your action was completed successfully!!</span>
    
  
        </div>
    </div> -->

    <div class="w-full max-w-md mx-auto my-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
        <div class="flex items-center">
            <svg class="w-6 h-6 mr-2 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <circle cx="12" cy="12" r="10" stroke-width="2"></circle>
                <path d="M12 8v4m0 4h.01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span class="font-semibold">Error!</span>
        </div>
        <p class="mt-2 text-sm">
        We encountered an error while processing your donation. 
        </p>
    </div>



    </div>



    <?php include('../include/footer.php') ?>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

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