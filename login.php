<?php
/* Connect to the database */
$dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");
if($dbcon == NULL) {
echo "Could not connect to database";
exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Spill the Tea</title>
        <link rel="stylesheet" href="css/spillthetea.css">
    </head>

    <body>
        <!-- Side wide navigation bar -->
        <nav>
            <!-- Logo -->
            <p><a href="index.php"><img id="logo" src="images/logo.png" height="120px" </a></p>

            <!-- Navigation links --->
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="updatepage.php">Update</a>
            <a href="locations.php">Locations</a>
            <a href="login.php">Login</a>
            <a href="username_test.php">Username test</a>
        </nav>

    <div class="login-form">
        <h2>Log in here</h2>

        <!-- Log in form -->
        <form name="login_form" id="login_form" method="post" action="process_login.php">
            <label for="username">Username:</label>
            <input type="text" name="username"><br>

            <label for="password">Password:</label>
            <input type="password" name="password">

            <input type="submit" name="submit" id="submit" value="Log In">
        </form>
    </div>
    </body>
</html>