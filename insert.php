<?php
    /* Connect to the database */
    $dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");
    if($dbcon == NULL) {
        echo "Could not connect to database";
        exit();
    }

    /* Insert into drinks table Query */

    /*
    PHP Form Validation
    https://www.w3schools.com/php/php_form_validation.asp
    */
    // define variables and set to empty values
    $boba = $brand = $price = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $boba = test_input($_POST["BobaFlavour"]);
        $brand = test_input($_POST["BrandName"]);
        $price = test_input($_POST["price"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function terminate_script() {
        /* Refresh the page after 2 seconds and return to the add.php page */
        header("refresh:2; url=add.php");
        exit();     /* Terminate script */
    }


    /* Check the length of the string for boba flavour */
    if (strlen($boba)>30) {
        echo 'Boba Name too long';
        terminate_script();
    }

    /* Check the length of the string for brand name */
    elseif (strlen($brand)>20) {
        echo 'Brand Name too long';
        terminate_script();
    }

    /*
    Validating the cost
    https://supunkavinda.blog/php/input-validation-with-php#user-inputs
    */
    if (!empty($price)) {

        $number = filter_var($price, FILTER_VALIDATE_INT);

        /* Checks the number is a number and is within range */
        if ($number === false or $price < 0 or $price > 99) {
            echo 'Invalid Integer' ;
            terminate_script();
        }

    }

    $insert_boba = "INSERT INTO boba (BobaFlavour, BrandName, price) VALUES('$boba', '$brand', '$price')";

    /* Check the data has been inserted */
    if(!mysqli_query($dbcon, $insert_boba)) {
        echo 'Inserted Failed!';
    } else {
        echo 'Insert Successful!';
    }

    /* End the script */
    terminate_script();
?>