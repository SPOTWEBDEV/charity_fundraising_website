<?php


session_start();
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "heo");

$connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);



if (!$connection) {
    die('not conneted to databse');
}
  
$domain ='http://localhost/charity_fundraising_website/HEO_EZIOKWU_FOUNDATION_ORGANISATION/';
$sitename = 'HEO_EZIOKWU_FOUNDATION_ORGANISATION';
$sitenumber = '+234 706-433-4905';
$sitenumberF = '+31639455131';
$siteemail = 'eziokwufoundation@outlook.com';
$siteshort = 'HEO-E-F-ORGANISATION';



?>