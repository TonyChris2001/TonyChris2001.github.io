<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "Tonychris2001";
$dbName = "login_register";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName,4306);
if (!$conn) {
    die("Something went wrong;");
}

?>