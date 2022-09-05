<?php
    /* Connect to the database */
    $dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");
    if($dbcon == NULL) {
        echo "Could not connect to database";
        exit();
    }

    /* Default value for page */
    if(isset($_GET['BobaFlavour'])) {
        $BobaID = $_GET['BobaFlavour'];
    } else {
        $BobaID = NULL;
    }

    /* Query the database for a single boba */
    $this_boba_query = "SELECT * FROM boba WHERE boba.BobaID = '" .$BobaID . "'";
    $this_boba_result = mysqli_query($dbcon, $this_boba_query);
    $this_boba_record = mysqli_fetch_assoc($this_boba_result);

    /* Update boba query */
    $update_boba = "SELECT * FROM boba";
    $update_boba_records = mysqli_query($dbcon, $update_boba);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Spill the Tea</title>
        <link rel="stylesheet" href="css/spillthetea.css">
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

        <br><br>

        <!-- Main content of the compare page -->
        <main>
            <!-- Allow user to search for a boba (search engine)-->
            <h2>Compare the prices of bubble tea from different brands</h2>
            <form action="" method="post">
                <input type="text" name="search">
                <input type="submit" name="submit" value="Search">
            </form>

            <!-- Display the search result -->
            <?php
                if(isset($_POST['search'])) {
                    $search = $_POST['search'];
                    if(strlen($search)==0){
                        echo "Please enter a boba flavour";
                        echo "<br>";    /* line break */
                    }

                    else {
                        /* % represents zero or more characters before and after the search term */
                        $search_query = "SELECT * FROM boba WHERE boba.BobaFlavour LIKE '%$search%'";
                        $search_result = mysqli_query($dbcon, $search_query);
                        $search_records = mysqli_num_rows($search_result);


                        /* If there are no results found */
                        if($search_records == 0){
                            echo "There was no results found!";
                            echo "<br>";
                        }

                        else{
                            while ($result_row = mysqli_fetch_array($search_result)) {
                                echo $result_row['BobaFlavour'];
                                echo "<br>";    /* line break */
                            }
                        }
                    }
                }

                /* Display all boba flavours */
                $all_boba_query = "SELECT `BobaID`,`BobaFlavour` FROM `boba`";
                $all_boba_results = mysqli_query($dbcon, $all_boba_query);

                while ($all_boba_row = mysqli_fetch_assoc($all_boba_results)) {
                    echo "<br>";
                    echo $all_boba_row['BobaFlavour'];
                    echo "<br>";
                }
            ?>
        </main>

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
