<?php
/* Connect to the database */
$dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");
if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

/* Insert into boba table Query */

/*
PHP Form Validation
https://www.w3schools.com/php/php_form_validation.asp
*/
// define variables and set to empty values
$BobaFlavour = $price = $Image = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $BobaFlavour = test_input($_POST["BobaFlavour"]);
    $price = test_input($_POST["price"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function terminate_script() {
    /* Refresh the page after 2 seconds and return to the menu.php page */
    header("refresh:2; url=updatepage.php");
    exit();     /* Terminate script */
}


/* Check the length of the string */
if (strlen($BobaFlavour)>20) {
    echo 'Boba Flavour Name too long';
    terminate_script();
}

elseif (strlen($BobaFlavour)==0) {
    echo 'Please insert a boba flavour';
    terminate_script();
}

/*
Validating the price
https://supunkavinda.blog/php/input-validation-with-php#user-inputs
*/
if (!empty($price)) {
    $number = filter_var($price, FILTER_VALIDATE_FLOAT);

    /* Checks the number is a number and is within range */
    if ($number === false or $price < 0 or $price > 99) {
        echo 'Invalid Integer' ;
        terminate_script();
    }
}

$insert_boba = "INSERT INTO boba (BobaFlavour, price, Image) VALUES('$BobaFlavour', '$price', '$Image')";

/* Check the data has been inserted */
if(!mysqli_query($dbcon, $insert_boba)) {
    echo 'Inserted Failed!';
} else {
    echo 'Insert Successful!';
}

/* End the script */
terminate_script();

?>