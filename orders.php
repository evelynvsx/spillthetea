<?php
    /* Connect to the database */
    $dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");

    /* Checks if DB connection was successful */
    if($dbcon == NULL) {
        echo "Could not connect to database";
        exit();
    }

    if(isset($_GET['order'])){
        $OrderID = $_GET['order'];
    }
    else {
        $OrderID = 1;
    }

    /* Create the SQL query */
    $this_order_query = "SELECT `OrderID`, `Image`,  `FName`, `LName`, `BobaFlavour`, `Price`
                         FROM `order`, `boba`, `customer` 
                         WHERE `boba`.`BobaID` = `order`.`BobaID` AND `customer`.`CustomerID` = `order`.`CustomerID` 
                         ORDER BY `order`.`OrderID`";
                         
    /* Perform the query against the database */
    $this_order_result = mysqli_query($dbcon, $this_order_query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Spill the Tea</title>
        <link rel="stylesheet" href="css/spillthetea.css">
    </head>

    <!-- Information on top of the page -->
    <div id="admin-info">
        <p class="center">You are logged in as admin</p>
    </div>

    <!-- Navigation bar start -->
    <nav>
        <!-- Logo -->
        <div id="logo">
            <p><a href="admin_index.php"><img src="images/logo.png" alt="spill the tea logo" height="100"></a></p>
        </div>

        <!-- Navigation links -->
        <a href="admin_index.php">Home</a>
        <a href="admin_menu.php">Menu</a>
        <a href="admin_aboutus.php">About Us</a>
        <a href="updatepage.php">Update</a>
        <a href="orders.php" class="active">Orders</a>

        <!-- Login and logout links -->
        <a href="process_logout.php">Logout</a>
    </nav>
    <!-- Navigation bar end -->

    <main>
        <!-- Pull all data from order table in the database and add to a table -->
        <div class="orders-content">
            <h2>ORDERS INFORMATION</h2>
            <br><br><br><br> <!-- Give space between orders page title and orders table -->

            <div class="orders-info-table">
                <table>
                    <!--Table Row-->
                    <tr>
                        <!--Table Header-->
                        <th>Order ID</th>
                        <th>Image</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Boba Flavour</th>
                        <th>Price</th>
                    </tr>

                    <!--Add a row for each record-->
                    <?php
                    while($this_order_record = mysqli_fetch_array($this_order_result)) {
                        /* Allow modifying the value in the database */
                        echo "<td><p class='orders-table-info'>".$this_order_record['OrderID']."</td>";
                        echo "<td><br><img src='images/".$this_order_record['Image']."' height='125' width='125'/></td>";
                        echo "<td><p class='orders-table-info'>".$this_order_record['FName']."</td>";
                        echo "<td><p class='orders-table-info'>".$this_order_record['LName']."</td>";
                        echo "<td><p class='orders-table-info'>".$this_order_record['BobaFlavour']."</td>";
                        echo "<td><p class='orders-table-info'>".$this_order_record['Price']."</td>";

                        echo "</form></tr>";
                    }
                    ?>
                </table>
            </div>
        </div>

    </main>

    <!-- Footer start -->
    <footer id="footer">
        <br>
        <!-- Social Media Icons -->
        <ul id="footericons">
            <li><a href=""><img src="images/instagram-icon.png" alt="Instagram Icon" width="20"></a></li>
            <li><a href=""><img src="images/facebook-icon.png" alt="Facebook Icon" width="22"></a></li>
        </ul>
        <p class="center">©2022 Spill the Tea</p>
    </footer>
    <!-- Footer end -->
</html>