<!DOCTYPE html>
<html lang="en">

<head>
    <title>Web Applications and Technologies</title>
    <style>
        * {font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif}
        table {border: 1px solid;}
        th{border: 1px solid;}
        td {border: 1px solid;}
    </style>
</head>

<body>
    <header>
        <h1>Al-Mahfuz Chowdhury C3634134</h1>
    </header>

    <section>
        <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        ?>

        <h1>Fundamentals of PHP</h1>

        <?php
            $day = date('l');
            //$day = "Wednesday";
            echo "It's " . $day;
            echo "<br>";

            if ($day == "Wednesday") {
                echo "It is Midweek";
            }
            else {
                echo "It is not Midweek";
            }
            echo "<br>";

            //$hour = date('G');
            $hour = 18;

            if ($hour < 12) {
                echo "Good Morning";
            }
            else if ($hour >= 12 && $hour <= 18) {
                echo "Good Afternoon";
            }
            else {
                echo "Good Night";
            }
            echo "<br>";

            $password = "username";
            $passlen = strlen($password);
            if ($passlen > 4 && $passlen < 10) {
                echo "Password length is valid";
            }
            else {
                echo "Password length is invalid";
            }
            echo "<br>";

            if ($password == "password" || $password == "username") {
                echo "Password valid";
            }
            else {
                echo "Password invalid";
            }
            echo "<br>";
        ?>

        <h2>Arrays</h2>
        <h3>Simple Arrays</h3>

        <?php
            $products = array("t-shirt", "cap", "mug");
            print_r($products);
            echo "<br>";
            $products[1] = "shirt";
            print_r($products);
            echo "<br>";
            array_push($products, "skirt");
            print_r($products);
            echo "<br>";
            echo "The item at index [2] is: " . $products[2] . "<br>";
            echo "The item at index [3] is: " . $products[3] . "<br>";
        ?>

        <h3>Associative Arrays</h3>

        <?php
            $Customer = array(
                "CustID" => 12,
                "CustName" => "Sarah",
                "CustAge" => 23,
                "CustGender" => "F"
            );
            print_r($Customer);
            echo "<br>";
            $Customer["CustAge"] = 32;
            $Customer["CustEmail"] = "sarah@gmail.com";
            print_r($Customer);
            echo "<br>";
            echo "Items in my customer array";
            echo "<br>";
            echo "The item at index[CustName] is: " . $Customer["CustName"];
            echo "<br>";
            echo "The item at index[CustEmail] is: " . $Customer["CustEmail"];
        ?>

        <h3>Multi-Dimensional Arrays</h3>

        <?php
            $stock = array(
                array(
                    "description" => "t-shirt",
                    "price" => 9.99,
                    "stock" => 100,
                    "color" => array("blue", "green", "red")
                ),
                array(
                    "description" => "cap",
                    "price" => 4.99,
                    "stock" => 50,
                    "color" => array("blue", "black", "grey")
                ),
                array(
                    "description" => "mug",
                    "price" => 6.99,
                    "stock" => 30,
                    "color" => array("yellow", "green", "pink")
                )
            );

            echo "This is my order:<br>";
            echo $stock[0]["color"][1] . " " . $stock[0]["description"] . "<br>";
            echo "Price: £" . $stock[0]["price"] . "<br>";
            echo $stock[1]["color"][2] . " " . $stock[1]["description"] . "<br>";
            echo "Price: £" . $stock[1]["price"] . "<br>";
        ?>

        <h2>Loops</h2>
        <h3>While Loops</h3>

        <?php
            $counter = 1;
            while ($counter < 6) {
                echo "count = " . $counter . "<br>";
                $counter++;
            };
        ?>

        <table>
            <tr>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            <?php
                $counter = 1;
                $shirtPrice = 9.99;
                echo "<br>";
                while ($counter <= 10) {
                    $total = $counter * $shirtPrice;
                    echo "<tr>";
                    echo "<td>" . $counter . "</td>";
                    echo "<td>£" . number_format($total,2) . "</td>";
                    echo "</tr>";
                    $counter++;
                };
            ?>
        </table>

        <h3>For Loops</h3>

        <?php
            $names = array("Peter","Kat","Laura","Ali","Popacatapetal");
            for ($i = 0; $i < count($names); $i++) {
                echo $names[$i] . "<br>";
            };
        ?>

        <h3>Foreach Loops</h3>

        <?php
            $students = array(
                "Peter"=>"c123456",
                "Kat"=>"c654321",
                "Laura"=>"c987654",
                "Ali"=>"c654987",
                "Popacatapetal"=>"c765984"
            );
            foreach ($students as $name => $id) {
                echo "Name: " . $name . " ID: " . $id . "<br>";
            };
            echo "<br>";
            
            $city = array(
                "Peter"=>"LEEDS",
                "Kat"=>"bradford",
                "Laura"=>"wakeFIeld"
            );
            print_r($city);
            echo "<br>";
            foreach ($city as $name => $place) {
                $city[$name] = ucfirst(strtolower($place));
            };
            print_r($city);
        ?>

        <h2>Extention</h2>

        <?php
        $password = "pass111";
        echo "Password is: " . $password;
        echo "<br>";

        if (isset($password) && !empty($password)) {
            if (strlen($password) >= 6 && strlen($password) <= 8) {
                if (!is_numeric($password)) {
                    echo "Password OK";
                }
                else {
                    echo "Password cannot be a number";
                }
            }
            else {
                echo "Password must be between 6 and 8 characters in length";
            }
        }
        else {
            echo "Please enter a password";
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