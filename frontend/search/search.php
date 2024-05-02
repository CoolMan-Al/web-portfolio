<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Web Applications and Technologies
    </title>
    <style>
        * {font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif}
        fieldset {
            width: 300px;
        }
        td {
            border: 1px solid;
            padding: 10px;
            width: 150px;
            height: 50px;
        }
    </style>
</head>

<body>
        <?php
        include "connection.php";
        if(isset($_SESSION["user"])) {
            include "searchForm.php";
            echo $_SESSION["search"];
        }
        else {
            echo "You need to be logged in.<br>";
            echo "<a href='../sessions/sessions.php'>Log In</a><br>";
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