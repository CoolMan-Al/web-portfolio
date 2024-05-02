<?php
include "connection.php";
$query = "SELECT * FROM products";
$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['productName'] . "</td>";
    echo "<td>" . $row['productPrice'] . "</td>";
    echo "<td><img src=". "images/" .$row['productImageName'] . " height='100'></td>";
    echo '<td><a href="amendProduct.php?id='. $row['productID'].'">Amend</a></td>';
    echo '<td><a href="deleteProduct.php?id='. $row['productID'].'">Delete</a></td>';
}

?>