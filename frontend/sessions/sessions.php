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
    include 'connection.php';
    if (isset($_SESSION['user'])) {
        echo "Hello " . $_SESSION['user'] . "<br>";
        echo "<a href='logout.php'>Log Out</a><br>";
        echo "<a href='protected.php'>Protected</a><br>";
    }
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