<?php
    session_start();
    if ($_GET["submit"] === "OK") {
        $_SESSION["login"]=$_GET["login"];
        $_SESSION["passwd"]=$_GET["passwd"];
    }
    $_SESSION["newsession"]=$value;
    echo $_SESSION["newsession"];
?>

<html><body>
    <form action="index.php" method="GET">
        Username: <input type='text' name="login" value="<?PHP echo $_SESSION['login'];?>" />
        <br />
        Password: <input type="password" name="passwd" value="<?PHP echo $_SESSION['passwd'];?>"  />
        <input type="submit" name = "submit" value = "OK" />
    </form>
</body></html>