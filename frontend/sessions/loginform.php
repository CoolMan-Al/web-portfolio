<fieldset style="width: 350px;">
    <legend>Session Login</legend>
    <form method="post" action="login.php">
        <label for="txtUser">Username: </label><br>
        <input type="text" name="txtUser" value=''/><br>
        <label for="txtPass">Password: </label><br>
        <input type="password" name="txtPass" /><br>
        <input type="submit" name="subLogin" value="Login" />
    </form>
</fieldset>

<?php
include "connection.php";
?>