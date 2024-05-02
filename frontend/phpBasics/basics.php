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
        <h1>
            Basics of PHP
        </h1>

        <h2>Outputting Text</h2>
        
        <?php
        echo "c3634134 <br> Al-Mahfuz Chowdhury <br>";
        echo "This is the first PHP script of this portfolio.<br>";
        echo "<br>";
        echo "<h2>Variables</h2>";
        $name = "David";
        $age = 12;
        echo "Hi my name is " . $name . " and I am " . $age . " years old <br>";
        echo "Mi nombre es $name y tengo $age anos de edad <br>";
        ?>

        <h2>Functions</h2>

        <?php
        //gettype() returns the type of data inside the parameter passed in the function
        echo gettype($name);
        echo "<br>";
        //strlen() returns the number of characters inside the parameter passed in the function
        echo strlen($name);
        echo "<br>";
        //strtoupper() returns the parameter passed inside the function with all of the characters converted to uppercase
        echo strtoupper($name);
        ?>

        <h2>Arithmetic</h2>
        
        <?php
        $num1 = 9;
        $num2 = 12;
        $numTimes = $num1 * $num2;
        $numPercent = ($num1 / $num2) * 100;
        $numDivide = floor($num2 / $num1);
        $numRemain = $num2 % $num1;
        echo "<b>";
        echo "num1 = " . $num1 . "<br>";
        echo "num2 = " . $num2 . "<br>";
        echo "num1 x num2 = " . $numTimes . "<br>";
        echo "num1 as a percentage of num2 = " . $numPercent . "%<br>";
        echo "num2 divided by num1 = " . $numDivide . " remainder " . $numRemain;
        echo "<br><br>";

        $meters = 1.8;
        $inchNoFeet = ($meters * 100) / 2.54;
        $feet = floor($inchNoFeet / 12);
        $inches = floor($inchNoFeet % 12);
        echo "Name: " . $name . "<br><br>";
        echo "Age: " . $age . "<br><br>";
        echo "Height in Feet and inches: " . $feet . "ft " . $inches . "ins";
        ?>
    </section>

    <footer>
        <small> <a href="../watIndex.html">Home</a></small>
    </footer>

</body>

</html>