<?php
    /* Connect to the database */
    $dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");

    /* If connection fails, exit nicely */
    if($dbcon == NULL) {
        echo "Could not connect to database";
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Spill the Tea</title>
        <link rel="stylesheet" href="spillthetea.css">
    </head>

    <body>
        <!-- Side wide navigation bar -->
        <nav>
            <!-- Logo -->
            <p><a href="index.php"><img id="logo" src="logo.png"</a></p>

            <!-- Navigation links --->
            <a href="index.php">Home</a>
            <a href="compare.php">Compare</a>
            <a href="add.php">Add</a>
            <a href="locations.php">Locations</a>
        </nav>
    </body>
