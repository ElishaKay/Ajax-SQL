<?php
// //Database Configuration
// $hostname = "localhost";
// $user = "root";
// $password = "pokemon7";
// $database = "moviehol_PHP-Login";
// $prefix = "";

// $bd = mysqli_connect($hostname, $user, $password) or die("Failed to connect to database");
// mysqli_select_db($database, $bd) or die("Database Not Found");


// <?php

//Loadmore configuarion
$resultsPerPage=5;

/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "*";
$dbname = "moviehol_PHP-Login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}



?>