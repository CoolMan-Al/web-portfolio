<!DOCTYPE html>
<html>

<head>
    <title>Web Applications and Technologies</title>
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
    <header>
        <h1>Al-Mahfuz Chowdhury C3634134</h1>
    </header>
    <section>
        <h2>Manage Products</h2>
        <fieldset>
            <legend>Enter New Product Details</legend>
            <form method="POST" action="insertProduct.php">
                <label for="name">Product Name:</label><br>
                <input type="text" name="productName"/><br>
                <br>                
                <label for="price">Price:</label><br>
                <input type="text" name="productPrice"><br>
                <br>
                <label for="image">Image Filename:</label><br>
                <input type="text" name="productImage"><br>
                <br>
                <input type="submit" value="Submit" name="submit" />
                <input type="reset" value="Clear" />
            </form>
        </fieldset>
        <table>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Amend</th>
                <th>Delete</th>
            </tr>
            <?php
            echo "<br>";    
            include "displayProducts.php";
            ?>
        </table>
        <br>
    </section>
    <footer>
        <a href="../watIndex.html">
            <small>Return</small>
        </a>
    </footer>
</body>