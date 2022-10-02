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
            <p><a href="index.php"><img src="images/logo.png" alt="spill the tea logo" height="100px"></a></p>
        </div>

        <!-- Navigation links --->
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="updatepage.php">Update</a>
        <a href="contact.php">Contact</a>
        <a href="location.php" class="active">Location</a>

        <!-- Login and logout links -->
        <a href="login.php">Login</a></p>
        <a href="process_logout.php">Logout</a></p>
    </nav>
    <!-- Navigation bar end -->

    <br>

    <!-- Locations page main content start -->
    <main>
        <div class="locations-page">
            <!-- Locations page information -->
            <h2>OUR LOCATIONS</h2>
            <p>500 COURTENAY PLACE, WELLINGTON CBD</p> <br>

            <br> <!-- Break to give space between embedded google map and information -->

            <!-- Embedded google map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.7108274802827!2d174.77902251535988!3d-41.29339757927297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38afda81e644f9%3A0x61a34c646d9ac821!2sCourtenay%20Place%2C%20Te%20Aro%2C%20Wellington%206011!5e0!3m2!1sen!2snz!4v1664698783561!5m2!1sen!2snz"
                    width="80%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>
    <!-- Locations page main content end -->

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