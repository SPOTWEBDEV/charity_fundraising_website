<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


function checkUrlProtocol($url)
{
    // Parse the URL to get the scheme
    $parsedUrl = parse_url($url);

    // Check if the scheme exists and if it's http or https
    if (isset($parsedUrl['scheme'])) {
        return $parsedUrl['scheme'];
    } else {
        return 'invalid'; // Invalid URL if no scheme is found
    }
}

// Automatically get the current URL
$currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")
    . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Get the protocol from the current URL
$request = checkUrlProtocol($currentUrl);

// Default configurations
define("HOST", "localhost");


// Set configurations based on protocol
if ($request == 'https') {
    $domain = "https://heoeziokwufoundationorganisation.ng/";
    define("USER", "pdicsrdj_heo");
    define("PASSWORD", "pdicsrdj_heo");
    define("DATABASE", "pdicsrdj_heo");
}
elseif ($request == 'http') {
    $domain = "http://localhost/charity_fundraising_website/";
    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "heo");
}

// // Database connection
$connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// // Site configurations
$sitename = "H.E.O EZIOKWU FOUNDATION NIG LTD";


// email config 
$siteemail = "eziokwufoundation@outlook.com";
$emailpassword  = "support@heoeziokwufoundationorganisation.ng";
$host = 'mail.heoeziokwufoundationorganisation.ng';
$sitenumber = '+2347064334905';



session_start();






?>