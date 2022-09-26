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

/* Inserting image into database */
if(isset($_POST['submit'])) {
    $Image = $_FILES['uploadfile']['Image'];
    
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["uploadfile"]["Image"]);

// Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Valid file extensions
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

// Check extension
    if (in_array($imageFileType, $extensions_arr)) {
        // Upload file
        if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $target_dir . $Image)) {
            // Insert record
            $query = "insert into boba(Image) values('" . $Image . "')";
            mysqli_query($dbcon, $query);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>

    <meta name="description" content="">
    <link href="css/spillthetea.css" rel="stylesheet">
    <!-- Javascript Link -->
    <script src="javascript/spillthetea.js"></script>

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
    <form name="addform" action="insert.php" method="post" onsubmit="return validateaddform()" enctype="multipart/form-data">
        <!-- Ask for the boba flavour -->
        <label for="BobaFlavour">Boba flavour:</label><br>
        <input type="text" id="BobaFlavour" name="BobaFlavour"><br>

        <!-- Ask for the boba price -->
        <label for="price">Price: $</label><br>
        <input type="text" id="price" name="price"><br>

        <!--Perform the form action goto insert.php-->
        <input type="submit" value="submit">
    </form>

    <br> <br> <!-- Insert breaks between add boba form and boba information table -->

    <!-- Pull all data from boba table and add to a table -->
    <table>
        <tr>    <!--Table Row-->
            <th>    <!--Table Header-->
                Boba Flavour
            </th>
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