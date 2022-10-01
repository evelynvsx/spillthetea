<?php
    /* Connect to the database */
    $dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");

    /* Checks if DB connection was successful */
    if($dbcon == NULL) {
        echo "Could not connect to database";
        exit();
    }

    /* Get from the order id from update page else set default */
    if(isset($_GET['order_sel'])) {
        $OrderID = $_GET['order_sel'];
    } 
    else {
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
        <main>
            <div class="orders-content">
                <h2>Orders' Information</h2>
                <!--Order info $this_order_record is the associative array, italicise the value-->
                <?php
                    /* State the order number */
                    echo "<h3> Order Number: <em>". $this_order_record['OrderID'] ."</em></h3><br>";

                    /* Show details of the boba that the customer ordered */
                    echo "<h4> Ordered Boba Details: </h4>";
                    echo "<br><img src='images/".$this_order_record['Image']."' height='200' width='200'/><br>";
                    echo "<p> Boba Flavour: ". $this_order_record['BobaFlavour'] ."</p>";
                    echo "<p> Price: ". $this_order_record['Price'] ."</p>";

                    echo "<br>"; /* Give space between boba details and customer details */

                    /* Details of the customer */
                    echo "<h4> Customer Details: </h4>";
                    echo "<p> First Name: ". $this_order_record['FName'] ."</p>";
                    echo "<p> Last Name: ". $this_order_record['LName'] ."</p>";
                ?>
            </div>
        </main>

        <!-- Footer start -->
        <footer id="footer">
            <br>
            <!-- Social Media Icons -->
            <ul id="footericons">
                <li><a href=""><img src="images/instagram-icon.png" alt="Instagram Icon" width="20px"></a></li>
                <li><a href=""><img src="images/facebook-icon.png" alt="Facebook Icon" width="22px"></a></li>
            </ul>
            <p class="center">©2022 Spill the Tea</p>
        </footer>
        <!-- Footer end -->
        
    </body>
</html>