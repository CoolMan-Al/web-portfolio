<?PHP
include "connection.php";
$product = $_GET["id"];
$query = "DELETE FROM products WHERE productID = " . $product;
mysqli_query($connection, $query);

if (mysqli_affected_rows($connection) > 0) {
    header("location:crud.php");
}
else {
    echo "Error in query" . $query . mysqli_error($connection);
}

?>