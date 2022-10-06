<?php
/* Connect to the database */
$dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");
if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

/* Default value for page */
if(isset($_GET['BobaFlavour'])) {
    $ID = $_GET['BobaFlavour'];
} else {
    $ID = NULL;
}

/* Query the database for a single boba */
$this_boba_query = "SELECT `BobaFlavour` FROM `boba`";
$this_boba_result = mysqli_query($dbcon, $this_boba_query);
$this_boba_record = mysqli_fetch_array($this_boba_result);

/* Update boba query */
$update_boba = "SELECT `BobaFlavour` FROM `boba`";
$update_boba_records = mysqli_query($dbcon, $update_boba);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Spill the Tea</title>
    <link rel="stylesheet" href="css/spillthetea.css">
</head>

<body>
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
    <a href="admin_menu.php" class="active">Menu</a>
    <a href="admin_aboutus.php">About Us</a>
    <a href="updatepage.php">Update</a>
    <a href="orders.php">Orders</a>

    <!-- Login and logout links -->
    <a href="process_logout.php">Logout</a>
</nav>
<!-- Navigation bar end -->

<br><br>

<!-- Main content of the compare page -->
<main>
    <!-- Menu page heading content start -->
    <div class="menu-heading">

        <!-- Page title -->
        <h2>OUR FLAVOURS</h2>
        <p>Use the search engine down below to search for a boba flavour</p><br>

        <!-- Search engine -->
        <div class="search-engine">
            <form method="post">
                <input type="search" name="search">
                <!-- Search submit button -->
                <input type="submit" name="submit" value="Search">
            </form>
        </div>
    </div>
    <!-- Menu page heading content end -->

    <br> <br> <!-- Insert break to give space between search engine and menu column -->

    <!-- Search engine php start -->
    <?php
    if(isset($_POST['search'])) {
        $search = $_POST['search'];

        /* If the user does not enter a boba flavour, tell user to enter one*/
        if(strlen($search)==0){
            echo "<p class='search-engine-empty'>Please enter a boba flavour</p>";
            echo "<br>";    /* line break */
        }

        else {
            /* Connect search engine to database */
            /* % represents zero or more characters before and after the search term */
            $search_query = "SELECT BobaFlavour, price FROM boba WHERE boba.BobaFlavour LIKE '%$search%'";
            $search_result = mysqli_query($dbcon, $search_query);
            $search_records = mysqli_num_rows($search_result);

            /* If there are no results found */
            if($search_records == 0){
                echo "<p class='search-engine-not-found'>There was no results found!</p>";
                echo "<br>";
            }

            /* If the user enters a boba flavour from the database, display result */
            else{
                while ($result_row = mysqli_fetch_array($search_result)) {
                    echo "<p class='boba-flavour-name'>".$result_row['BobaFlavour'];
                    echo "<p class='prices'>$".$result_row['price'];

                    /* line break */
                    echo "<br>";
                    echo "<p class='menu-line-break'></p>";
                }
            }
        }
    }

    echo "<br>"; /* Insert break for space between search engine and flavours list */

    /* Display all boba flavours */
    $all_boba_query = "SELECT `BobaFlavour`,`price`,`Image` FROM `boba`";
    $all_boba_results = mysqli_query($dbcon, $all_boba_query);

    /* Display boba flavours in menu column to act as its grid */
    /* Display menu table's titles */
    echo
    "<table class='menu-grid'>
                <tr>
                <th>IMAGE</th>
                <th>BOBA FLAVOUR</th>
                <th>PRICE</th>
                </tr>";

    /* Table content */
    while ($all_boba_row = mysqli_fetch_assoc($all_boba_results)) {
        /* Table content start */
        echo "<tr>";

        // show images for each boba flavour in the product layout
        echo "<td><br><img src='images/".$all_boba_row['Image']."' height='125' width='125' 
                                       alt=".'BobaFlavour:'.$all_boba_row['BobaFlavour']."'/></td>";

        // show boba flavours in the product layout //
        echo "<p class='boba-flavour-name'><td>".$all_boba_row['BobaFlavour']."</td>";

        // show prices for each boba flavour in the product layout
        echo "<p class='prices'><td>$".$all_boba_row['price']."</td>";

        echo "</tr>";
    }
    ?>
</main>

<!-- Footer -->
<footer id="footer">
    <br>
    <!-- Social Media Icons -->
    <ul id="footericons">
        <li><a href=""><img src="images/instagram-icon.png" alt="Instagram Icon" width="20"></a></li>
        <li><a href=""><img src="images/facebook-icon.png" alt="Facebook Icon" width="22"></a></li>
    </ul>
    <p class="center">©2022 Spill the Tea</p>
</footer>

</body>
</html>