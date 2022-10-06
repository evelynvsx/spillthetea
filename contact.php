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
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="aboutus.php">About Us</a>
            <a href="contact.php" class="active">Contact</a>

            <!-- Login and logout links -->
            <a href="login.php">Login</a>
        </nav>
        <!-- Navigation bar end -->

        <br> <!-- Insert a break so that there's a space between the navigation bar and the body -->

        <main>
            <!-- Contact page content -->
            <div class="contact-page">
                <div class="contact-info">
                    <!-- Store information and contact description -->
                    <h1>CONTACT US</h1>
                    <p>TEL: 123-456-789 / SPILLTHETEA@GMAIL.COM</p>
                    <p>500 COURTENAY PLACE, WELLINGTON CBD</p>
                    <P>OPENING HOURS: 8.00AM - 6.00PM</P>
                    <p>----------------------</p><br>
                </div>

                <!-- Contact form start -->
                <form id="contact-form" method="post" onsubmit="alert ('Thank you for submitting the form');">
                    <div class="contact-form-left-column">
                        <!-- Ask user to fill out their full name -->
                        <label for="name">Full Name</label><br>
                        <input type="text" name="name" minlength="2" maxlength="30" placeholder="Your Full Name" required>
                        <br> <br><!-- break for space between one text box and another -->

                        <!-- Ask user to fill out their email address -->
                        <label for="email">Email Address</label><br>
                        <input type="email" name="email" maxlength="64" placeholder="Your Email Address" required>
                        <br> <br><!-- break for space between one text box and another -->

                        <!-- Submit button -->
                        <button id="contact-submit-button" type="submit" name="submit">Submit</button> <br><br>

                    </div>

                    <div class="contact-form-right-column">
                        <!-- Tell user to fill out their message  -->
                        <label for="message">Message</label><br>
                        <textarea rows="6" placeholder="Your Message"  name="message" required></textarea>
                        <br> <br><!-- break for space between one text box and another -->
                    </div>
                </form>
                <!-- Contact form end -->
            </div>

            <br> <br> <br> <!-- Separate contact form with store location -->

            <!-- Locations content -->
            <div class="locations-description">
                <p>FIND US DOWN BELOW</p>
            </div>
            <div class="locations-content">
                <!-- Locations page information -->
                <h2>OUR LOCATIONS</h2>
                <p>500 COURTENAY PLACE, WELLINGTON CBD</p> <br>

                <br> <!-- Break to give space between embedded google map and information -->

                <!-- Embedded google map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.7108274802827!2d174.77902251535988!3d-41.29339757927297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38afda81e644f9%3A0x61a34c646d9ac821!2sCourtenay%20Place%2C%20Te%20Aro%2C%20Wellington%206011!5e0!3m2!1sen!2snz!4v1664698783561!5m2!1sen!2snz"
                        width="90%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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