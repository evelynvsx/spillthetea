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
    <p class="center">You are logged in as admin</p>
</div>

<!-- Navigation bar start -->
<nav>
    <!-- Logo -->
    <div id="logo">
        <p><a href="admin_index.php"><img src="images/logo.png" alt="spill the tea logo" height="100px"></a></p>
    </div>

    <!-- Navigation links --->
    <a href="admin_index.php" class="active">Home</a>
    <a href="admin_menu.php">Menu</a>
    <a href="admin_aboutus.php">About Us</a>
    <a href="updatepage.php">Update</a>
    <a href="orders.php">Orders</a>

    <!-- Login and logout links -->
    <a href="process_logout.php">Logout</a>
</nav>
<!-- Navigation bar end -->

<!-- Image slider start -->
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
        <li><a href="https://www.instagram.com/" target="_blank"><img src="images/instagram-icon.png" alt="Instagram Icon" width="20px"></a></li>
        <li><a href="https://www.facebook.com/" target="_blank"><img src="images/facebook-icon.png" alt="Facebook Icon" width="22px"></a></li>
    </ul>
    <p class="center">©2022 Spill the Tea</p>
</footer>
<!-- Footer end -->
</body>
</html>