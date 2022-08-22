<?php
    /* Connect to the database */
    $dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");

    /* If connection fails, exit nicely */
    if($dbcon == NULL) {
        echo "Could not connect to database";
        exit();
    }

    /* Default value for page*/
    if(isset($_GET['boba'])) {
        $boba_id = $_GET['boba'];
    }
    else{
        $boba_id = 1;
    }

    /* Query the database for a boba */
    $this_boba_query = "SELECT `BobaID`,`BobaFlavour` FROM `boba` WHERE boba.bobaID = `".$boba_id."`";
    $this_boba_result = mysqli_query($dbcon, $this_boba_query);
    $this_boba_record = mysqli_fetch_assoc($this_boba_result);

    /* Update boba query */
    $update_boba = "SELECT * FROM boba";
    $update_boba_records = mysqli_query($dbcon, $update_boba);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Spill the Tea</title>

    <link href="css/spillthetea.css" rel="stylesheet">
</head>

<body>
    <h1>Compare the prices of boba from different brands</h1>
    <main>
        <!-- List the information of the selected boba record -->
        <h2>Boba Information</h2>
        <?php
            echo "<p> Boba Name: " .$this_boba_record['BobaFlavour']."<br>";
        ?>

        <!-- Allow user to search for a boba flavour -->
        <form action="text" name="search">
            <input type="submit" name="submit" value="Search">
        </form>

        <!-- Display the search result -->
        <?php
            if(isset($_POST['search'])) {
                $search = $_POST['search'];

                /* % represents zero or more characters before and after the search term */
                $search_query = "SELECT * FROM boba WHERE boba.BobaFlavour LIKE `%$search%`";
                $search_result = mysqli_query($dbcon, $search_query);
                $search_records = mysqli_num_rows($search_result);

                /* If there are no results found */
                if ($search_records == 0){
                    echo "There are no results found";
                }
                else {
                    /* Print all results found */
                    while ($result_row = mysqli_fetch_array($search_result)) {
                        echo $result_row['drink'];
                        echo "<br>"; /* Line break */
                    }
                }
            }
        ?>

        <!-- Adding a boba into the database -->
        <h2>Add Boba</h2>
        <form action="add.php" method="post">
            <!-- Post the value into the input name -->
            <label for="BobaFlavour">Boba Flavour: </label><br>
            <input type="text" id="BobaFlavour" name="BobaFlavour"><br>

            <label for="BrandName">Brand Name: </label><br>
            <input type="text" id="BrandName" name="BrandName"><br>

            <label for="price">Price: $</label><br>
            <input type="text" id="price" name="price"><br>

            <!-- Perform the form action go to add.php -->
            <input type="submit" value="Submit">
        </form>

    </main>
</body>
</html>
