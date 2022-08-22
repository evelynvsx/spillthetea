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

        <div class="slider_container">
            
            <div class="slider_text">
                <h1>Spill the Tea</h1>
                <p>Description</p>
            </div>

            <div class="mySlides fade">
                <img src="images/slider-img-1" alt="1st image slider" style="width: 80%">
            </div>

            <div class="mySlides fade">
                <img src="images/slider-img-2" alt="2nd image slider" style="width: 80%">
            </div>

            <div class="mySlides fade">
                <img src="images/slider-img-3" alt="3rd image slider" style="width: 80%">
            </div>

            <div class="mySlides fade">
                <img src="images/slider-img-4" alt="4th image slider" style="width: 80%">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)"><</a>
            <a class="next" onclick="plusSlides(1)">></a>
        </div>
        <br>

    <!-- Dots / circles on bottom of the slider-->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    </body>
</html>
