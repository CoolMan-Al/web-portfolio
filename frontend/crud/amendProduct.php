<?php
include "connection.php";
$query = "SELECT * FROM products WHERE productID =" . $_GET["id"];
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);
?>

<fieldset style="width: 350px;">
    <legend>Edit Product Details</legend>
    <form method="POST" action="updateProduct.php">
        <input type="hidden" name="productId" value="<?php
        echo $_GET["id"];
        ?>"/>

        <label for="name">Product Name:</label>
        <input type="text" name="productName" value="<?php
        echo $row['productName'];
        ?>"/><br>
        <br>
        <label for="price">Price:</label>
        <input type="text" name="productPrice" value="<?php
        echo $row['productPrice'];
        ?>"><br>
        <br>
        <label for="image">Image Filename:</label>
        <input type="text" name="productImage" value="<?php
        echo $row['productImageName'];
        ?>"> 
</fieldset>
<br>
<input type="submit" value="Submit" name="productSubmit" />
<input type="reset" value="Clear" />
</form>