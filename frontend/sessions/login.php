<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'connection.php';


if(empty($_POST['txtPass']) OR empty($_POST["txtUser"])) {
    $_SESSION["error"] = "Please Fill in both Fields";
    header("location:sessions.php");    
}
else {


    $username = $_POST['txtUser'];
    $password = $_POST['txtPass'];

    $query = "SELECT * FROM users WHERE username = '$username'";
    
    //run query and store result
    $result = mysqli_query($connection,$query);
    //check result and generate message with code below
    if ($row = mysqli_fetch_assoc($result)) {
        $verify = password_verify($password, $row['password']);

        if($verify) {

            $_SESSION["user"] = $username;
            header("location:sessions.php");
        }
        else {
            $_SESSION["error"] = "User not recognised";
            header("location:sessions.php");
        }
    } 
    else {
        $_SESSION["error"] = "User not recognised";
        header("location:sessions.php");
    }
}
?>