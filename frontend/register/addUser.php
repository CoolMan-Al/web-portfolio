<?php
include "init.php";

$_SESSION["ageEmpty"] = "";
$_SESSION["userEmpty"] = "";
$_SESSION["passEmpty"] = "";
$_SESSION["emailEmpty"] = "";
$_SESSION["conEmpty"] = "";

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$age = $_POST["age"];
$confirm = $_POST["confirm"];

if($age == 0) {
    $_SESSION["ageEmpty"] = "Please Select an Age";
}
if(empty($username)) {
    $_SESSION["userEmpty"] = "Please Fill in the Username Field";
}
if(empty($password)) {
    $_SESSION["passEmpty"] = "Please Fill in the Password Field";
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $_SESSION["emailEmpty"] = "'$email' is not a valid Email";
}
if(empty($email)) {
    $_SESSION["emailEmpty"] = "Please Fill in the Email Field";
}


if(empty($confirm)) {
    $_SESSION["conEmpty"] = "Please Tick the Confirmation Box";
    header("location:register.php");
}


if(empty($_SESSION["ageEmpty"]) AND empty($_SESSION["userEmpty"]) AND empty($_SESSION["passEmpty"]) AND empty($_SESSION["emailEmpty"]) AND empty($_SESSION["conEmpty"])) {
    $query = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = mysqli_query($connection,$query);
    if (mysqli_num_rows($result) == 0) {
        $query = "INSERT INTO users (username, password, age, email) VALUES ('$username','$password','$age','$email')";
        mysqli_query($connection,$query);
        $_SESSION["register"] = "$username has been registered";
        header("location:register.php");
    }
    else {
        $_SESSION["register"] = "User already exists";
        header("location:register.php");
    }
}

else {
    $_SESSION["register"] = "There were errors";
    header("location:register.php");
}
?>