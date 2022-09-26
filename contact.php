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

    <!-- Navigation bar start -->
    <nav>
        <!-- Logo -->
        <div id="logo">
            <p><a href="index.php"><img src="images/logo.png" height="100px"></a></p>
        </div>

        <!-- Navigation links --->
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="updatepage.php">Update</a>
        <a href="contact.php" class="active">Contact</a>

        <!-- Login and logout links -->
        <a href="login.php">Login</a></p>
        <a href="logout.php">Logout</a></p>
    </nav>
    <!-- Navigation bar end -->

    <br> <!-- Insert a break so that there's a space between the navigation bar and the body -->

    <main>
        <div class="contact-page">
            <div class="contact-info">
                <h1>CONTACT US</h1>
                <p>TEL: 123-456-789 / SPILLTHETEA@GMAIL.COM</p>
                <p>500 COURTENAY PLACE, WELLINGTON CBD</p>
                <P>OPENING HOURS: 8.00AM - 6.00PM</P>
                <p>----------------------</p><br>
            </div>

            <form id="contact-form" method="post">
                <div class="contact-form-left-column">
                    <!-- Ask user to fill out their full name -->
                    <label for="name">Full Name</label><br>
                    <input type="text" name="name" placeholder="Your Full Name" required>
                    <br> <br><!-- break for space between one text box and another -->

                    <!-- Ask user to fill out their email address -->
                    <label for="email">Email Address</label><br>
                    <input type="email" name="email" placeholder="Your Email Address" required>
                    <br> <br><!-- break for space between one text box and another -->
                </div>

                <div class="contact-form-right-column">
                    <!-- Tell user to fill out their message  -->
                    <label for="message">Message</label><br>
                    <textarea rows="6" placeholder="Your Message"  name="message" required></textarea>
                    <br> <br><!-- break for space between one text box and another -->
                </div>
            </form>
            <!-- Submit button -->
            <button id="contact-submit-button" type="submit" name="submit">Submit</button>
        </div>
    </main>

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