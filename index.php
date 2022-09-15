<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Spill the Tea</title>
        <link rel="stylesheet" href="css/spillthetea.css">
    </head>

    <body>
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

        <!-- Image slider -->
        <div id="slider">
            <figure>
                <!-- 1st image in slider -->
                <a target="_blank">
                    <img src="images/image-slider-1.png" alt="image slide 1" width="450" height="500">
                </a>
                <!-- 2nd image in slider -->
                <a target="_blank">
                    <img src="images/image-slider-2.png" alt="image slide 2" width="450" height="500">
                </a>
                <!-- 3rd image in slider -->
                <a target="_blank">
                    <img src="images/image-slider-3.png" alt="image slide 3" width="450" height="500">
                </a>

                <!-- 4th image in slider -->
                <a target="_blank">
                    <img src="images/image-slider-4.png" alt="image slide 4" width="450" height="500">
                </a>
            </figure>

            <div class="Slider-text">
                <h1>Spill the Tea</h1>
                <div class="Slider-desc">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <div class="Slider-button">
                        <form method="POST" action="menu.php">
                            <input type="submit" value="See our flavours">
                        </form>
                    </div>
                </div>

            </div>

        </div>

        <br> <br> <br> <br>

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