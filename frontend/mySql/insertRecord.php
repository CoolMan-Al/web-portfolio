<?php
include "connection.php";
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$gender = $_POST["gender"];
$age = $_POST["age"];

$query = "INSERT INTO Customer (FirstName, LastName, Email, Password, Gender, Age) VALUES ('$firstName','$lastName','$email','$pass','$gender','$age')";

mysqli_query($connection,$query);

header("location:mysql.php");
?>