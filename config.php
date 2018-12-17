<?php
$dbHost = "localhost";        //Location Of Database usually its localhost
$dbUser = "technola_1";            //Database User Name
$dbPass = "Klaas111@";            //Database Password
$dbname = "technola_1";    //Database Name

// Create connection
$con = new mysqli($dbHost, $dbUser, $dbPass, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>