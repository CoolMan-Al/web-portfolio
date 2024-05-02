<?php
include 'connection.php';
if(!isset($_SESSION['user'])){
    header ('location:sessions.php');
}

?> 
<p>Any page content that you want to protect can be placed here</p>

<a href="sessions.php">Return</a><br>
<a href="logout.php">Logout Page</a>