<?php
/* Connect to the database */
$dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");
if($dbcon == NULL) {
echo "Could not connect to database";
exit();
}
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
            <p class="center">Log in as admin to update and add boba flavours</p>
        </div>

        <!-- Navigation bar start -->
        <nav>
            <!-- Logo -->
            <p><a href="index.php"><img id="logo" src="images/logo.png" alt="spill the tea logo" height="100"></a></p>

            <!-- Navigation links -->
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="aboutus.php">About Us</a>
            <a href="contact.php">Contact</a>
            <a href="login.php" class="active">Login</a>
        </nav>
        <!-- Navigation bar end -->

        <br> <br> <!-- Give break between navigation bar and log in content -->

        <main>
            <!-- Login page content -->
            <div class="login-form">
                <div class="login-content">
                    <h1>LOGIN</h1>
                    <p>----------------------</p><br>

                    <!-- Login form -->
                    <form name="login_form" id="login_form" method="post" action="process_login.php">
                        <!-- Ask user to fill out their username -->
                        <label for="username">Username</label><br>
                        <input type="text" name="username" required>
                        <br> <br><!-- break for space between one text box and another -->

                        <!-- Ask user to fill out their password -->
                        <label for="password">Password</label><br>
                        <input type="password" name="password" required>
                        <br> <br><!-- break for space between one text box and another -->

                        <!-- Submit button -->
                        <input id="login-submit-button" type="submit" name="submit" value="Log in">
                    </form>
                </div>
                <img class="login-illustration" src="images/login_illustration.jpg" alt="login page illustration" height="350">
            </div>

        </main>

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