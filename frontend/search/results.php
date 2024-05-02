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


<?php
include "searchForm.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$query = "SELECT * FROM products";

if(isset($_GET["category"])) {
    $search = $_GET["category"];
    if($search == "all"){
        $query = "SELECT * FROM products";
    }
    else {
        $query = "SELECT * FROM products WHERE category = '$search'";
    }
    include "connection.php";
    $result = mysqli_query($connection,$query);
    echo "<table>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['productName'] . "</td>";
        echo "<td>" . $row['productPrice'] . "</td>";
        echo "<td><img src=". "../crud/images/" .$row['productImageName'] . " height='100'></td>";
    }
    echo "</table>";
}
if(isset($_GET["text"])) {
    $search = $_GET["text"];
    if(empty($search)) {
        $query = "SELECT * FROM products";
    }
    else {
        $query = "SELECT * FROM products WHERE productName LIKE '%$search%'";
    }
    include "connection.php";
    $result = mysqli_query($connection,$query);
    echo "<table>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['productName'] . "</td>";
        echo "<td>" . $row['productPrice'] . "</td>";
        echo "<td><img src=". "../crud/images/" .$row['productImageName'] . " height='100'></td>";
    }
    echo "</table>";
}

if(isset($_GET["sort"])) {
    $sort = "";
    if($_GET["sort"] == "alpha") {
        $query = "SELECT * FROM products ORDER BY productName ASC";
    }
    if ($_GET["sort"] == "price") {
        $query = "SELECT * FROM products ORDER BY productPrice ASC";
    }
    include "connection.php";
    $result = mysqli_query($connection,$query);
    echo "<table>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['productName'] . "</td>";
        echo "<td>" . $row['productPrice'] . "</td>";
        echo "<td><img src=". "../crud/images/" .$row['productImageName'] . " height='100'></td>";
    }
    echo "</table>";
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