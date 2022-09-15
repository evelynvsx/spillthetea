<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Spill the Tea</title>

    <link href="css/spillthetea.css" rel="stylesheet">
</head>

<body>
    <div class="navigation-bar">
        <nav>
            <!-- Logo -->
            <p><a href="index.php"><img id="logo" src="images/logo.png" height="120px" </a></p>

            <!-- Navigation links --->
            <div class="navigation-links">
                <a href="index.php">Home</a>
                <a href="menu.php">Menu</a>
                <a href="updatepage.php">Update</a>
                <a href="locations.php">Locations</a>
            </div>
        </nav>
    </div>

    <br><br>

    <div class="locations-title">
        <h1>Boba Store Locations</h1>
    </div>

    <!-- Embedded google map -->
    <div class="GoogleMap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96013.88436649105!2d174.74334913935255!3d-41.234105798413715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38af3c49b1a7e7%3A0x3d6ba29c380b3424!2sGong%20Cha!5e0!3m2!1sen!2snz!4v1662269801812!5m2!1sen!2snz"
                width="80%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Boba stores information -->
    <div class="Store-Locations">
        <h3>Gongcha</h3>
        <p>57 Manners Street</p>
        <p>336 Lambton Quay</p>

        <h3>Noah's Ark</h3>
        <p>180 Lambton Quay</p>
        <p>93 Courtenay Place</p>
        <p>79 Manners Street</p>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <br>
        <!-- Social Media Icons -->
        <ul id="footericons">
            <li><a href=""><img src="images/instagram-icon.png" alt="Instagram Icon" width="20px"></a></li>
            <li><a href=""><img src="images/facebook-icon.png" alt="Facebook Icon" width="22px"></a></li>
        </ul>
        <p class="center">©2022 Spill the Tea</p>
    </footer>
</body>
</html>