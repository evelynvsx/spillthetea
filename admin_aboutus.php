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
    <a href="admin_index.php">Home</a>
    <a href="admin_menu.php">Menu</a>
    <a href="admin_aboutus.php" class="active">About Us</a>
    <a href="updatepage.php">Update</a>
    <a href="orders.php">Orders</a>

    <!-- Login and logout links -->
    <a href="process_logout.php">Logout</a>
</nav>
<!-- Navigation bar end -->

<!-- About Us page content start -->
<main>
    <div class="about-us-intro">
        <h2>ABOUT US</h2>
        <a target="_blank">
            <img src="images/about_us_img_1.jpg" alt="2 glass of bubble tea with cake" width="60%">
        </a>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.
        </p>
    </div>
    <div class="our-story-title">
        <h2>OUR STORY</h2>
    </div>
    <div class="about-us-section-1">
        <div class="handmade-pearls-images">
            <a target="_blank">
                <img src="images/handmade-pearls.jpg" alt="boba pearls stored in a small glass bowl" width="18%">
                <img src="images/white-tapioca-pearls.jpg" alt="white tapioca pearls" width="40.5%">
                <img src="images/handmade-pearls-2.jpg" alt="bubble tea and boba pearls in a small bowl" width="18%">
            </a>
        </div>

        <h3>HANDMADE PEARLS</h3>
        <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
        </p>
    </div>
</main>
<!-- About Us page content end -->

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