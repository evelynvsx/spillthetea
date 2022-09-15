<?php
/* Connect to the database */
$dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");

/* If connection fails, exit nicely */
if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Spill the Tea</title>

        <link href="css/spillthetea.css" rel="stylesheet">
    </head>

    <body>
        <!-- Side wide navigation bar -->
        <nav>
            <!-- Logo -->
            <p><a href="index.php"><img id="logo" src="images/logo.png"</a></p>

            <!-- Navigation links --->
            <a href="index.php">Home</a>
            <a href="compare.php">Compare</a>
            <a href="add.php">Add</a>
            <a href="locations.php">Locations</a>
        </nav>

        <!-- Adding a boba into the database -->
        <h1>Add Boba</h1>
        <form name="myform" action="insert.php" method="post">
            <!-- Post the value into the input name -->
            <label for="BobaFlavour">Boba Flavour: </label><br>
            <input type="text" id="BobaFlavour" name="BobaFlavour"><br>

            <label for="BrandName">Brand Name: </label><br>
            <input type="text" id="BrandName" name="BrandName"><br>

            <label for="price">Price: $</label><br>
            <input type="text" id="price" name="price"><br>

            <br>

            <!-- Perform the form action go to add.php -->
            <input type="submit" value="Submit">
        </form>
        <br><br>

        <!-- Footer -->
        <footer id="footer">
            <br>
            <!-- Social Media Icons -->
            <ul id="footericons">
                <li><a href=""><img src="image/instagram-icon.png" alt="Instagram Icon" width="20px"></a></li>
                <li><a href=""><img src="image/facebook-icon.png" alt="Facebook Icon" width="22px"></a></li>
            </ul>
            <p class="center">©2022 Spill the Tea</p>
        </footer>
    </body>
</html>