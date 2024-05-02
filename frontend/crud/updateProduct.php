<?php
include "connection.php";
$productID = $_POST["productId"];
$productName = $_POST["productName"];
$productPrice = $_POST["productPrice"];
$productImageName = $_POST["productImage"];
$query = "UPDATE products SET productName = '$productName', productPrice = '$productPrice', productImageName = '$productImageName' WHERE productID = '$productID'";

mysqli_query($connection,$query);

if (mysqli_affected_rows($connection) > 0) {
    header("location:crud.php");
}
else {
    echo "Error in query" . $query . mysqli_error($connection);
}
?>