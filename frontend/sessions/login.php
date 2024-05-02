<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'init.php';


if(empty($_POST['txtPass']) OR empty($_POST["txtUser"])) {
    $_SESSION["error"] = "Please Fill in both Fields";
    header("location:sessions.php");    
}
else {

    //Gather details submitted from the $_POST array and store in local vars
    $username = $_POST['txtUser'];
    $password = $_POST['txtPass'];
    //build query to SELECT records from the users table WHERE
    //the username AND password in the table are equal to those entered.
    $query = "SELECT * FROM users WHERE username = '$username' AND password= '$password'";
    
    //run query and store result
    $result = mysqli_query($connection,$query);
    //check result and generate message with code below
    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION["user"] = $username;
        header("location:sessions.php");
    } 
    else {
        $_SESSION["error"] = "User not recognised";
        header("location:sessions.php");
    }
}
?>