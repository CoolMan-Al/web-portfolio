<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Web Applications and Technologies
    </title>
    <style>
        * {font-family:Arial, Helvetica, sans-serif}
    </style>
</head>

<body>
    <header>
        <h1>Al-Mahfuz Chowdhury C3634134</h1>
    </header>
    <section>

        <h1>Handling MySQL Tables with PHP</h1>

        <form method="post" action="insertRecord.php">
            <fieldset>
                <legend>
                    Login
                </legend>
                <label for="firstName">First Name: </label>
                <input type="text" name="firstName" />
                <br /><br />

                <label for="lastName">Surname: </label>
                <input type="text" name="lastName" />
                <br /><br />

                <label for="email">Email: </label>
                <input type="text" name="email" />
                <br /><br />

                <label for="pass">Password: </label>
                <input type="password" name="pass" />
                <br /><br />

                <label for="gender">Gender: </label>
                <select name="gender">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
                <br /><br />

                <label for="age">Age: </label>
                <input type="text" name="age" />
                <br /><br />

                <input type="submit" value="Submit" name="submit" />
                <input type="reset" value="Clear" />
            </fieldset>
        </form>

        <?php
        include "selectRecord.php";
        ?>

        </section>

<footer>
    <small>
        <a href="../watIndex.html">Home</a>
    </small>
</footer>
</body>

</html>