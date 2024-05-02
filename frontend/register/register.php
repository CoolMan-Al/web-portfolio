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
    <h2>Account Registration</h3>
    <?php
    include "connection.php";
    ?>
<form method="POST" action="addUser.php">
            <fieldset>
                <legend>
                    New User Details
                </legend>
                <label for="username">Username: </label><br>
                <input type="text" name="username"/> <?php echo $_SESSION["userEmpty"]; ?>
                <br />

                <label for="email">Email: </label><br>
                <input type="text" name="email"/>  <?php echo $_SESSION["emailEmpty"]; ?>
                <br />

                <label for="password">Password: </label><br>
                <input type="password" name="password" />  <?php echo $_SESSION["passEmpty"]; ?>
                <br /><br>

                <label for="age">Age: </label>
                <select name="age">
                    <option value="0">Please Select</option>
                    <option value="1">Under 18</option>
                    <option value="2">18 to 30</option>
                    <option value="3">31 to 60</option>
                    <option value="4">Over 60</option>
                </select>  <?php echo $_SESSION["ageEmpty"]; ?>
                <br /><br />
                <label for="">Click to Confirm: </label>
                <input type="checkbox" name="confirm" value="agree">  <?php echo $_SESSION["conEmpty"]; ?><br />
                <br>

                <input type="submit" value="Submit" name="submit" />
                <input type="reset" value="Clear" />
            </fieldset>
        </form>
        <?php
        echo $_SESSION["register"];
        ?>
</section>

<footer>
    <small>
        <a href="../watIndex.html">Home</a>
    </small>
</footer>
</body>

</html>