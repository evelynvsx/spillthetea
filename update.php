<?php
/* Connect to the database */
$dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");
if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

/* Update drink and cost query */
$update_boba = "UPDATE `boba_brand`, `boba` SET BobaFlavour='$_POST[BobaFlavour]', price ='$_POST[price]' WHERE BobaID='$_POST[BobaID]'";

/* Check the record has been updated */
if(!mysqli_query($dbcon, $update_boba)) {
    echo 'Update Failed';
} else {
    echo 'Update Successful';
}

/* Refresh the page and redirect */
header("refresh:2; url=compare.php");
?>