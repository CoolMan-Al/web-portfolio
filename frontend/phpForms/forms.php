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
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        ?>

        <h1>Processing Input from HTML Forms</h1>
        <h2>Login Form using GET</h2>

        <form method="post" action="forms.php">
            <fieldset>
                <legend>
                    Login
                </legend>
                <label for="logEmail">Email: </label>
                <input type="text" name="logEmail" />
                <br />
                <label for="logPass">Password: </label>
                <input type="password" name="logPass" />
                <br />
                <input type="submit" value="Submit" name="logSubmit" />
                <input type="reset" value="Clear" />
            </fieldset>
        </form>

        <?php
        if (isset($_POST['logSubmit'])) {
            $logEmail = $_POST['logEmail'];
            echo $logEmail;
        }
        ?>

        <form method="post" action="forms.php">
            <fieldset>
                <legend>Comment</legend>
                <label>Email: </label>
                
                <input type="text" name="comEmail" value="<?php
                if(isset($_POST["comEmail"])) {
                    echo $_POST["comEmail"];
                }?>" /><br />

                <textarea rows="4" cols="50" name="comment"><?php
                if(isset($_POST["comment"])) {
                    echo $_POST["comment"];
                }
                ?></textarea><br />

                <label for="">Click to Confirm: </label>
                <input type="checkbox" name="comConfirm" value="agree"><br />
                <input type="submit" value="Submit" name="comSubmit" />
                <input type="reset" value="Clear" />
            </fieldset>
        </form>

        <?php
        if(isset($_POST['comSubmit'])) {
            
            $comEmail = $_POST['comEmail'];
            $comment = $_POST['comment'];
            if(!empty($comEmail)) {
                if(filter_var($comEmail, FILTER_VALIDATE_EMAIL)) {

                    echo "Email: " . $comEmail . "<br/>";
                    echo "Comments: " . $comment . "<br/>";
                    
                    if(isset($_POST['comConfirm'])) {
                        $confirm = "Agreed";
                    }
                    else {
                        $confirm = "Not Agreed";
                    }
                    
                    echo "Confirm: " . $confirm . "<br>";
                }
                else {
                    echo $comEmail . " is not a valid email address";
                }
            }
            else {
                echo "Email must not be Empty.";
            }
        }
        ?>

        <h2>Tax Calculator</h2>
        
        <form method="post" action="forms.php">
            <fieldset>
                <legend>
                    Without TAX calculator
                </legend>
                <label for="taxInput">After Tax Price: </label>
                <input type="text" name="taxInput" value="<?php
                if(isset($_POST["taxInput"])) {
                    echo $_POST["taxInput"];
                }?>" />

                <label for="taxRate">Tax Rate: </label>
                <input type="text" name="taxRate" value="<?php
                if(isset($_POST["taxRate"])) {
                    echo $_POST["taxRate"];
                }?>"/>

                <input type="submit" value="Submit" name="taxSubmit" />
                <input type="reset" value="Clear" />
            </fieldset>
        </form>

        <?php
        if(isset($_POST["taxSubmit"])) {
            $taxInput = $_POST["taxInput"];
            $taxRate = $_POST["taxRate"];
            
            if(!(empty($taxInput) && empty($taxRate))) {
                if(preg_match('/^\d+(:?[.]\d{2})$/', $taxInput)) {
                    if (filter_var($taxRate,FILTER_VALIDATE_INT)) {

                        $result = number_format(($taxInput / (100 + $taxRate)) * 100,2);
                        echo "<h3>Price before tax = £$result</h3>";
                    }
                    else {
                        echo "<h3>Please enter a whole number for the tax rate</h3>";
                    }
                }
                else {
                    echo "<h3>Please enter the price in the format 9.99</h3>";
                }
            }
            else {
                echo "<h3>All Fields Required</h3>";
            }
        }
        ?>

        <h1>Passing Data Appended to an URL</h1>
        <h2>Pick a category</h2>
        <a href="forms.php?cat=Films">Films</a>
        <a href=" forms.php?cat=Books">Books</a>
        <a href=" forms.php?cat=Music">Music</a>
        <br>
        <?php
        if(isset($_GET["cat"])) {
            echo "<h3>The category chosen is " . $_GET["cat"]. "</h3>";
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