<?php
#Insert SQL values here
$host = "";
$user = "";
$pass = "";
$data = "";
$connection = mysqli_connect($host,$user,$pass,$data)
or exit("Error: Unable to connect to database.");
session_start();
?>
