<?php
session_start();

/* Connect to the database */
$dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");
if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

if ((!isset($_SESSION['logged_in'])) or $_SESSION['logged_in'] != 1) {
    header("Location: error_page.php");
}

/* Update boba query */
$update_boba = "SELECT * FROM boba";
$update_boba_records = mysqli_query($dbcon, $update_boba);

/* ORDERS DROPDOWN */
/* Create a query to get all orders and perform against the db */
$all_orders_query = "SELECT OrderID FROM order ORDER BY OrderID";
$all_orders_result = mysqli_query($dbcon, $all_orders_query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Spill the Tea</title>

    <meta name="description" content="">
    <link href="css/spillthetea.css" rel="stylesheet">
    <!-- Javascript Link -->
    <script src="javascript/spillthetea.js"></script>

</head>
<body>
<main>
    <!-- Information on top of the page -->
    <div id="admin-info">
        <p class="center">To add an image for the boba flavour, use the 'update boba' section</p>
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
        <a href="updatepage.php"  class="active">Update</a>
        <a href="orders.php">Orders</a>

        <!-- Login and logout links -->
        <a href="process_logout.php">Logout</a>
    </nav>
    <!-- Navigation bar end -->

    <!--Level 3 - INSERT -->
    <!--Adding a boba into the database-->
    <div class="add-boba-form">
        <h2>ADD BOBA</h2>
        <form name="addform" action="insert.php" method="post" onsubmit="return validateaddform()" enctype="multipart/form-data">
            <!-- Ask for the boba flavour -->
            <label for="BobaFlavour">Boba flavour:</label><br>
            <input type="text" id="BobaFlavour" name="BobaFlavour"><br><br>

            <!-- Ask for the boba price -->
            <label for="price">Price: $</label><br>
            <input type="text" id="price" name="price"><br><br>

            <!--Perform the form action goto insert.php-->
            <input id="add-submit-button" type="submit" value="Add">
        </form>
    </div>

    <br> <br> <!-- Insert breaks between add boba form and boba information table -->

    <!-- Pull all data from boba table and add to a table -->
    <div class="update-boba">
        <h2>UPDATE BOBA</h2>
        <div class="update-boba-table">
            <table>
                <!--Table Row-->
                <tr>
                    <!--Table Header-->
                    <th>Boba Flavour</th>
                    <th>Price</th>
                    <th>Image</th>
                </tr>

                <!--Add a row for each record-->
                <?php
                while($row = mysqli_fetch_array($update_boba_records)) {
                    /* Allow modifying the value in the database */
                    echo "<tr><form action=update.php method=post>";
                    echo "<td><input type=text name=BobaFlavour value='". $row['BobaFlavour'] ."'></td>";
                    echo "<td><input type=text name=Price value='". $row['Price'] ."'></td>";
                    echo "<td><input type='file' id='file' name='Image' value='". $row['Image'] ."'></td>";

                    /* Hidden field holding the PK of the record */
                    echo "<td><input type=hidden name=BobaID value='". $row['BobaID'] ."'></td>";

                    /* Add Submit button to perform the form action goto update.php */
                    echo "<td><input type=submit class='image-submit'></td>";

                    /* Add Delete record button to go to delete.php with the BobaID */
                    echo "<td><a class='delete-boba' href=delete.php?BobaID=". $row['BobaID'] . ">Delete</a></td>";
                    echo "</form></tr>";
                }
                ?>
            </table>
        </div>
    </div>

    <br> <br> <!-- Insert a break between boba information table and orders section -->
</main>

<!-- Footer -->
<footer id="footer">
    <br>
    <!-- Social Media Icons -->
    <ul id="footericons">
        <li><a href="https://www.instagram.com/" target="_blank"><img src="images/instagram-icon.png" alt="Instagram Icon" width="20"></a></li>
        <li><a href="https://www.facebook.com/" target="_blank"><img src="images/facebook-icon.png" alt="Facebook Icon" width="22"></a></li>
    </ul>
    <p class="center">©2022 Spill the Tea</p>
</footer>


</body>
</html>