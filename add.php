<?php
/* Connect to the database */
$dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");

/* If connection fails, exit nicely */
if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}
?>

