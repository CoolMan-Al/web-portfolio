<?php

include "connection.php";
$name = $_POST['productName'];
$price = $_POST['productPrice'];
$image = $_POST['productImage'];

$query = "INSERT INTO products (productName, productPrice, productImageName) VALUES ('$name','$price','$image')";

mysqli_query($connection,$query);

if (mysqli_affected_rows($connection) > 0) {
    header("location:crud.php");
}
else {
    echo "Error in query" . $query . mysqli_error($connection);
}

?>