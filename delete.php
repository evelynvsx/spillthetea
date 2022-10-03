<?php
/* Connect to the database */
$dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");
if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

/* Update boba and price query */
$delete_boba = "DELETE FROM boba WHERE BobaID='$_GET[BobaID]'";

/* Check the record has been deleted */
if(!mysqli_query($dbcon, $delete_boba)) {
    echo 'Delete Failed';
} else {
    echo 'Delete Successful';
}

/* Refresh the page and redirect */
header("refresh:2; url=admin_menu.php");
?>