<?php
    /* Connect to the database */
    $dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");

    /* Checks if DB connection was successful */
    if($dbcon == NULL) {
        echo "Could not connect to database";
        exit();
    }

    /* Get from the order id from index page else set default */
    if(isset($_GET['order_sel'])) {
        $OrderID = $_GET['order_sel'];
    } else {
        $OrderID = NULL;
    }
    echo $OrderID;

    /* Create the SQL query */
    $this_order_query = "SELECT `BobaFlavour`, `FName`, `LName`, `Price`, `OrderID`, `Image`
                         FROM `order`, `boba`, `customer` 
                         WHERE `boba`.`BobaID` = `order`.`BobaID` AND `customer`.`CustomerID` = `order`.`CustomerID`";
                         

    /* Perform the query against the database */
    $this_order_result = mysqli_query($dbcon, $this_order_query);

    /* Fetch the result into an associative array */
    $this_order_record = mysqli_fetch_assoc($this_order_result);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Spill the Tea</title>
        <link rel="stylesheet" href="css/spillthetea.css">
    </head>

    <!-- Navigation bar start -->
    <nav>
        <!-- Logo -->
        <div id="logo">
            <p><a href="index.php"><img src="images/logo.png" alt="spill the tea logo" height="100px"></a></p>
        </div>

        <!-- Navigation links --->
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="updatepage.php"  class="active">Update</a>
        <a href="contact.php">Contact</a>

        <!-- Login and logout links -->
        <a href="login.php">Login</a></p>
        <a href="process_logout.php">Logout</a></p>
    </nav>
    <!-- Navigation bar end -->

    <body>
        <h2>Drinks Information</h2>
        <!--Order info $this_order_record is the associative array, italicise the value-->
        <?php
            echo "<h2> Order Number: <em>". $this_order_record['OrderID'] ."</em></h2><br>";
            echo "Boba Flavour: <em>". $this_order_record['BobaFlavour'] ."</em><br>";
            echo "Customer First Name: <em>". $this_order_record['FName'] ."</em><br>";
            echo "Customer Last Name: <em>" . $this_order_record['LName'] ."</em><br>";
            echo "Price: <em>". $this_order_record['Price'] ."</em></p>";
            echo "<br><img src='images/".$this_order_record['Image']."' height='100' width='100'/>";

        ?>
    </body>
</html>