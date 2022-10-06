<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Spill the Tea</title>

        <!-- Links -->
        <link rel="stylesheet" href="css/spillthetea.css"> <!-- Connect to CSS -->
        <script src="javascript/spillthetea.js"></script> <!-- Connect to javascript -->
    </head>

    <body>
        <!-- Information on top of the page -->
        <div id="admin-info">
            <p class="center">Log in as admin to update and add boba flavours</p>
        </div>

        <!-- Navigation bar start -->
        <nav>
            <!-- Logo -->
            <div id="logo">
                <p><a href="index.php"><img src="images/logo.png" alt="spill the tea logo" height="100"></a></p>
            </div>

            <!-- Navigation links -->
            <a href="index.php" class="active">Home</a>
            <a href="menu.php">Menu</a>
            <a href="aboutus.php">About Us</a>
            <a href="contact.php">Contact</a>

            <!-- Login and logout links -->
            <a href="login.php">Login</a>
        </nav>
        <!-- Navigation bar end -->

        <!-- Image slider start -->
        <div id="slider">
            <figure>
                <!-- 1st image in slider -->
                <a href="https://img.freepik.com/free-photo/arrangement-with-delicious-traditional-thai-tea_23-2148994368.jpg?w=996&t=st=1662937737~exp=1662938337~hmac=b3dc7aaed938c74e8cca07331b1cb95c0c1255719b06d50f45df8bcf626d45c4" target="_blank">
                    <img src="images/image-slider-1.png" alt="image slide 1" width="450" height="500">
                </a>
                <!-- 2nd image in slider -->
                <a href="https://img.freepik.com/free-photo/arrangement-with-delicious-traditional-thai-tea_23-2148994372.jpg?w=1380&t=st=1662937794~exp=1662938394~hmac=98eb826e3f28535e78dfa303878112c9625dceda2b97c9bf3493050a48149564" target="_blank">
                    <img src="images/image-slider-2.png" alt="image slide 2" width="450" height="500">
                </a>
                <!-- 3rd image in slider -->
                <a href="https://img.freepik.com/free-photo/composition-with-delicious-thai-tea-beverage_23-2148994334.jpg?w=1380&t=st=1662937661~exp=1662938261~hmac=d8c2d440d996adb52bc5375a176522c11a54d238b462e96af0d5fd90f923c437" target="_blank">
                    <img src="images/image-slider-3.png" alt="image slide 3" width="450" height="500">
                </a>

                <!-- 4th image in slider -->
                <a href="https://img.freepik.com/free-photo/arrangement-with-delicious-traditional-thai-tea_23-2148994378.jpg?w=1380&t=st=1662937633~exp=1662938233~hmac=a8c42747e46e46676faf9963222dea247e8a46892c6215e3346aa9a991267adb" target="_blank">
                    <img src="images/image-slider-4.png" alt="image slide 4" width="450" height="500">
                </a>
            </figure>

            <div class="Slider-text">
                <br>
                <h1>SPILL THE TEA</h1>
                <div class="Slider-desc">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="Slider-button">
                        <form method="POST" action="menu.php">
                            <input type="submit" value="SEE OUR FLAVOURS">
                        </form>
                    </div>
                    <br> <br>
                </div>
            </div>
        </div>
        <!-- Image slider end -->

        <!-- Footer start -->
        <footer id="footer">
            <br>
            <!-- Social Media Icons -->
            <ul id="footericons">
                <li><a href="https://www.instagram.com/" target="_blank"><img src="images/instagram-icon.png" alt="Instagram Icon" width="20"></a></li>
                <li><a href="https://www.facebook.com/" target="_blank"><img src="images/facebook-icon.png" alt="Facebook Icon" width="22"></a></li>
            </ul>
            <p class="center">©2022 Spill the Tea</p>
        </footer>
        <!-- Footer end -->
    </body>
</html>