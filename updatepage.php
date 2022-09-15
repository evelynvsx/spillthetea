<?php
/* Connect to the database */
$dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");
if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

/* Update boba query */
$update_boba = "SELECT * FROM boba";
$update_boba_records = mysqli_query($dbcon, $update_boba);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>

    <meta name="description" content="">
    <link href="css/spillthetea.css" rel="stylesheet">

</head>
<body>
<main>
    <!-- Side wide navigation bar -->
    <nav>
        <!-- Logo -->
        <p><a href="index.php"><img id="logo" src="images/logo.png" height="120px" </a></p>

        <!-- Navigation links --->
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="updatepage.php">Update</a>
        <a href="locations.php">Locations</a>
    </nav>

    <!--Level 3 - INSERT -->
    <!--Adding a boba into the database-->
    <h2>Add Boba</h2>
    <form action="insert.php" method="post">
        <!--Post the value into the input name-->
        <label for="BobaFlavour">Boba flavour:</label><br>
        <input type="text" id="BobaFlavour" name="BobaFlavour"><br>
        <label for="price">Price: $</label><br>
        <input type="text" id="price" name="price">

        <!--Perform the form action goto insert.php-->
        <input type="submit" value="Submit">
    </form>

    <br> <br> <!-- Insert breaks between add boba form and boba information table -->

    <!-- Pull all data from boba table and add to a table -->
    <table>
        <tr>    <!--Table Row-->
            <th>    <!--Table Header-->
                Boba Flavour
            </th>
            <th>Price</th>
        </tr>
        <!--Add a row for each record-->
        <?php

        while($row = mysqli_fetch_array($update_boba_records)) {
            /* Allow modifying the value in the database */
            echo "<tr><form action=update.php method=post>";
            echo "<td><input type=text name=BobaFlavour value='". $row['BobaFlavour'] ."'></td>";
            echo "<td><input type=text name=Price value='". $row['Price'] ."'></td>";

            /* Hidden field holding the PK of the record */
            echo "<td><input type=hidden name=BobaID value='". $row['BobaID'] ."'></td>";

            /* Add Submit button to perform the form action goto update.php */
            echo "<td><input type=submit></td>";

            /* Add Delete record button to goto drink.php with the drink_id */
            echo "<td><a href=delete.php?BobaID=". $row['BobaID'] . ">Delete</a></td>";
            echo "</form></tr>";
        }
        ?>
    </table>
</main>

<br> <br> <br> <br> <br> <!-- Space between the page content and the footer -->

<!-- Footer -->
<footer id="footer">
    <br>
    <!-- Social Media Icons -->
    <ul id="footericons">
        <li><a href="https://www.instagram.com/" target="_blank"><img src="images/instagram-icon.png" alt="Instagram Icon" width="20px"></a></li>
        <li><a href="https://www.facebook.com/" target="_blank"><img src="images/facebook-icon.png" alt="Facebook Icon" width="22px"></a></li>
    </ul>
    <p class="center">©2022 Spill the Tea</p>
</footer>

</body>
</html>