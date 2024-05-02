<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Web Applications and Technologies
    </title>
    <style>
        * {font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif}
    </style>
</head>

<body>
    <header>
        <h1>Al-Mahfuz Chowdhury C3634134</h1>
    </header>
    <section>
    <h1>Session Login</h1>


    <?php

    //include init.php so session vars can be used
    include 'init.php';
    //Use an if statement to determine whether the session var holding //the user name ($_SESSION['user'] has been set. If it has, echo out //a welcome message for the user, followed by a links to a pages //called protected.php and logout.php.
    if (isset($_SESSION['user'])) {
        echo "Hello " . $_SESSION['user'] . "<br>";
        echo "<a href='logout.php'>Log Out</a><br>";
        echo "<a href='protected.php'>Protected</a><br>";
    }
    //add an else section that will include loginform.php and display any //error message that is held in ($_SESSION['error']
    else {
        include "loginform.php";
        echo $_SESSION["error"];
    }

    ?>
    </section>
<footer>
    <small>
        <a href="../watIndex.html">Home</a>
    </small>    
</footer>
</body>

</html>